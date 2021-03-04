<?php


namespace Patterns\decorator;


class TextView implements IComponent {

    public function draw() {
        echo " \ndraw textview";
    }
}