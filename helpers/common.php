<?php

use Illuminate\Http\RedirectResponse;

if (!function_exists('redirectWithStatus')) {
    function redirectWithStatus(string $route, string $message, string $type = 'error')
    {
        return redirect($route)->with('status', compact('type', 'message'));
    }
}

