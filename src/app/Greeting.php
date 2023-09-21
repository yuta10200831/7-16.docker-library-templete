<?php

namespace App;

class Greeting
{
  public function hello(): string
  {
    return "hello";
  }

  public function goodBye(): string
  {
    return "good bye";
  }
	// ここから追加する
  public function goodNight(): string
  {
    return "good night";
  }
}

