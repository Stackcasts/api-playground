<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index() {
        $path = base_path('docs/instructions.md');

        $contents = file_get_contents($path);

        return view('instructions', [
            'contents' => $contents,
        ]);
    }
}
