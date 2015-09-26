<?php
namespace Dadinho;

/**
 * Classe que representa um dado (Dice). Um dado tem um numero de lados ($N_FACES) e quando 
 * lançado (roll), possui um valor (face).
 **/
class Dice
{
   
    const N_FACES = 6;

    private $value;

    public function __construct()
    {
        $this->roll();
    }

    public function roll()
    {
        $this->value = rand(1, self::N_FACES);
    }

    public function value()
    {
        return $this->value;
    }

    public static function validFace($face)
    {
        return ( is_integer($face) && $face > 1 && $face < self::N_FACES );
    }
}
