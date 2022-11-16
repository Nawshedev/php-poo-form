<?php

class Form
{

    private $nameAttr;
    private $methodAttr;
    private $actionAttr;
    private $tableauChamps;

    public function __construct($nameAttr, $methodAttr, $actionAttr)
    {
        $this->nameAttr = $nameAttr;
        $this->methodAttr = $methodAttr;
        $this->actionAttr = $actionAttr;
        $this->tableauChamps = [];
    }

    public function ajouterChamp($inputType, $inputName, $label)
    {
        $input = new Champ($inputType, $inputName, $label);
        $this->tableauChamps[] = $input->genererChamp();
        var_dump($this->tableauChamps);
    }

    public function generer()
    {
        echo "<form name='$this->nameAttr' method='$this->methodAttr' action='$this->actionAttr'>";

        foreach ($this->tableauChamps as $champ)
        {
            echo "<p>";
            echo $champ;
            echo "</p>";
        }

        echo "</form>";
    }

}
