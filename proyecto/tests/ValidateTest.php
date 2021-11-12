<?php

    use PHPUnit\Framework\TestCase;
    use App\Validate;

    class ValidateTest extends TestCase{

        public function test_email(){
            $email=Validate::email('i@imorsoft.com');
            $this->assertTrue($email);

            $email=Validate::email('i@@imorsoft.com');
            $this->assertFalse($email);
        }

        public function test_password(){
            $password=Validate::password('A1234#5');
            $this->assertTrue($password);           
        }
    } 