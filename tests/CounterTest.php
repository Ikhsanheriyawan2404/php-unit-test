<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase {

	private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo PHP_EOL . "Membuat counter" . PHP_EOL;
    }

	public function testCounter()
	{

		$this->counter->increment();
		Assert::assertEquals(1, $this->counter->getCounter());

		$this->counter->increment();
		self::assertEquals(2, $this->counter->getCounter());

		$this->counter->increment();
		$this->assertEquals(3, $this->counter->getCounter());
	}

	// public function testOther()
	// {
	// 	echo "Other" . PHP_EOL;
	// }

	/**
	 * @test
	 */
	public function increment()
	{
		self::markTestSkipped("Masih ada error yang bingung");
		$this->counter->increment();
		Assert::assertEquals(1, $this->counter->getCounter());
	}

	public function testFirst(): Counter
	{
		$this->counter->increment();
		$this->assertEquals(1, $this->counter->getCounter());
		return $this->counter;
	}

	/**
	 * @depends testFirst
	 */
	public function testSecond(Counter $counter): void
	{
		$counter->increment();
		$this->assertEquals(2, $counter->getCounter());
	}

	public function testIncrement()
	{
		$this->counter->increment();
		Assert::assertEquals(1, $this->counter->getCounter());
		self::markTestIncomplete("Belum Selesai");
		// Incomplete
	}

	protected function tearDown(): void
	{
		echo "Tear Down" . PHP_EOL;
	}

	/**
	 * @after
	 */
	protected function after()
	{
		echo "After" . PHP_EOL;
	}

	/**
	 * @requires OSFAMILY Windows
	 * @requires PHP >= 8
	 */
	public function testOnlyWindows()
	{
		self::assertTrue(true, "Only In Windows");
	}

}