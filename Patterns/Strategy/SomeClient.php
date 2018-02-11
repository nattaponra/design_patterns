<?php
include_once 'OutputInterface.php';
class SomeClient
{
    private $output;
    private $input;
    public function setInput($input){
        $this->input = $input;
    }
    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput()
    {
        return $this->output->load($this->input);
    }
}