<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 14/12/15
 * Time: 16:27
 */


//Home
MenuWithAuthentication::menu()
    ->title('Home')
    ->icon('fa-home')
    ->url('/home')
    ->role('home')
    ->permission('home')
    ->user('max');

//Another link
MenuWithAuthentication::menu()
    ->title('Another link');

//Multilevel
MenuWithAuthentication::menu()
    ->title('Multilevel')
    ->icon('fa-lightbulb-o');

MenuWithAuthentication::menu()
    ->title('Link in level 1')
    ->icon('fa-cloud');

MenuWithAuthentication::menu()
    ->title('Link in level 2')
    ->icon('fa-calendar-o');

//Another one
MenuWithAuthentication::menu()
    ->title('Another one')
    ->icon('fa-area-chart')
    ->url('http://www.google.com');