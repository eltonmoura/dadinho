<?php
namespace Model;

/**
 * Classe que representa um Lance (Bid) do jogador. Todo lance tem uma quantidade e um valor.
 **/
class Bid
{
    private $quantity;
    private $value;

    public function __construct($quantity = 0, $value = 0)
    {
        $this->quantity = $quantity;
        $this->value = $value;
        if (!$this->isValid()) {
            throw new InvalidArgumentException("$quantity e $value devem ser um inteiro maior ou igual a zero.");
        }
    }
    
    /**
     * Retorna true se este lance for maior que o lance informado ou maior que quantidade de bagos (aces)
     * já pedidos anteriormente.
     *
     * Um lance é maior se:
     * 1- A quantidade em bagos for maior que a já pedida anteriormente e maior que a metade 
     * (arrendodado para cima) da quantidade do lance informado;
     * 2- O valor for maior que a anterior;
     * 3- O valor for igual porem a quantidade;
     *
     **/
    public function greaterThan(Bid $bid, $aces = 0)
    {
        if ($this->value == 1 && $bid->getValue() > 1) {
            if ($this->quantity > $aces && $this->quantity > ceil($bid->getQuantity()/2)) {
                return true;
            }
            return false;
        }
        
        if ($this->quantity > $bid->getQuantity()) {
            return true;
        }
        if ($this->quantity == $bid->getQuantity() && $this->value > $bid->getValue()) {
            return true;
        }
        return false;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getValue()
    {
        return $this->value;
    }


    public function isValid()
    {
        return ( is_int($this->quantity) && $this->quantity >= 0 && Dice::validFace($this->value));
    }
}
