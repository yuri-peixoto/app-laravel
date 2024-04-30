<?php

use App\Enums\SupportStatus;

if (!function_exists('getSupportStatus')) {
    function getSupportStatus(string $status): string
    {
        return SupportStatus::fromValue($status);
    }
}
