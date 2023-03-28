<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(News $news)
    {
        $news->forceDelete();

        return redirect()->route('admin.news.index');
    }
}
