<?php
$heading = "Variables-Task";
echo "<h1>".$heading."</h1>";
$name = "Muhammad Shahzaib Khan";
$age = 22;
$heightInInches = 5.9; // Height inches mein
$heightInMeters = $heightInInches * 0.0254; // Inches ko meters mein convert karna
$pet = true;
$color = "Black";

//echo 
echo "My Name Is : "."<b>".$name."</b>"."<br>";
echo "My Age Is : "."<b>".$age."<b>"."<br>";
echo "My Height In Meters : ".$heightInMeters."<br>"; // Height meters mein print karna
echo "This is your pet or not".$pet? "You have a pet"."<br>" : "not pet"."<br>";
echo "Favourite Color Is : ".$color."<br>";

$heading1 = "Concatenation";
echo "<h1>" .$heading1."</h1>";
$firstname = "Muhammad";
$middlename = "Shahzaib";
$lastname = "Khan";
//echo $firstname." ".$middlename." ".$lastname."<br>"; // this also correct
$fullname = $firstname." ".$middlename." ".$lastname;
echo $fullname."<br>";  // this also correct

$heading2 = "Arithmetic Operations";
echo "<h1>".$heading2."</h2><br>";

//Addition
$Add1 = 5; 
$Add2 = 7;
$resultAdd = $Add1 + $Add2; 
echo "Your Addition Is : ".$resultAdd."<br>";

//Subtraction
$Sub1 = 10; 
$Sub2 = 20;
$resultSub = $Sub1 - $Sub2; 
echo "Your Subtraction Is : ".$resultSub."<br>";

//Multiplcation
$Mul1 = 3; 
$Mul2 = 4;
$resultMul = $Mul1 - $Mul2; 
echo "Your Multiplicaton Is : ".$resultMul."<br>";

//Division
$Div1 = 20; 
$Div2 = 5;
$resultDiv = $Div1 - $Div2; 
echo "Your Division Is : ".$resultDiv."<br>";

//Modulus
$Mod1 = 11; 
$Mod2 = 3;
$resultMod = $Mod1 - $Mod2; 
echo "Your Modulus Is : ".$resultMod."<br>";

?>