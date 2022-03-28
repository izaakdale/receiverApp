<?php 

namespace App\Handlers;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob;

class WebhookHandler extends ProcessWebhookJob {

    public function handle(){

        // I can see that the webhook is working by inspecting the webhook_calls table in mysql.
        // This function is where other functionality is added.

    }
}

?>