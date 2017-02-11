<?php

namespace service;

use lib\Init;
use views\Menu as viewsMenu;

/**
 * Class Menu
 * @package service
 */
class Menu implements Init
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        (new viewsMenu())->renderMainMenu();
    }
}