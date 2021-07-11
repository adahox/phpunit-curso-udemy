<?php
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        require 'user.php';

        $user = new User;
        $user->first_name = "Adão";
        $user->surname = "Dias";

        $this->assertEquals("Adão Dias", $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }

    public function testUserHasFirstName()
    {
        $user = new User;
        $user->first_name = "Adão";

        $this->assertEquals("Adão", $user->first_name);
    }
}