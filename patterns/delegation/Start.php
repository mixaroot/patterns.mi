<?php

namespace patterns\delegation;

use lib\Init;
use views\Common;

class Start implements Init
{
    public function init()
    {
        (new Common())->renderNotImplement();
        return;
    }
}