<?php


namespace Patterns\adapter;


class SlackApi {
    private $login;
    private $apiKey;

    public function __construct($login, $apiKey) {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function logIn(): void {
        echo "Logged in a slack account '{$this->login}'";
    }

    public function sendMessage(string $chatId, string $message) {
       echo "Posted following message into the '$chatId' chat: '$message' . \n";
    }
}