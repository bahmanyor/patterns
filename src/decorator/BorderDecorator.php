<?php


namespace Patterns\decorator;


class BorderDecorator extends Decorator {

    public function __construct(IComponent $component) {
        parent::__construct($component);
    }

    public function afterDraw() {
        echo " \n...border decorator";
    }
}