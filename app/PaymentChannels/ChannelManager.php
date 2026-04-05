<?php
namespace App\PaymentChannels;

use App\Models\Order;
use App\Models\PaymentChannel;

class ChannelManager
{
    /**
     * @param PaymentChannel $paymentChannel
     * @return IChannel
     */
    public static function makeChannel(PaymentChannel $paymentChannel){
        if (empty($paymentChannel) || $paymentChannel->class_name !== PaymentChannel::$razorpay) {
            throw new \InvalidArgumentException('Only Razorpay is supported.');
        }

        $className = "App\\PaymentChannels\\Drivers\\{$paymentChannel->class_name}\\Channel";
        return new $className($paymentChannel);
    }

    /**
     * @param Order $order
     * @return string
     */
    public static function makeCallbackUrl(Order $order)
    {
        return "";
    }
}
