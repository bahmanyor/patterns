<?php


namespace Patterns\adapter;


class EmailNotification implements Notification {
    private $adminEmail;
    public function __construct(string $adminEmail) {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message) {
        mail($this->adminEmail, $title, $message);
        echo "Send email with title '$title' to '{$this->adminEmail}' that says '$message' ";
    }
}