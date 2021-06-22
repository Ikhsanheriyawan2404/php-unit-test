<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase {

    private Person $person;

    protected function setUp(): void {}

    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Ikhsan");
    }

    public function testSuccess()
    {
        self::assertEquals("Hello Kuncoro, my name is Ikhsan", $this->person->sayHello("Kuncoro"));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testSayGoodBye()
    {
        $this->expectOutputString("Good bye Kuncoro" . PHP_EOL);
        $this->person->sayGoodBye("Kuncoro"); 
    }

}