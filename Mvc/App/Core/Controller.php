<?php

class Controller{
    public function model($model){
            require_once dirname(__FILE__, 2) . '/Models/' . $model . '.php';
            return new model();
    }

    public function view($view, $data = []){
        require_once dirname(__FILE__, 2) . '/Views/' . $view . '.php';
    }
}

?>