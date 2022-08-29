<?php
    class Cliente{
        public $name;
        public $adress;
        public $cpf;
        public $email;

        //public function __construct(){
            //echo "Construtor ";
        //}
        public function __construct($name, $adress, $cpf, $email){
            echo "Construtor 2 ";
            $this->name = $name;
            $this->adress = $adress;
            $this->cpf = $cpf;
            $this->email = $email;
        }
        function print(){
            echo "Printando objeto: ";
            echo $this->name . " " . $this->adress . " " . $this->cpf . " " . $this->email;
        }
    }

    echo "<br>";

    $Maria = new Cliente("Maria", "Rua almdeida", "3433", "343434", "@gmail");
    $Maria->print();
    
    //$Danyllo = new Cliente();
    //$Danyllo->name = "Danyllo";
    //$Danyllo->adress = "Avenida 123";
    //$Danyllo->cpf = "255255255";
    //$Danyllo->email = "danylo@gmail";
    //$Danyllo->print();

    //echo "<br>";

    //$David = new Cliente();
    //$David->name = "David";
    //$David->adress = " 123";
    //$David->cpf = "343843874";
    //$David->email = "david@gmail";
    //$David->print();

?>
