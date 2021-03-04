<?php


namespace Patterns\decorator;


class ColorDecorator extends Decorator {

    public function __construct(IComponent $component) {
        parent::__construct($component);
    }

    public function afterDraw() {
        echo " \n...added color";
    }
}