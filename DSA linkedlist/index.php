<?php
include("src/Linkedlist.php");




$MyList = new LinkedList();

$MyList->push_front(10);
$MyList->push_front(20);
$MyList->push_front(30);
$MyList->PrintList();
$MyList->push_back(400);
$MyList->PrintList();
$MyList->pop_back();
$MyList->PrintList();