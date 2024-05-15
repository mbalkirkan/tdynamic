<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Component\Portfolio;
use App\Models\Component\Reference;
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
        $portfolios = Portfolio::all();
        $references = Reference::all();
        return view('user.index', compact('sliders', 'index_page', 'portfolios', 'references'));
    }

    public function admin_index(Request $request)
    {
        $index_page = Index::first();

        return view('admin.page.index', compact('index_page'));
    }

    public function update(Request $request)
    {
        $index_page = Index::first();

        $block1 = [
            [
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla ut turpis non nunc vestibulum luctus. Nulla facilisi. Duis sit amet luctus dui. In hac habitasse platea dictumst. Integer eget dui at lorem iaculis ultricies. Integer nec turpis at tellus.',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla ut turpis non nunc vestibulum luctus. Nulla facilisi. Duis sit amet luctus dui. In hac habitasse platea dictumst. Integer eget dui at lorem iaculis ultricies. Integer nec turpis at tellus.',
            ],
            [
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla ut turpis non nunc vestibulum luctus. Nulla facilisi. Duis sit amet luctus dui. In hac habitasse platea dictumst. Integer eget dui at lorem iaculis ultricies. Integer nec turpis at tellus.',
            ]
        ];
        $block2_settings = [
            'image' => 'https://max-themes.net/demos/corzo/cybersecurity/upload/red000.jpg',
            'title' => 'Lorem ipsum dolor sit amet',
            'subtitle' => 'Lorem ipsum dolor sit amet',
        ];
        $block3 = [
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, eleifend nunc. Nulla ut turpis non nunc vestibulum luctus. Nulla facilisi. Duis sit amet luctus dui. In hac habitasse platea dictumst. Integer eget dui at lorem iaculis ultricies. Integer nec turpis at tellus.',
            'image' => 'https://max-themes.net/demos/corzo/cybersecurity/upload/world.jpg',
            'button1_text' => 'Lorem ipsum',
            'button1_url' => '#',
            'button2_text' => 'Lorem ipsum',
            'button2_url' => '#',
        ];

        $block4_settings = [
            'image' => 'https://max-themes.net/demos/corzo/cybersecurity/upload/hp3-port-bg-1.jpg',
            'title' => 'Lorem ipsum dolor sit amet',
            'subtitle' => 'Lorem ipsum dolor sit amet',
        ];

        $block5 = [
            'image' => 'https://max-themes.net/demos/corzo/cybersecurity/upload/bg-number.jpg',
            'counter_1' => '123',
            'counter_2' => '123',
            'counter_3' => '123',
            'counter_4' => '123',
            'counter_1_text' => 'Lorem ipsum',
            'counter_2_text' => 'Lorem ipsum',
            'counter_3_text' => 'Lorem ipsum',
            'counter_4_text' => 'Lorem ipsum',
        ];

        $block6 = [
            'title' => 'Lorem ipsum dolor sit amet',
            'image' => 'https://max-themes.net/demos/corzo/cybersecurity/upload/bg-comlumn-down.jpg',
            'button_text' => 'Lorem ipsum',
            'button_url' => '#',

        ];
        $image = $request->file('block_2_image');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/index'), $image_name);
            $block2_settings['image'] = '/uploads/index/' . $image_name;
        }
        else {
            $block2_settings['image'] = $index_page->block_2_settings['image'];
        }

        $image = $request->file('block_4_image');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/index'), $image_name);
            $block_4_settings['image'] = '/uploads/index/' . $image_name;
        }
        else {
            $block_4_settings['image'] = $index_page->block_4_settings['image'];
        }

        $image = $request->file('block_5_image');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/index'), $image_name);
            $block_5['image'] = '/uploads/index/' . $image_name;
        }
        else {
            $block_5['image'] = $index_page->block_5['image'];
        }

        $image = $request->file('block_3_image');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/index'), $image_name);
            $block_3['image'] = '/uploads/index/' . $image_name;
        }
        else {
            $block_3['image'] = $index_page->block_3['image'];
        }
        $image = $request->file('block_6_image');
        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/index'), $image_name);
            $block_6['image'] = '/uploads/index/' . $image_name;
        }
        else {
            $block_6['image'] = $index_page->block_6['image'];
        }

        $block_1[0]['title'] = $request->block_1_1_title;
        $block_1[0]['description'] = $request->block_1_1_description;


        $block_1[1]['title'] = $request->block_1_2_title;
        $block_1[1]['description'] = $request->block_1_2_description;
        $block_1[2]['title'] = $request->block_1_3_title;
        $block_1[2]['description'] = $request->block_1_3_description;

        $block2_settings['title'] = $request->block_2_title;
        $block2_settings['subtitle'] = $request->block_2_subtitle;

        $block_3['title'] = $request->block_3_title;
        $block_3['description'] = $request->block_3_description;
        $block_3['button1_text'] = $request->block_3_button1_text;
        $block_3['button1_url'] = $request->block_3_button1_url;
        $block_3['button2_text'] = $request->block_3_button2_text;
        $block_3['button2_url'] = $request->block_3_button2_url;

        $block_4_settings['title'] = $request->block_4_title;
        $block_4_settings['subtitle'] = $request->block_4_description;

       $block_5['counter_1'] = $request->block_5_counter_1;
       $block_5['counter_2'] = $request->block_5_counter_2;
       $block_5['counter_3'] = $request->block_5_counter_3;
       $block_5['counter_4'] = $request->block_5_counter_4;
       $block_5['counter_1_text'] = $request->block_5_counter_1_text;
       $block_5['counter_2_text'] = $request->block_5_counter_2_text;
       $block_5['counter_3_text'] = $request->block_5_counter_3_text;
       $block_5['counter_4_text'] = $request->block_5_counter_4_text;

        $block_6['title'] = $request->block_6_title;
        $block_6['button_text'] = $request->block_6_button_text;
        $block_6['button_url'] = $request->block_6_button_url;

        $index_page->block_1 = $block_1;
        $index_page->block_2_settings = $block2_settings;
        $index_page->block_3 = $block_3;
        $index_page->block_4_settings = $block_4_settings;
        $index_page->block_5 = $block_5;
        $index_page->block_6 = $block_6;

        $index_page->save();


        return redirect()->back()->with('success', 'Anasayfa başarıyla güncellendi.');
    }


}
