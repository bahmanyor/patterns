<?php


namespace Patterns\adapter2;


interface Database {
    public function insert();
    public function update();
    public function select();
    public function remove();
}