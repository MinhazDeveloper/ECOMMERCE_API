<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| এখানে তুমি সব event broadcasting channel register করতে পারবে।
| "Broadcast::channel" method ব্যবহার করে channel authorization define করবে।
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
