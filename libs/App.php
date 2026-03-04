<?php
// ensure config is loaded relative to this file's directory
require_once __DIR__ . '/../config/config.php';

class App
{
    public $host = HOST;
    public $dbname = DBNAME ;
    public $user = USER;
    public $pass = PASS;

    public $link;

    public function __construct()
    {
        $this->connect();


    }

 public function connect(){
    
    $this->link = new PDO(
            "mysql:host=" . $this->host . ";dbname=" . $this->dbname,
            $this->user,
            $this->pass);
        
         

        if ($this->link) {
            echo "Connected";
        }
    

  
    }
     
public function selectAll ($query){

    $rows = $this->link->query($query);
    $rows->execute();

    $allRows = $rows->fetchAll(PDO::FETCH_OBJ);
    if ($allRows) {
        return $allRows;
    } else {
        return false;
    }
    
 

}

public function selectOne ($query){

    $row = $this->link->query($query);
    $rows
    ->execute();

    $singleRow = $row->fetchAll(PDO::FETCH_OBJ);
    if ($singleRow) {
        return $singleRow;
    } else {
        return false;
    }
    
 

}

public function insert ($query, $arr, $path){

    if ($this->validate($arr) ==  "empty") {
        echo "<script>alert('Please fill all the fields')</script>";
    } else {
        $insert_record =  $this->link->prepare($query);
        $insert_record->execute($arr);

        header("Location: " .$path. "");
    }

}


public function update ($query, $arr, $path){
    
    if ($this->validate($arr) ==  "empty") {
        echo "<script>alert('Please fill all the fields')</script>";
    } else {
        $update_record =  $this->link->prepare($query);
        $update_record->execute($arr);

        header("Location: " .$path. "");
    }

}

public function delete($query, $path){
    
        $delete_record =  $this->link->query($query);
        $delete_record->execute($arr);

        header("Location: " .$path. "");
    
}

public function validate($arr) {
    if (in_array("", $arr)) {
        echo "empty";
    }

}


public function register ($query, $arr, $path){

    if ($this->validate($arr) ==  "empty") {
        echo "<script>alert('Please fill all the fields')</script>";
    } else {
        $register_user =  $this->link->prepare($query);
        $register_user->execute($arr);

        header("Location: " .$path. "");
    }

}

public function login ($query, $arr, $path){


        $login_user =  $this->link->query($query);
        $login_user->execute();
        $fetch = $login_user->fetch(PDO::FETCH_OBJ);

        if($login_user->rowCount() > 0) {
            if (password_verify($data['password'], $fetch['password'])) {
            
             header("Location: " .$path. "");
        
}
    }

}

public function startingsession() {
    session_start();
}

public function validateSession() {
    if (isset($_SESSION['id'])) {
        header("Location: " .$path. "");
    }
}
}

$obj = new App;