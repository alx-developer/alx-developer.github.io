<?php

/**
 * Autor Alejandro López Arreola
 * Copyrigth 2017 | A L X Developer
 */
class Menu
{

    private $url;

    public function __construct()
    {
        $this->url = $_SERVER['REQUEST_URI'];
    }

    public function Navigation()
    {
        if (strpos($this->url, 'lenguajes')) {
            return "	<li><a href='/'>Home</a></li>
						    <li style='background-color:#FFB800;'><a class='black-text' href='lenguajes'>Lenguajes</a></li>
						    <li><a href='contacto'>Contacto</a></li>";
        } elseif (strpos($this->url, 'contacto')) {
            return "	<li><a href='/'>Home</a></li>
						    <li><a href='lenguajes'>Lenguajes</a></li>
						    <li style='background-color:#FFB800;'><a  class='black-text' href='contacto'>Contacto</a></li>";
        } else {
            return "
						    <li><a href='lenguajes'>Lenguajes</a></li>
						    <li><a href='contacto'>Contacto</a></li>";
        }
    }

}

//contacto#developers
