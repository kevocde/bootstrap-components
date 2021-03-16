<?php

namespace Kevocde\BootstrapComponents\View\Components;

use Illuminate\Support\Collection;

class Card extends BaseComponent
{
    /**
     * Breadcrumb constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bc::components.card');
    }
}
