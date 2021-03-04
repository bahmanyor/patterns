<?php


namespace Patterns\adapter;


interface Notification {
    public function send(string $title, string $message);
}