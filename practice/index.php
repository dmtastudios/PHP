<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form>
<input type="text" name="num1" placeholder="Number One">
<input type="text" name="num2"
placeholder="Number Two">
<select name="operator" id="operatorid">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
</select>
<button type="submit">SUBMIT</button>
</form>
<p>The answer is:</p>



<?php
if (isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator) {
        case 'None':
echo "Choose one.";
            break;
        case 'Add':
echo $result1 + $result2;
            break;
        case 'Subtract':
echo $result1 + $result2;
            break;
        case 'Multiply':
echo $result1 + $result2;
            break;
        case 'Divide':
echo $result1 + $result2;
            break;
    }













    }

$animals = array('Cat', 'Dog', 'Duck');

switch ($animals[array_rand($animals)]){
    case 'Cat': 
    echo 'Meow';
    break;
    case 'Dog': 
    echo 'Woof';
    break;
    case 'Duck': 
    echo 'Quack';
    break;
    default: echo "Unkown animal detected. Now might be a good time to start running.";

}

$speed = "65MPH";

switch ($variable) {
    case 'value':
        # code...
        break;
    
    // default:
    //     # code...
    //     break;
}




















?>






















</body>
</html>