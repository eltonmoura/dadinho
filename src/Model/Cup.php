<?php
namespace Model;

/**
 * Classe que representa o Copo do jogador. Um copo contém dados (Dices) que quando sacudido (shake)
 * geram uma sequencia de valores.
 **/
class Cup
{
    private $dices;

    public function __construct($numberDices = 3)
    {
        $this->shake($numberDices);
    }

    public function shake($numberDices = null)
    {
        if ($numberDices == null) {
            $numberDices = count($this->dices);
        }
        $this->dices = array();
        for ($i=0; $i < $numberDices; $i++) {
            $this->dices[] = new Dice();
        }
    }

    public function value()
    {
        $value = array();
        foreach ($this->dices as $dice) {
            $value[] = $dice->value();
        }
        return $value;
    }

    public function removeDice()
    {
        if (is_array($this->dices) && count($this->dices) > 0) {
            array_pop($this->dices);
            return true;
        }
        return false;
    }

    public function countDices()
    {
        return count($this->dices);
    }
}
