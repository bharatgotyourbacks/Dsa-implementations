<?php
include("src/Stack.php");


$MyStack = new CreateStack();
$MyStack->push(10);
$MyStack->push(20);
$MyStack->push(30);
$MyStack->push(40);
$MyStack->print();
$MyStack->isEmpty();
echo "\n";

echo "\n";



$MyStack->pop();
echo "\n";
$MyStack->print();






