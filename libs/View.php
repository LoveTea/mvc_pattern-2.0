<?php

class View {
    public function render($name, $arg = false, $title = false, $count = false) { // Параметры: Путь до view, модель, title, количество страниц
        require_once 'views/header.php';
        require_once 'views/' . $name . '.php';
        require_once 'views/footer.php';
    }
}