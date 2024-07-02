<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use App\User;

#[CoversClass(User::class)]
class UserTest extends TestCase
{
    public function testNameGetterAndSetter()
    {
        $user = new User();
        $user->setName('John Doe');
        $this->assertEquals('John Doe', $user->getName());
    }
}