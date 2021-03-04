<?php


namespace Patterns\adapter2;


class Main {
    public function main(){
       $database = new AdapterJavaToDatabase();
       $database->insert();
       $database->update();
       $database->select();
       $database->remove();
    }
}