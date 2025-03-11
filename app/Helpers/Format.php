<?php

namespace App\Helpers;

use Carbon\Carbon;
use Number;

class Format
{
    public static function date($date): false|string|null
    {
        if ($date === null) return null;
        return Carbon::parse($date)->format('d/m/Y') ?: null;
    }

    public static function datetime($datetime): false|string|null
    {
        if ($datetime === null) return null;
        return Carbon::parse($datetime)->format('d/m/Y H:i') ?: null;
    }

    public static function dateInput($date): false|string|null
    {
        if ($date === null) return null;
        return Carbon::parse($date)->format('Y-m-d') ?: null;
    }

    public static function price($price, $decimals = 2): ?string
    {
        if ($price === null) return null;
        return Number::format($price, $decimals, locale: 'ITA') . '€';
    }

    public static function boolean($value): ?string
    {
        return $value ? 'Si' : 'No';
    }

    public static function percent($value): ?string
    {
        if ($value === null) return '-';
        return +$value . '%';
    }

    public static function fileSize(int $bytes): ?string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        for ($i = 0; $bytes > 1024; $i++)
            $bytes /= 1024;
        return round($bytes, 2) . ' ' . $units[$i];
    }
}
