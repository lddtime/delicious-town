<?php

namespace App\Listeners\User;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateRestaurant
{
    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        /** @var User $user */
        $user = $event->user;

        $restaurant = new Restaurant;

        $restaurant->user_id = $user->id;
        $restaurant->name = $user->name;

        $restaurant->save();
    }
}
