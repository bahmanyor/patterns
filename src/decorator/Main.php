<?php


namespace Patterns\decorator;


class Main {
     public function main(){
         $windowWithBorder = new ColorDecorator(new BorderDecorator(new Window()));
         $windowWithBorder->draw();
         echo " \n####################";
         $textView = new BorderDecorator(new TextView());
         $textView->draw();
     }
}