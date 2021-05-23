<?php

namespace App\Http\Controllers;

use App\Http\Clients\TodoApiClient;
use Inertia\Inertia;

class TodoController extends Controller
{
    public function index(TodoApiClient $client)
    {
        return Inertia::render('todo', [
            'todos' => $client->get(),
        ]);
    }
}
