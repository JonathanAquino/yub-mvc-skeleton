<?php

require_once 'app/models/Command.php';

class CommandTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        $this->command = new Command();
    }

    public function testHelloWorld() {
        $this->assertEquals('hello', 'hello');
    }
}

