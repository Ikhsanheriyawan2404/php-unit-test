<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase {

    static public Counter $counter;

    static public function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
    }

    public function testFirst()
    {
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }

    public function testSecond()
    {
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
    }

    static public function tearDownAfterClass(): void
    {
        echo PHP_EOL . "Unit Test Selesai";
    }
}