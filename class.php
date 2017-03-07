<?php
/*
 * @description: Ejemplo de patron de diseño de Factory
 * @author: Adán Díaz González mondragón
 * @Date:07-03-2017
 */
abstract class objHtml
{
    protected $_stringHtml;

    public function getInp()
    {
        return $this->_stringHtml;
    }
}

class header extends objHtml {
    protected $_stringHtml = '<div class="header">Factory test</div>';
}

class article extends objHtml {
    protected $_stringHtml = '<div class="cube">El homobre llega a la luna</div>';
}

class Footer extends objHtml {
    protected $_stringHtml = "<div class='footer' >Contactanos</div>"; //Este es el HTML para el botón normal (<input type="button"... />);
}

class search extends objHtml {
    protected $_stringHtml = "<div class='search' >buscar</div>";
}

class makeForm
{
    public static function createObj($type)
    {

        $targetClass = ucfirst($type);

        if (class_exists($targetClass) && is_subclass_of($targetClass, 'objHtml')) {
            return new $targetClass;
        } else {
            throw new Exception("El objeto '$type' no existe.");
        }
    }
}






?>