<?php

namespace MenuWithAuthentication\Http\ViewComposers;

/**
 * Created by PhpStorm.
 * User: max
 * Date: 14/12/15
 * Time: 17:10
 */
use Illuminate\Contracts\View\View;

/**
 * Class SidebarComposer
 * @package MenuWithAuthentication\Http
 */
class SidebarComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menu',array());
    }
}