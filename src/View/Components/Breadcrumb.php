<?php

namespace Kevocde\BootstrapComponents\View\Components;

use Illuminate\Support\Collection;
use Kevocde\BootstrapComponents\View\Components\Interfaces\ILinkeable;

class Breadcrumb extends BaseComponent implements ILinkeable
{
    /**
     * @var Collection Listado de los links que se renderizarán en el breadcrumb
     */
    public $links;

    /**
     * @var string Cadena de texto para representar la ruta activa
     */
    public $activeRoute;

    /**
     * Breadcrumb constructor.
     * @param Collection $links
     * @param null $activeRoute
     */
    public function __construct(Collection $links, $activeRoute = null)
    {
        parent::__construct();

        $this->links = $links;
        $this->activeRoute = $activeRoute;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bc::components.breadcrumb');
    }

    public function getLinkeableItems(): Collection
    {
        $activeRoute = $this->activeRoute;

        if ($this->links === null) return collect();
        else {
            return $this->links->map(function ($value) use ($activeRoute) {
                $url = isset($value['route'])
                    ? (is_array($value['route']) ? call_user_func('route', $value['route']) : route($value['route']))
                    : (isset($value['link']) ? $value['link'] : '#')
                ;
                $label = isset($value['label']) ? $value['label'] : '[label]';
                $active = $activeRoute === $url;

                return compact('url', 'label', 'active');
            });
        }
    }
}
