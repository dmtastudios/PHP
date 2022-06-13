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
    
<?php
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
}
























?>






















</body>
</html>