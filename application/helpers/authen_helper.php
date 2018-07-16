<?php

if (!function_exists('getCookieJWT')) {
    function getCookieJWT($controler, $cookieVal)
    {
        //get cookie jwt for decode
        if (isset($cookieVal)) {
            $decode = $controler->Authen_model->decodeCookieJWT($cookieVal);

            return $decode;
        }
        return null;
    }
}
