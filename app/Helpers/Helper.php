<?php

use Illuminate\Support\Facades\Config;

if (!function_exists('asset_path')) {
    /**
     * Get full asset path by key and image filename
     *
     * @param string $key
     * @param string|null $filename
     * @return string
     */
    function asset_path(string $key, ?string $filename = null): string
    {
        $basePath = Config::get("paths.$key", Config::get("paths.default"));
        return asset($basePath . ($filename ?? ''));
    }
}
