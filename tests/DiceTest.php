<?php
class DiceTest extends PHPUnit_Framework_TestCase
{

 public function testValuesFace()
    {
        $dice = new Dice();
        
        // Asserts
        $this->assertContains($dice->value(), array(1, 2, 3, 4, 5, 6));
    }

}