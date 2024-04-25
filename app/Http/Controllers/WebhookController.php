<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Osiset\ShopifyApp\Traits\WebhookController as WebhookTrait;

class WebhookController extends Controller
{

    use WebhookTrait;

    public function handleAppUninstall(Request $request)
    {
        // Decode the incoming Shopify payload
        $data = json_decode($request->getContent(), true);

        // Handle cleanup logic here
        $shopDomain = $data['domain'];
        $this->cleanupStoreData($shopDomain);

        return response()->json(['status' => 'success'], 200);
    }

    protected function cleanupStoreData($shopDomain)
    {
        // Your logic to deactivate the user, delete data, etc.
    }
}
