<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Greeting;
use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
  public function testHello()
  {
    $greeting = new Greeting();
    $expected = $greeting->hello();
    $this->assertSame($expected, "hello");
  }

  public function testGoodBye()
  {
    $greeting = new Greeting();
    $expected = $greeting->goodBye();
    $this->assertSame($expected, "good bye");
  }

  public function testGoodNight()
  {
    $greeting = new Greeting();
    $expected = $greeting->goodNight();
    $this->assertSame($expected, "good night");
  }
}