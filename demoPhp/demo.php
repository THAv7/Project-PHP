<?php
    Interface Car{
        public function setModel($name);
        public function getModel();
    }
    class fashion implements Car{
        private $name=null;
        public function setModel($na){
            $this->name=$na;
        }
        public function getModel(){
            return $this->name;
        }
    }
    $fash = new fashion();
    $fash->setModel("carmary");
    echo $fash ->getModel();
?>