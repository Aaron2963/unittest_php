<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    public function testNameGetterAndSetter()
    {
        $user = new User();
        $user->setName('John Doe');
        $this->assertEquals('John Doe', $user->getName());
    }
}