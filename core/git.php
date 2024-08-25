<?


class Git {


    private $conn;
    private $table='git';


public $id;
public $name;
public $description;
public $example;





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
    $this->name=$arr['функция'];
    $this->description=$arr['описание'];
    $this->example=$arr['пример'];

    return($arr);
}

    
}

public function create_note(){

    $sth = $this->conn->prepare("INSERT INTO $this->table SET `функция` = :name, `описание` = :desc, `пример`= :example");
    //clean data
   
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->description=htmlspecialchars(strip_tags($this->description));
    $this->example=htmlspecialchars(strip_tags($this->example));

    if($sth->execute(['name' => $this->name, 'desc' => $this->description,'example'=>$this->example])){
        return true;
    }
    print_r('error');
return false;


}

public function update_note(){

$sth = $this->conn->prepare("UPDATE $this->table SET `функция` = :f, `описание` = :desc,`пример`= :ex WHERE `id` = :id");

$this->name=htmlspecialchars(strip_tags($this->name));
$this->description=htmlspecialchars(strip_tags($this->description));
$this->example=htmlspecialchars(strip_tags($this->example));
$this->id=htmlspecialchars(strip_tags($this->id));

if($sth->execute(['f' => $this->name, 'desc' => $this->description,'ex'=>$this->example,'id'=>$this->id])){
    return true;
}
print_r('error');
return false;
}

public function delete_note(){

    $sth =  $this->conn->prepare("DELETE FROM $this->table WHERE `id` = :id");
    
    //clean
    $this->id=htmlspecialchars(strip_tags($this->id));

    if($sth->execute(['id' => $this->id]))
    {
        return true;
    }
    print_r('error');
    return false;
    }


}
