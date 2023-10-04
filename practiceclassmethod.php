<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator by OOP</title>


<style>

 td {
    color: #000;
 }


</style>


</head>
<body>

<form action="" method="POST">

    <table>
        <tr>
            <td><h3>Enter your first number :</h3></td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td><h3>Enter your first number :</h3></td>
            <td><input type="number" name="num2"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name = "calculation" value="Submit"></td>
        </tr>
    </table>
</form>


<?php 

if(isset($_POST["calculation"])){

    $numone = $_POST['num1'];
    $numtwo = $_POST['num2'];


    if(empty($numone) || empty($numtwo)){
        echo "<span style='color:#EE6554;'> Field must not be empty. </span>";
    }
    $cal = new calculat;
    $cal -> add($numone,$numtwo);
    $cal -> sub($numone,$numtwo);
    $cal -> mult($numone,$numtwo)."\n";
    $cal -> divi($numone,$numtwo);
}


class calculat{

        
    function add($numone,$numtwo){
        echo "Sumation: ".$numone+$numtwo."\n";
    }
    function sub($numone,$numtwo){
        echo "Substract: ".$numone-$numtwo."\n";
    }
    function mult($numone,$numtwo){
        echo "Multiplication: ".$numone*$numtwo."\n";
    }
    function divi($numone,$numtwo){
        echo "Division: ".$numone%$numtwo."\n";
    }
}









?>








    
</body>
</html>
























