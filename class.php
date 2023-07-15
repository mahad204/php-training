<?php
//Making a class
class User {
    private $name;
    // private $password;
    protected $email;

    //constructor
    public function __construct($name,$email){
        // $this->name="Yare";     //$this refers to current instance (object) being created
        $this->name=$name;      //setting name property with value passed as argument while creating
        $this->email=$email;

    }

    public function login(){
        // echo "User logged in";
        echo $this->name . " logged in ";
        echo $this->email . " logged in";
    }

    public function getName(){//use this for private
        return $this->name ;
    }

    public function setName($name){
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "Name has been updated to $name";
        } else {
            return "not a valid name";
        }
    }
}
// $userOne = new User();  #creating an object of the user class. Here, we are
// $userOne->login();
// echo $userOne->name;
#assigning values to its properties using dot notation or by calling their setters methods
#$user->setName("John");   #$user->setEmail("<EMAIL>");    #calling setter
$userTwo=new User('ab','a@b.com');
// $userTwo->login();
echo "<br>";
echo $userTwo->getName();
echo "<br>";
echo $userTwo->setName('bab');
echo "<br>";
echo $userTwo->getName();




?>