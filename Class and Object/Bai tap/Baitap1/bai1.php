<form method="POST">
    <label>Enter input a</label>
    <input type="text" name="inputa">

    <label>Enter input b</label>
    <input type="text" name="inputb">

    <label>Enter input c</label>
    <input type="text" name="inputc">

    <label>QuadraticEquation</label>
    <input type="submit" value="QuadraticEquation">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputa = $_POST['inputa'];
    $inputb = $_POST['inputb'];
    $inputc = $_POST['inputc'];

    class QuadraticEquation {
        private $inputa;
        private $inputb;
        private $inputc;
        function __construct($inputa,$inputb,$inputc){
            $this->inputa = $inputa;
            $this->inputb = $inputb;
            $this->inputc = $inputc;
        }
        public function getInputA() {
            return $this->inputa;
        }
        public function getInputB() {
            return $this->inputb;
        }
        public function getInputC() {
            return $this->inputc;
        }
        public function getDiscriminant(){
            return ($this->getInputB())**2 - 4*($this->getInputA())*($this->getInputC()) ;
        }
        public function getRoot1() {
            return (-($this->getInputB())+(sqrt($this->getDiscriminant())))/(2*$this->getInputA());
        }
        public function getRoot2() {
            return (-($this->getInputB())-(sqrt($this->getDiscriminant())))/(2*$this->getInputA());
        }
        public function getDoubleExp(){
            return (-($this->getInputB())/(2*$this->getInputA()));
        }
    }

}

$quadraticEquation = new QuadraticEquation($inputa,$inputb,$inputc);
$a = $quadraticEquation -> getInputA();
$b = $quadraticEquation -> getInputB();
$c = $quadraticEquation -> getInputC();
$delta = $quadraticEquation -> getDiscriminant();
$double = $quadraticEquation -> getDoubleExp();
$root1 = $quadraticEquation -> getRoot1();
$root2 = $quadraticEquation -> getRoot2();
if( $delta > 0 ) {
    echo "The equation has two roots : x1 =  $root1  &  x2 = $root2 <br>";
} else if ( $delta == 0 ) {
    echo "The equation has one root x1 = x2 = $double <br>";
} else {
    echo "The equation has no roots";
}

?>