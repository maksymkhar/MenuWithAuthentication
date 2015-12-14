<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 14/12/15
 * Time: 18:18
 */

namespace MenuWithAuthentication;
use MenuWithAuthentication\Menu\MenuItem;

class MenuWithAuthentication
{
    /**
     * @var null
     */
    protected static $instance = null;
    /**
     * @var MenuItem[]
     */
    protected $menu;


    function __construct($id)
    {
        $this->menu = static::menu($id);
    }

//    /**
//     * MenuWithAuthentication constructor.
//     */
//    public function __construct()
//    {
//    }



    public static function menu($id)
    {
        return new MenuItem($id);
    }

    public static function instance($id)
    {
        if ( is_null(static::$instance) ) {
            return static::$instance = new static($id);
        }
        return static::$instance;
    }

    public function getMenu()
    {
        return $this->menu->items();
    }
}