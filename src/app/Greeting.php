<?php

namespace App;

class Greeting
{
  public function hello(): string
  {
    return "hello";
  }
	// ここから追加する
  public function goodBye(): string
  {
    return "good bye"
  }
}

