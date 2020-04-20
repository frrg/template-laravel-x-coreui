<?php

namespace App\Http\Controllers\b;

use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    protected $limit = 10;

    protected function bcrum($current, $urlSecond = null, $nameSecond = null)
    {
        return [
            'url-first' => route('home'),
            'name-first' => 'Home',
            'url-second' => $urlSecond,
            'name-second' => $nameSecond,
            'current' => $current
        ];
    }
}
