<?php

function passwordGenerate($number) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-}{[}]\|;:<>?/';
    $charactersLength = strlen($characters);
    $password = '';
    for ($i = 0; $i < $number; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
};