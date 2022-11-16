<?php

class Champ
{
    private $inputType;
    private $inputName;
    private $label;

    public function __construct($inputType, $inputName, $label)
    {
        $this->inputType = $inputType;
        $this->inputName = $inputName;
        $this->label = $label;
    }

    private function genererLabel()
    {
        return "<label for='$this->inputName'>$this->label</label>";
    }

    private function genererInput()
    {
        return "<input type='$this->inputType' id='$this->inputName' name='$this->inputName' >";
    }

    public function genererChamp()
    {
        if ($this->inputType !== "submit") {
            $this->genererLabel();
        }
        $this->genererInput();
    }
}
