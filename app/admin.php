<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    // Import Notifiable Trait
    use Notifiable;
    // Specify Slack Webhook URL to route notifications to 
    public function routeNotificationForSlack() {
        return env('SLACK_WEBHOOK_URL');
    }
    
}
