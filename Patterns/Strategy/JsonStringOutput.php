<?php
include_once 'OutputInterface.php';
class JsonStringOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return json_encode($arrayOfData);
    }
}