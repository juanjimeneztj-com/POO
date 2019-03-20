<?php

class Settings{
    public static $background;
    public static $newsletter;
    public static $workplace;
    
    public static function getBackground(){
        return self::$background;
    }
    
    public static function getNewsletter(){
        return self::$newsletter;
    }
    
    public static function getWorkplace(){
        return self::$workplace;
    }
    
    public static function setBackground($background){
        self::$background = $background;
    }
    
    public static function setNewsletter($newsletter){
        self::$newsletter = $newsletter;
    }
    
    public static function setWorkplace($workplace){
        self::$workplace = $workplace;
    }
}