<?php
class NewClass{
    public $data = "This is a property";

    public function SetNewproperty($newdata){
        $this->data = $newdata;
    }
    public function getProperty(){
        return $this->data;
    }
}
//accessing the properties and methods in the (NewClass)
$object = new NewClass;
//display the original property
echo $object->getProperty()."<br />";
//set the new property to the original
$object->setNewproperty("This is now the new string");
//display the new property
echo $object->getProperty();

?>