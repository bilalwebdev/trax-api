<?php

namespace App\Utils;

use GuzzleHttp\Client;

class Utils
{

    public static function Http()
    {

        $client = new Client();
        $headers = [
            'api-key' => '6111f22f-twaf-6157-ezsz-0c56cfb01053'
        ];

        return [$client, $headers];
    }
}