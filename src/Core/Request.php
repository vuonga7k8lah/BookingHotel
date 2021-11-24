<?php


namespace BookingHotel\Core;


class Request
{
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function getIDOnURL(): int
    {
        $aURI = explode('/', self::uri());
        return (int)$aURI[1] ?? 0;
    }

    public static function uri()
    {
        return preg_replace('/^\//', '', $_SERVER['REQUEST_URI']);
    }
}