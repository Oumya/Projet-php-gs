<?php
namespace ism\lib;

class Request {
    public function getUrl():array{
        return[];
    }
    public function isGet():bool{
        return $_SERVER["REQUEST_METHOD"]=="GET";
    }
    public function isPost():bool{
        return $_SERVER["REQUEST_METHOD"]=="POST";
    }

    public function getBody():array{
        return $_POST;

    }
    public function
}