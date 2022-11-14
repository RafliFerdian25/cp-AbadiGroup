<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Profile;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            "title" => "Admin - News",
            "posts" => News::with('gallery')->get(),
        ];
        return view("admin.news", $data);
    }

    public function userNews()
    {
        //
        $data = [
            "title" => "Kegiatan",
            "news" => News::with('gallery')->get(),
            "profile" =>  Profile::first(),
            "name_services"  => Service::select('name')->get(),
            "name_categories" => Category::select('id', 'name')->get()
        ];
        // dd($data['news']);
        return view("user.kegiatan", $data);
    }

    public function detailNews($id)
    {
        //
        $data = [
            "title" => "Detail Kegiatan",
            "posts" => News::with('gallery')->find($id),
            "profile" =>  Profile::first(),
            "name_services"  => Service::select('name')->get(),
            "name_categories" => Category::select('id', 'name')->get()
        ];
        return view("user.detail-kegiatan", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.news-create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required',
            'newsContent' => 'required',
            'image1' => 'required|image|file|max:8192',
            'image2' => 'image|file|max:8192',
            'image3' => 'image|file|max:8192',
            'image4' => 'image|file|max:8192',
            'image5' => 'image|file|max:8192',
        ]);

        $validated['content'] = $request->newsContent;
        $validated['slug'] = str_replace(" ", "-", $request->title);
        $validated['excerpt'] = Str::limit($request->newsContent, 100, '...');
        $validated['user_id'] = auth()->user()->id;

        $images = [
            $request->file('image1')->store('assets/news'),
        ];
        for ($i = 2; $i <= 5; $i++) {
            if ($request->file('image' . $i)) {
                array_push($images, $request->file('image' . $i)->store('assets/news'));
            }
        }

        $news = News::create($validated);
        foreach ($images as $image) {
            $gallery = [
                'photo' => $image,
                'news_id' => $news->id
            ];
            Gallery::create($gallery);
        }

        return redirect('/admin/news')->with('create', 'News created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            "title" => "Admin - Edit News",
            "news" =>  news::with('gallery')->find($id),
        ];
        // dd($data['news']->gallery[0]->photo);
        return view("admin.news-edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $validated['slug'] = str_replace(" ", "-", $request->title);
        $validated['excerpt'] = Str::limit($request->content, 100, '...');


        news::where('id', $id)->update($validated);

        $gallery = Gallery::where('news_id', $id)->get();
        $images = [];
        for (
            $i = 1;
            $i <= 5;
            $i++
        ) {
            // jika upload gambar
            if ($request->file('image' . $i)) {
                // jika ada image di db
                if ($i <= count($gallery)) {
                    Storage::delete($gallery[$i - 1]->photo);
                }
                array_push($images, $request->file('image' . $i)->store('assets/news'));
            } else if ($i <= count($gallery)) {
                array_push($images, $gallery[$i - 1]->photo);
            }
        }
        // menghapus seluruh data photo
        Gallery::where('news_id', $id)->delete();

        // menyimpan ulang data photo
        foreach ($images as $image) {
            $gallery = [
                'photo' => $image,
                'news_id' => $id
            ];
            Gallery::create($gallery);
        }

        return redirect('/admin/news')->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gallery = Gallery::where('news_id', $id)->get();
        foreach ($gallery as $image) {
            Storage::delete($image->photo);
        }
        News::destroy($id);

        return redirect('/admin/news')->with('destroy', 'News deleted successfully');
    }
}