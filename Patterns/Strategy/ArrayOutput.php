<?php
include_once 'OutputInterface.php';
class ArrayOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return $arrayOfData;
    }
}