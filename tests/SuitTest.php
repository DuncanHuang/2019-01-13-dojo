<?php
/**
 * Created by PhpStorm.
 * User: duncan
 * Date: 2019-01-13
 * Time: 21:54
 */

namespace Tests;

use App\Suit;
use PHPUnit\Framework\TestCase;

class SuitTest extends TestCase
{
    protected function setUp()
    {
    }

    public function test_Flush()
    {
        $suit = new Suit('H5,H3,H8,H2,H4');
        $this->assertEquals('Flush', $suit->getCardType());
        $this->assertEquals([8, 5, 4, 3, 2], $suit->getCardPoint());
    }
}