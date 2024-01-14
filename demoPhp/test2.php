<?php
    class Student{
        public $name;
        private $age;
        private $address;
        public function setInput($name,$age,$address){
            $this->name=$name;
            $this->age=$age;
            $this->address=$address;
        }
        public function getOutput(){
            echo $this->name.$this->age.$this->address;
        }
    }
    class Teacher extends Student{
        public function setName($na){
            $this->name=$na;
        }
        public function getName(){
            echo $this->name;
        }
    }
    $teacher = new Teacher();
    $teacher->setInput('strocky',8,'PPC');
    $teacher->getOutput();

    $teacher->setName('Teacher');
    $teacher->getName();
?>