<?php

namespace Kevocde\BootstrapComponents\View\Components\Interfaces;

use Illuminate\Support\Collection;

interface ILinkeable
{
    function getLinkeableItems(): Collection;
}
