<?php
class BidTest extends PHPUnit_Framework_TestCase
{
    public function testGreater()
    {
        $bagos = 2;
        $bide1 = new Bid(4,3);

        $bide2 = new Bid(3,1);
        $this->assertTrue($bide2->greaterThan($bide1,$bagos));

        $bide2 = new Bid(4,4);
        $this->assertTrue($bide2->greaterThan($bide1,$bagos));

        $bide2 = new Bid(5,2);
        $this->assertTrue($bide2->greaterThan($bide1,$bagos));

        $bide2 = new Bid(5,4);
        $this->assertTrue($bide2->greaterThan($bide1,$bagos));
       
    }

    public function testNotGreater()
    {
        $bagos = 2;
        $bide1 = new Bid(4,3);

        $bide2 = new Bid(3,5);
        $this->assertFalse($bide2->greaterThan($bide1,$bagos));

        $bide2 = new Bid(4,2);
        $this->assertFalse($bide2->greaterThan($bide1,$bagos));

        $bide2 = new Bid(4,3);
        $this->assertFalse($bide2->greaterThan($bide1,$bagos));

        $bide2 = new Bid(2,1);
        $this->assertFalse($bide2->greaterThan($bide1,$bagos));  
    }

    public function testGreaterAfterBago()
    {
        $bagos = 1;
        $bide1 = new Bid(3,1);

        $bide2 = new Bid(6,2);
        $this->assertTrue($bide2->greaterThan($bide1,$bagos));

        $bide2 = new Bid(4,1);
        $this->assertTrue($bide2->greaterThan($bide1,$bagos));
    }

    public function testNotGreaterAfterBago()
    {
        $bagos = 1;
        $bide1 = new Bid(3,1);

        $bide2 = new Bid(3,2);
        $this->assertFalse($bide2->greaterThan($bide1,$bagos));

        $bide2 = new Bid(2,1);
        $this->assertFalse($bide2->greaterThan($bide1,$bagos));
    }

}