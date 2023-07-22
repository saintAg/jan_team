<?php

namespace core;

class View
{
    public function render ($page, array $data = [])
    {
        extract($data);
        include_once '../view/templates' . $this->template . '_template.php';
    }
}