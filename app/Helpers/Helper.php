<?php

use Illuminate\Support\Facades\Config;

if (!function_exists('asset_path')) {
    function asset_path(string $key, ?string $filename = null): string
    {
        $path = config("paths.$key");

        // Fallback to empty string if no path is defined
        return asset(($path ?? '') . ($filename ?? ''));
    }
}
