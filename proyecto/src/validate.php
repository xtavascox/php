<?php
namespace App;

class Validate{
    
    public static function email($value){
        return (bool)filter_var($value,FILTER_VALIDATE_EMAIL); 
    }

    public static function password($value){
        return (bool)preg_match('/^[0-9a-zA-Z@#]{6,20}$/',$value);
    }
}