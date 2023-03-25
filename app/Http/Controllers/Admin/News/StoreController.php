<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\StoreRequest;
use App\Models\Image;
use App\Models\News;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $news = News::Create($data);

        foreach($request->file('images') as $image) {
            $fileName = time().$image->getClientOriginalName();
            $imagePath = $image->storeAs('images', $fileName, 'public');
            Image::create([
                'url' => $imagePath,
                'news_id' => $news->id,
            ]);
        }

        return redirect()->route('admin.news.index');
    }
}
