<?php


namespace Patterns\decorator;


abstract class Decorator implements IComponent {
    protected IComponent $component;
    public function __construct(IComponent $component) {
        $this->component = $component;
    }

    public abstract function afterDraw();

    public function draw() {
        $this->component->draw();
        $this->afterDraw();
    }
}