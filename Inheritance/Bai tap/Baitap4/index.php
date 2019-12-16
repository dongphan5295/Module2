<?php
include_once('Shape.php');
include_once ('Triangle.php');
$errorSide1 = null;
$errorSide2 = null;
$errorSide3 = null;
$errorcolor = null;
$message = null;
$perimeter = null;
$area = null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {

   
    $inside1 = $_POST["side1"];
    $inside2 = $_POST["side2"];
    $inside3 = $_POST["side3"];
    $color = (string) $_POST["color"];
    function test_input($data){
        $data = trim($data);
        if (preg_match("/^[-+]?[0-9]*\.?[0-9]+$/", $data)){
            return (float)$data;
        }else {
            return false;
        }
    }

    $errorSide1 = empty($inside1) ? "required side1" : !test_input($inside1) ? "Invalid input" : "";
    $errorSide2 = empty($inside2) ? "required side2" : !test_input($inside2) ? "Invalid input" : "";
    $errorSide3 = empty($inside3) ? "required side3" : !test_input($inside3) ? "Invalid input" : "";
    $errorcolor = empty($color) ? "required color" : "";
    
    if ($errorSide1 === "" && $errorSide2 === "" && $errorSide3 === "" && $errorcolor === "") {
        function validateTriangle($sideA, $sideB, $sideC)
        {
            if ($sideA + $sideB <= $sideC || $sideA + $sideC <= $sideB || $sideB + $sideC <= $sideA) {
                throw new Exception("Invalid triangle sides");
            } else {
                return true;
            }
        }
        $triangle = new Triangle($color);
        $triangle->setSide1($inside1);
        $triangle->setSide2($inside2);
        $triangle->setSide3($inside3);
        
        $side1 = $triangle->getSide1();
        $side2 = $triangle->getSide2();
        $side3 = $triangle->getSide3();

        try {

            if (validateTriangle($side1, $side2, $side3)) {
                $message = $triangle->__toString();
                $perimeter = "My Perimeter is: " . $triangle->getPerimeter();
                $area = "My Area is: " .  $triangle->getArea();
            }
        } catch (Exception $e) {
            $message = $e->getMessage();
        }
    }
}
?>
<form method="post">
    <h1>Triangle calculator</h1>
    <input type="text" name="side1" placeholder="Enter the side 1">
    <span><?php echo $errorSide1 ?></span><br>
    <input type="text" name="side2" placeholder="Enter the side 2">
    <span><?php echo $errorSide2 ?></span><br>
    <input type="text" name="side3" placeholder="Enter the side 3">
    <span><?php echo $errorSide3 ?></span><br>
    <input type="text" name="color" placeholder="Enter the color">
    <span><?php echo $errorcolor ?></span><br>
    <input type="submit" value="Calculator"><br>

    <span><?php echo $message?></span><br>
    <span><?php echo $perimeter; ?></span><br>
    <span><?php echo $area; ?></span>
</form>