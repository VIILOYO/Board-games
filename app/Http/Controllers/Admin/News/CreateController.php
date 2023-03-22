<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('admin.news.create');
    }
}
