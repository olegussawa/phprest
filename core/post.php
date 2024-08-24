<?


class Post {


    private $conn;
    private $table='продукты';


public $id;
public $name;
public $price;
public $number;





public function __construct($db) {
    $this->conn = $db;
}


public function read()
{
    $query="SELECT * FROM $this->table";

    $sth = $this->conn->prepare($query);
    $sth->execute();
    return $sth;
}

public function read_single(){

    $sth = $this->conn->prepare("SELECT * FROM $this->table WHERE `id` = :id");
    $sth->execute(['id'=>$this->id]);
    //$sth->execute(['id'=>3]);
    $arr = $sth->fetch(PDO::FETCH_ASSOC);
   
if(!empty($arr)){
    $this->id=$arr['id'];
    $this->name=$arr['name'];
    $this->price=$arr['price'];
    $this->number=$arr['number'];

    return($arr);
}

    
}

public function create_note(){

    $sth = $this->conn->prepare("INSERT INTO $this->table SET `name` = :name, `price` = :price, `number`= :number");
    //clean data
   
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->price=htmlspecialchars(strip_tags($this->price));
    $this->number=htmlspecialchars(strip_tags($this->number));

    if($sth->execute(['name' => $this->name, 'price' => $this->price,'number'=>$this->number])){
        return true;
    }
    print_r('error');
return false;


}




}

















?>