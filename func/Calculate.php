<?php

/**
 * Calculate
 */
class Calculate
{
    static function MyAge(int $year)
    {
        $age = date('Y') - $year;
        return $age;
    }
}