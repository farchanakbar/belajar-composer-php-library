<?php

namespace Farchanakbar\Belajar;

class Customer
{

  public function __construct(private string $name)
  {
  }

  public function sayHello(string $name = "gak bahaya ta"): string
  {
    return "Hello $name, My name is $this->name" . PHP_EOL;
  }
}
