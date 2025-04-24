<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('system-maintenance', function () {
    return true;
});

//Broadcast::channel('bookingStatus.{id}', function ($user, $id) {
//    return (int) $user->id === (int) $id; // Allow only the relevant user
//});


Broadcast::channel('bookingRequest', function ($user) {

    $admin = \App\Models\User::find($user->id);

    return $admin->hasRole('admin') || $admin->hasRole('super_admin');
});

Broadcast::channel('appointment-status.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
