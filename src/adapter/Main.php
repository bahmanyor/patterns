<?php


namespace Patterns\adapter;


class Main {
    /**
     * Адаптер объектов
     * Эта реализация использует агрегацию: объект адаптера «оборачивает», то есть содержит ссылку на служебный объект.
     * Такой подход работает во всех языках программирования.
     **/


    public function main() {
        echo "Client code is designed correctly and works with email notifications:\n";
        $notification = new EmailNotification("developers@example.com");
        $notification->send("Website works", "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
            "Our website is not responding. Call admins and bring it up!");


        echo "\n The same client code can work with other classes via adapter:\n";
        $slackApi = new SlackApi("example.com", "XXXXXXXX");
        $notification = new SlackNotificationAdapter($slackApi, "Example.com Developers");
        $notification->send("Website works", "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
            "Our website is not responding. Call admins and bring it up!");
    }
}