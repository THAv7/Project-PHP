<?php
    class product{
        protected $productname;
        function __construct(){
            echo 'Hello world';
        }
        function show(){
            echo '<br>welcome for a day work';
        }
    }
    $product = new product();
    $product->show();
?>

<?php
    class test{
        public $firstname;
        private $lastname;
        protected $password;

        public function setfirstname($firstname){
            $this->firstname = $firstname;
        }
        public function getfirstname(){
            return $this->firstname;
        }
        public function setlastname($lastname){
            $this->lastname = $lastname;
        }
        public function getlastname(){
            return $this->lastname;
        }
    }
    $test = new test();
    $test->setfirstname('chantha');
    echo $test->getfirstname();

    $test->setlastname('Vantha');
    echo $test->getlastname();

?>