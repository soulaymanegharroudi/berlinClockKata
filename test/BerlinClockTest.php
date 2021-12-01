<?php

require("../src/BerlinClock.php");

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase{

    public function testCountminutes0ExpectedXXXX(){
        $clock = new BerlinClock(0, 0, 0);
        $this->assertEquals("XXXX", $clock->getMinutesLine());
    }

    public function testCountminutes1ExpectedOXXX() {
        $clock = new BerlinClock(0, 1, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OXXX", $result);
    }

    public function testCountminutes1ExpectedOOXX() {
        $clock = new BerlinClock(0, 2, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OOXX", $result);
    }

    public function testCountminutes1ExpectedOOOX() {
        $clock = new BerlinClock(0, 3, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OOOX", $result);
    }

    public function testCountminutes1ExpectedOOOO() {
        $clock = new BerlinClock(0, 4, 0);
        $result = $clock->getMinutesLine();
        $this->assertEquals("OOOO", $result);
    }

    public function testCountMinutesPer50Expected11X(){
        $clock = new BerlinClock(0, 0, 0);
        $result = $clock->getMinutesPer5Line();
        $this->assertEquals("XXXXXXXXXXX", $result);
    }

}
