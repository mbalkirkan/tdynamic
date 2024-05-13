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
        return view('user.index', compact('sliders'));
    }

    public function admin_index(Request $request)
    {
        $index_page = Index::first();

        return view('admin.page.index');
    }


}
