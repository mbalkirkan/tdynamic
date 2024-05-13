<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Component\Slider;
use App\Models\Page\Index;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $sliders = Slider::orderBy('order', 'asc')
            ->get();
        $index_page = Index::first();

//        return $index_page;
        return view('user.index', compact('sliders', 'index_page'));
    }

    public function admin_index(Request $request)
    {
        $index_page = Index::first();

        return view('admin.page.index', compact('index_page'));
    }


}
