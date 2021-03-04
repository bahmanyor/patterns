<?php


namespace Patterns\decorator;


class Window implements IComponent {

    public function draw() {
        echo "draw window";
    }
}