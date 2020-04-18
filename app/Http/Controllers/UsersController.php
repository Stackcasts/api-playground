<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\User;

class UsersController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::paginate(20);

        return response()->json($users, 200);
    }

    public function show($id): JsonResponse
    {
        $user = User::where('id', $id)->firstOrFail();

        return response()->json($user, 200);
    }

    public function store(): JsonResponse
    {
        $user = new User();
        $user->id = 98765;

        $user->name = request('name');
        $user->email = request('email');
        $user->job_title = request('job_title');
        $user->created_at = now();
        $user->updated_at = now();

        return response()->json($user, 200);
    }

    public function delete($id): JsonResponse
    {
        $user = User::where('id', $id)->firstOrFail();

        return response()->json('User was deleted.', 200);
    }
}
