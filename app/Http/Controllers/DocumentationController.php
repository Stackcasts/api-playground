<?php

namespace App\Http\Controllers;

class DocumentationController extends Controller
{
    public function index() {
        $path = base_path('README.md');

        $contents = file_get_contents($path);

        return view('instructions', [
            'contents' => $contents,
        ]);
    }
}
