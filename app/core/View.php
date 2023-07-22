<?php

namespace app\core;

class View
{
    private string $template = 'main';

    public function __construct($template = null)
    {
        if($template != null){
            $this->template = $template;
        }
    }

    public function render ($page, array $data = [])
    {
        extract($data);
        include_once '../view/templates/' . $this->template . '_template.php';
    }
}