<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserResource;
use App\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function all_user()
    {
        $users = User::all();

        return UserResource::collection($users);
    }
}
