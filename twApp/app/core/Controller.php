<?php
class Controller
{
    public function model($model, $params = []) {
        require_once __DIR__ . '/../models/'. $model .'.php';

        $modelClass = $model ;

        return new $modelClass(...$params);
    }

    public function view($view, $data) {     //path catre view si ce date sunt transmise
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}