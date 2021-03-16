<?php


namespace Kevocde\BootstrapComponents\View\Components;


class Alert extends BaseComponent
{
    /**
     * @var string Tipo de alerta
     */
    public $type;

    /**
     * @var bool Indica si se permite eliminar la alerta
     */
    public $dismissed;

    /**
     * @var string Contenido de la alerta
     */
    public $content = 'Slot: <strong>content</strong>';

    /**
     * Alert constructor.
     * @param string $type
     * @param bool $dismissed
     */
    public function __construct(
        string $type = 'secondary',
        bool $dismissed = false
    )
    {
        parent::__construct();

        $this->type = $type;
        $this->dismissed = $dismissed;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bc::components.alert');
    }

    /**
     * @return bool
     */
    public function isDismissed(): bool
    {
        return $this->dismissed;
    }
}
