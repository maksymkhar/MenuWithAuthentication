<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 14/12/15
 * Time: 16:27
 */


MenuWithAuthentication::menu('home')
    ->title('Home')
    ->icon('fa-home')
    ->url('/home')
    ->role('home')
    ->permission('home')
    ->user('max');

//Another link
MenuWithAuthentication::menu('anotherLink')
    ->title('Another link');

//Multilevel
MenuWithAuthentication::menu('multi')
    ->title('Multilevel')
    ->icon('fa-lightbulb-o');

MenuWithAuthentication::menu('multiSub1')
    ->title('Link in level 1')
    ->icon('fa-cloud');

MenuWithAuthentication::menu('multiSub2')
    ->title('Link in level 2')
    ->icon('fa-calendar-o');

//Another one
MenuWithAuthentication::menu('anotherOne')
    ->title('Another one')
    ->icon('fa-area-chart')
    ->url('http://www.google.com');