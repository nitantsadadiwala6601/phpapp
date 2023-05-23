<?php
use PHPUnit\Framework\TestCase;
class MyTest extends TestCase
{
    public function testAddition()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }

    public function testSubtraction()
    {
        $result = 5 - 3;
        $this->assertEquals(2, $result);
    }

    public function testMultiplication()
    {
        $result = 4 * 3;
        $this->assertEquals(12, $result);
    }

    public function testDivision()
    {
        $result = 10 / 2;
        $this->assertEquals(5, $result);
    }
}
?>
