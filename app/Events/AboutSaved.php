<?php

namespace App\Events;

use App\Models\About;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AboutSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $about;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(About $about)
    {
        $this->about = $about;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
