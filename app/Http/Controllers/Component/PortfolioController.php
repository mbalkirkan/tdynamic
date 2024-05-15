<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use App\Models\Component\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function index(Request $request)
    {
        $portfolios = Portfolio::select('id', 'title', 'image')->get();
        return view('admin.component.portfolio', compact('portfolios'));
    }

    public function get(Request $request)
    {
        $portfolio = Portfolio::find($request->id);
        return response()->json($portfolio);
    }

    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/portfolio'), $image_name);

        Portfolio::create([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'image' => $image_name,
        ]);


        return redirect()->back()->with('success', 'Portfolio başarıyla eklendi.');

    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);

        $portfolio = Portfolio::find($request->id);
        $portfolio->title = $request->input('title');
        $portfolio->sub_title = $request->input('sub_title');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/portfolio'), $image_name);

            $image_path = public_path('uploads/portfolio/' . $portfolio->image);
            if (file_exists($image_path))
                unlink($image_path);

            $portfolio->image = $image_name;
        }
        $portfolio->save();
        return redirect()->back()->with('success', 'Portfolio başarıyla güncellendi.');
    }

    public function delete($id)
    {
        $portfolio = Portfolio::find($id);
        $image_path = public_path('uploads/portfolio/' . $portfolio->image);
        if (file_exists($image_path))
            unlink($image_path);
        $portfolio->delete();
        return redirect()->back()->with('success', 'Portfolio başarıyla silindi.');
    }
}
