<?php

namespace App\Services;

use Pusher\Pusher;
use Config\Pusher as PusherConfig;

class PusherService
{
    protected $pusher;

    public function __construct()
    {
        $config = new PusherConfig();
        $this->pusher = new Pusher(
            $config->app_key,
            $config->app_secret,
            $config->app_id,
            [
                'cluster' => $config->app_cluster,
                'useTLS' => true
            ]
        );
    }

    public function trigger($channel, $event, $data)
    {
        $this->pusher->trigger($channel, $event, $data);
    }
}
