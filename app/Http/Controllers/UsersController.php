<?php

namespace App\Http\Controllers;

use App\User;
use Symfony\Component\HttpFoundation\JsonResponse;

class UsersController extends Controller
{
    public function index() : JsonResponse
    {
        $users = User::paginate(20);

        return response()->json($users, 200);
    }
}
