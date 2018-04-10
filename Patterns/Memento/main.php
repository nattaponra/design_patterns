<?php
include_once ("Originator.php");
include_once ("CareTaker.php");
 
$originator = new Originator();
$careTaker  = new CareTaker();
 
$originator->setState("State #1"); // Create state #1
$originator->setState("State #2"); // Create state #2
$careTaker->add($originator->saveStateToMemento()); //Save current state
 
$originator->setState("State #3"); // Create state #3
$careTaker->add($originator->saveStateToMemento()); //Save current state

$originator->setState("State #4"); // Create state #4
print_r("Current State: ".$originator->getState()."\n"); // Get current state

## Rollback State
$originator->getStateFromMemento($careTaker->get(0));  //Rollback to first saved state
print_r("First saved State: ".$originator->getState()."\n");

$originator->getStateFromMemento($careTaker->get(1));  //Rollback to first saved state
print_r("Second saved State: ".$originator->getState()."\n");
