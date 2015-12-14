<?php

namespace MenuWithAuthentication\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use MenuWithAuthentication\MenuWithAuthentication;

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
        $view->with('menu',$this->getSideBarMenu());
    }

    private function getSideBarMenu()
    {
        return array();
        //$menu = MenuWithAuthentication::instance()->getMenu();
        //return array($menu);
    }
}