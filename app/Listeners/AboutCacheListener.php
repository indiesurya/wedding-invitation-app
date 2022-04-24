<?php

namespace App\Listeners;

use App\Events\AboutSaved;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Cache;

class AboutCacheListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AboutSaved  $event
     * @return void
     */
    public function handle(AboutSaved $event)
    {
        Cache::forget('about');

        $about = $event->about->first();

        Cache::forever('about', $about);
    }
}
