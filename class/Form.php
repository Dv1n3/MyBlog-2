<?php

/**
 * Created by PhpStorm.
 * User: dvine
 * Date: 26/04/2018
 * Time: 09:22
 */
class Form
{
    private $data;
    public $surround = 'p';

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    public function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    public function input($type, $name)
    {
        return $this->surround('<input type="' . $type . '" name="' . $name . '">');
    }

    public function submit($name)
    {
        return $this->surround('<button type="submit" class="form-control">' . $name . '</button>');
    }
}

