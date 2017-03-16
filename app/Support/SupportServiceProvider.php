<?php

namespace App\Support;

use App\Support\Html\HtmlServiceProvider;


class SupportServiceProvider
{
    protected $unitAlias = 'support';

    protected $providers = [
        HtmlServiceProvider::class
    ];
}