<!-- // GreetingTest.php -->
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Greeting;
use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
  public function testHello()
  {
    $greeting = new Greeting();
		// Greetingクラスのhelloメソッドを呼び出し、返り値（"hello"）を$expectedに代入しています。
    $expected = $greeting->hello();
		// $expectedと"hello"が等しいか比較しています。
    $this->assertSame($expected, "hello");

    $greeting = new Greeting();
    $expected = $greeting->goodBye();
    $this->assertSame($expected, "good bye");

  }
}