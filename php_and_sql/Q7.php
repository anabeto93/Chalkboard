<?php
/**
* Author: Richard Anabeto Opoku
* Purpose: To instatiate an instance of the Human class, walking 10 steps and then turning around
*
*/

include ("Human.php");

//Instantiating Richard
$richard =  new Human('Richard','Developer');

//walk 10 steps
$richard->walk(10);

//turn around 180 degress
$richard->turns(180);

//show Richie's status
$richard->status();
