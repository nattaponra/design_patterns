<?php
include_once 'OutputInterface.php';
class SerializedArrayOutput implements OutputInterface
{
    public function load($arrayOfData)
    {
        return serialize($arrayOfData);
    }
}