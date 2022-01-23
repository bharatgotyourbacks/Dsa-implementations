<?php
include("src/Doublelinkedlist.php");
$list=new mylinkedlist();
$list->insertfirst(50);
$list->insertfirst(20);
$list->insertfirst(40);
$list->insertfirst(30);

$list->insertlast(10);
$list->printlist();
echo"\n";
$list->deleteAtLast();
$list->printlist();
echo"\n";
$list->deleteAtFirst();
$list->printlist();
echo "\n";
$list->deleteAtGiven(2);
$list->printlist();
echo"\n";
echo "No. of nodes: ".$list->countNodes();
echo"\n";
$list->push_at(100,2);
$list->printlist();
echo"\n";
$list->SearchElement(50);