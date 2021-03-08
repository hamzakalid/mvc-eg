<?php

class helper{

    static function reditect($path)
    {
        header(DOMAIN . $path);
    }

}
