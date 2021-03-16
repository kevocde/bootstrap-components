<?php

namespace Kevocde\BootstrapComponents\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\View;

class Menu extends BaseComponent
{
    public $items;

    /**
     * Create a new component instance.
     *
     * @param $items
     */
    public function __construct($items)
    {
        parent::__construct();
        $this->items = collect();

        $this->setItems($items);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('bc::components.menu');
    }

    /**
     * @param Collection|array $items
     */
    private function setItems($items)
    {
        foreach ($items as $key => $item) {
            $url = $this::getUrl($item);
            $label = isset($item['label']) ? $item['label'] : $key;
            $active = $url === url()->current();

            $this->items->push(compact('url', 'label', 'active'));
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
