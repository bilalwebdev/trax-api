<?php

namespace App\Http\Controllers;

use App\Utils\Utils;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class APIController extends Controller
{

    public function verifyKit(Request $request)
    {

        $client = new Client();
        $headers = [
            'api-key' => '6111f22f-twaf-6157-ezsz-0c56cfb01053'
        ];

        if ($request->submit == 'Verify kit') {

            $options = [
                'multipart' => [
                    [
                        'name' => 'kit_number',
                        'contents' => $request->kit_no
                    ]
                ]
            ];
            $request = new Psr7Request('POST', 'https://traxmanagementapi.com/api/verify-kit', $headers);
            $res = $client->sendAsync($request, $options)->wait();

            if ($res->getStatusCode() === 200) {

                return response()->json(['success' => true]);

            } else {
                dd($res->getBody());
            }
        } elseif ($request->submit == 'Check status') {

            $options = [
                'multipart' => [
                    [
                        'name' => 'kit_number',
                        'contents' => $request->kit_no
                    ]
                ]
            ];
            $request = new Psr7Request('POST', 'https://traxmanagementapi.com/api/check-kit-status', $headers);
            $res = $client->sendAsync($request, $options)->wait();

            if ($res->getStatusCode() === 200) {

                return response()->json(['success' => true]);

            } else {
                dd($res->getBody());
            }
        } else {

            $options = [
                'multipart' => [
                    [
                        'name' => 'kit_number',
                        'contents' => $request->kit_no
                    ]
                ]
            ];
            $request = new Psr7Request('POST', 'https://traxmanagementapi.com/api/get-pdf', $headers);
            $res = $client->sendAsync($request, $options)->wait();

            if ($res->getStatusCode() === 200) {

                dd($res->file);

                return response()->json(['success' => true]);

            } else {
                dd($res->getBody()['file']);
            }
        }



    }
}
