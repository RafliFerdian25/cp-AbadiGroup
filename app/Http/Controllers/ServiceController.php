<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = [
        //     "title" => "Layanan",
        //     "services" => Service::with('gallery')->get(),
        //     "testimonial" => Testimonial::limit(5)->orderByDesc('updated_at')->get(),
        //     "products" => Product::with('photoProduct')->get(),
        // ];
        // return view("layanan", $data);
        $data = [
            "title" => "Admin - Service",
            "services" =>  Service::all(),
        ];
        // dd($data);
        return view("admin.service", $data);
    }

    public function userLayanan()
    {
        $data = [
            "title" => "Admin - Service",
            "services" =>  Service::with('gallery')->get(),
            "products" =>  Product::limit(5)->with('PhotoProduct')->orderByDesc('updated_at')->get(),
            "testimonials" =>  Testimonial::limit(5)->orderByDesc('updated_at')->get(),
            "profile" =>  Profile::first(),
            "name_services"  => Service::select('name')->get(),
            "name_categories" => Category::select('id', 'name')->get(),
        ];
        // dd($data);
        return view("user.layanan", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            "title" => "Admin - Service",
        ];
        return view("admin.service-create", $data);
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
            'name' => 'required',
            'description' => 'required',
            'image1' => 'required|image|file|max:8192',
            'image2' => 'image|file|max:8192',
            'image3' => 'image|file|max:8192',
            'image4' => 'image|file|max:8192',
            'image5' => 'image|file|max:8192',
        ]);

        $images = [
            $request->file('image1')->store('assets/service'),
        ];
        for ($i = 2; $i <= 5; $i++) {
            if ($request->file('image' . $i)) {
                array_push($images, $request->file('image' . $i)->store('assets/service'));
            }
        }

        $service = Service::create($validated);
        foreach ($images as $image) {
            $gallery = [
                'photo' => $image,
                'service_id' => $service->id
            ];
            Gallery::create($gallery);
        }

        return redirect('/admin/service')->with('create', 'Service created successfully');
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
            "title" => "Admin - Edit Service",
            "service" =>  Service::with('gallery')->find($id),
        ];
        // dd($data['service']->gallery[0]->photo);
        return view("admin.service-edit", $data);
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
            'name' => 'required',
            'description' => 'required',
        ]);

        Service::where('id', $id)->update($validated);

        $gallery = Gallery::where('service_id', $id)->get();
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
                array_push($images, $request->file('image' . $i)->store('assets/service'));
            } else if ($i <= count($gallery)) {
                array_push($images, $gallery[$i - 1]->photo);
            }
        }
        // menghapus seluruh data photo
        Gallery::where('service_id', $id)->delete();

        // menyimpan ulang data photo
        foreach ($images as $image) {
            $gallery = [
                    'photo' => $image,
                    'service_id' => $id
                ];
            Gallery::create($gallery);
        }

        return redirect('/admin/service')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete image
        $gallery = Gallery::where('service_id', $id)->get();
        foreach ($gallery as $image) {
            Storage::delete($image->photo);
        }
        Service::destroy($id);

        return redirect('/admin/service')->with('destroy', 'Service created successfully');

    }
}