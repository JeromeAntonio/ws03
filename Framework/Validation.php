<?php

namespace Framework;

class Validation
{
    //Validatie stream_set_blocking
    public static function string($value, $min = 1, $max = INF)
    {
        if (is_string($value)) {
            $value = trim($value);
            $length = strlen($value);

            return $length >= $min && $length <= $max;
        }
        return false;
    }

    //Validate email
    public static function email($value)
    {
        $value = trim($value);

        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    //Validate if value match

    public static function match($value1, $value2)
    {
        $value = trim($value1);
        $value = trim($value2);

        return $value1 === $value2;
    }
}
