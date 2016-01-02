<?php

use mchelen\HelloWorld\SayHello;

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
  public function testSayHello()
  {
    $this->assertEquals(
      SayHello::world(),
      "Hello World, Composer!"
      );
  }
}
