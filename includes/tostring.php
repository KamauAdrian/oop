<?php
class NewClass{
    public $data = "This is a property";
    public $error = "This is the class called ".__CLASS__."";
    public function __construct()
    {
        echo 'This class has been instantiated<br/>';
    }
    public function __toString()
    {
        echo "to string method: ";
        return $this->error;
    }

    public function SetNewproperty($newdata){
        $this->data = $newdata;
    }
    public function getProperty(){
        return $this->data;
    }
    public function __destruct()
    {
        echo 'This is the end of the class';
    }
}
//accessing the properties and methods in the (NewClass)
$object = new NewClass;

echo $object;