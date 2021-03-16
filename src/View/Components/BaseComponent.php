<?php

namespace Kevocde\BootstrapComponents\View\Components;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\View\Component;

abstract class BaseComponent extends Component
{
    /**
     * @var string Unique ID
     */
    public $uuid;

    public function __construct()
    {
        $this->uuid = Str::uuid();
    }
}
