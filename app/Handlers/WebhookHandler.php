<?php 

namespace App\Handlers;

use App\Models\Order;
use App\Models\OrderItem;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob;

class WebhookHandler extends ProcessWebhookJob {

    public function handle(){
        
        $order_data = $this->webhookCall['payload']['order_data'];
        $incomingOrder = new Order();

        $incomingOrder->user_id = $order_data['user_id'];
        $incomingOrder->save();

        foreach( $order_data['items'] as $product )
        {
            $incomingOrderItem = new OrderItem();
            $incomingOrderItem->order_id = $incomingOrder->id;
            $incomingOrderItem->product_id = $product['product_id'];
            $incomingOrderItem->quantity = $product['quantity'];
            $incomingOrderItem->save();
        }
    }
}

?>