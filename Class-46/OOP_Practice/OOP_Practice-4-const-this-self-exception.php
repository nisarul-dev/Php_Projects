<?php

class Account {
    public $username = "name@bank-uk.net";
    private $password;
    const MIN_VALUE = 8;

    function set_password($the_pass) {
        if(strlen($the_pass) >= self::MIN_VALUE) {
            $this->password = md5($the_pass);
        } else {
            throw new Exception("The Password should be at least " . self::MIN_VALUE . " character long.\n");
        }
    }
}

$u1 = new Account();
$u1->set_password("my pafa234");
print_r($u1);