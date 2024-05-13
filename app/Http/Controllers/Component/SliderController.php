<?php

namespace App\Http\Controllers\Component;

use App\Http\Controllers\Controller;
use App\Models\Component\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $sliders = Slider::orderBy('order', 'asc')
            ->select('id', 'title', 'image', 'order')
            ->get();
        return view('admin.component.slider', compact('sliders'));
    }

    public function add(Request $request)
    {
        $request->validate([
//            'title' => 'required',
//            'sub_title' => 'required',
//            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/slider'), $image_name);

        if ($request->input('order') == null)
            $order = Slider::max('order') + 1;
        else
            $order = $request->input('order');
        Slider::create([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
//            'description' => $request->input('description'),
            'image' => $image_name,
//            'video_url' => $request->input('video_url'),
//            'right_button_text' => $request->input('right_button_text'),
//            'right_button_url' => $request->input('right_button_url'),
            'order' => $order
        ]);
        return redirect()->back()->with('success', 'Slider başarıyla eklendi.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
//            'description' => 'required',
            'order' => 'required',
        ]);

        $slider = Slider::find($request->input('id'));
        if ($request->file('image') != null) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/slider'), $image_name);
            $image_path = public_path('uploads/slider/' . $slider->image);
            if (file_exists($image_path))
                unlink($image_path);
        } else
            $image_name = $slider->image;


        $slider->title = $request->input('title');
        $slider->sub_title = $request->input('sub_title');
//        $slider->description = $request->input('description');
//        $slider->video_url = $request->input('video_url');
//        $slider->right_button_text = $request->input('right_button_text');
//        $slider->right_button_url = $request->input('right_button_url');
        $slider->image = $image_name;
        $slider->order = $request->input('order');
        $slider->save();
        return redirect()->back()->with('success', 'Slider başarıyla güncellendi.');
    }

    public function delete(Request $request, string $id)
    {
        $slider = Slider::find($id);
        $image_path = public_path('uploads/slider/' . $slider->image);
        if (file_exists($image_path))
            unlink($image_path);
        $slider->delete();
        return redirect()->back()->with('success', 'Slider başarıyla silindi.');
    }

    public function get(Request $request)
    {
        $slider = Slider::find($request->input('id'));
        return response()->json($slider);
    }
}
