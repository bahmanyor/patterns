<?php


namespace Patterns\adapter2;


class AdapterJavaToDatabase extends JavaAplication implements Database {

    public function insert() {
        $this->savaObject();
    }

    public function update() {
        $this->updateObject();
    }

    public function select() {
        $this->loadObject();
    }

    public function remove() {
        $this->deleteObject();
    }
}