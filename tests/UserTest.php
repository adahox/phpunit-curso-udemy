<?php
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
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

    /**
     * @test
     */
    public function user_has_surname()
    {
        $user = new User;
        $user->surname = "Dias";

        $this->assertEquals("Dias", $user->surname);
    }

}