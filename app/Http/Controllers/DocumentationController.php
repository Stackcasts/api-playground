<?php

namespace App\Http\Controllers;

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
