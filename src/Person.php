<?php

namespace ProgrammerZamanNow\Test;

class Person {

    public function __construct(private string $name) {}

    public function sayHello(?string $name)
    {
        if ($name == null) throw new \Exception("name is null");
        return "Hello $name, my name is $this->name";
    }

    public function sayGoodBye(?string $name): void
    {
        echo "Good bye $name" . PHP_EOL;
    }

}

?>