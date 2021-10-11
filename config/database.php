<?php 
    include 'settings.php';
    
Class Database{
    public $host = HOST;
    public $db = DATABASE;
    public $user = USERNAME;
    public $pass = PASSWORD;

    function __construct(){
        $this->dbConnection();
    }

    public function dbConnection(){
        $this->conn = new Mysqli($this->host, $this->user,$this->pass,$this->db);
        if($this->conn->connect_errno){
            echo "not connnected";
            exit();
        }
    }
    public function dataPrint($query){
        $data = $this->conn->query($query);
        if($data->num_rows > 0){
            return $data;
        }
        else {
            return false;
        }
    }
    public function prepareStatement($query){
        $data = $this->conn->query($query);
        if($data){
            return $data;
        }
        else {
            echo "error";
        }
    }
}
?>