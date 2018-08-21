<?php

namespace MyCompany;


class CountInstance
{
    protected static $nbInstance = 0;

    public function __construct()
    {
        self::$nbInstance++;
    }

    public function lambda()
    {
        return 'Lamba';
    }

    public static function getNbInstance()
    {
        return self::$nbInstance;
    }
}