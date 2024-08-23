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





}















?>