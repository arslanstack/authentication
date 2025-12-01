<?php

use Carbon\Carbon; // Example of using a class within your helper

if (!function_exists('format_date_human')) {
    /**
     * Formats a date into a human-readable string.
     *
     * @param string $date The date string to format.
     * @param string $format The desired output format (default: 'F j, Y').
     * @return string
     */
    function format_date_human($date, $format = 'F j, Y') {
        return Carbon::parse($date)->format($format);
    }
}

if (!function_exists('render_setting')) {
    /**
     * Fetches a system setting by key and returns its value.
     *
     * @param string $key
     * @param bool $rawHtml Whether to return raw HTML (default false)
     * @return string|null
     */
    function render_setting(string $key, bool $rawHtml = false): ?string
    {
        $setting = \App\Models\SystemSetting::where('key', $key)->first();

        if (!$setting) {
            return null;
        }

        // If raw HTML is requested, return as is
        return $rawHtml ? $setting->value : e($setting->value);
    }
}
