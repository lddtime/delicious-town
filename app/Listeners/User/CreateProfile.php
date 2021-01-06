<?php

namespace App\Listeners\User;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateProfile
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

        $profile = new Profile;

        $profile->user_id = $user->id;

        $profile->save();
    }
}
