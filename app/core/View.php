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
}