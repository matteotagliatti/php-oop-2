<?php

include_once __DIR__ . "./User.php";

class UnregisteredUser extends User {
    
    public function __construct(Card $card) {
        parent::__construct(null, null, $card);
    }
}