<?php

namespace Kevocde\BootstrapComponents\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\View;

class Menu extends BaseComponent
{
    /**
     * @var Collection Listado de links a renderizar para el menú
     */
    public $links;

    public function __construct($links)
    {
        parent::__construct();
        $this->links = collect();

        $this->setLinks($links);
    }

    /**
     * @inheritdoc
     */
    public function render()
    {
        return view('bc::components.menu');
    }

    /**
     * @param mixed $links
     */
    private function setLinks($links)
    {
        foreach ($links as $key => $link) {
            $url = $this::getUrl($link);
            $label = isset($link['label']) ? $link['label'] : $key;
            $active = $url === url()->current();

            $this->links->push(compact('url', 'label', 'active'));
        }
    }

    public static function getUrl($data)
    {
        $url = '#';
        if (isset($data['route'])) $url = is_array($data['route']) ? call_user_func('route', $data['route']) : route($data['route']);
        elseif (isset($data['link'])) $url = $data['link'];

        return $url;
    }
}
