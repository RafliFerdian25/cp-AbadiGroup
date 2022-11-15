<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Service;
use GuzzleHttp\Handler\Proxy;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "title" => "Beranda",
            "profile" =>  Profile::first(),
            "services" => Service::all(),
            "products" =>  Product::inRandomOrder()->limit(5)->with('PhotoProduct')->get(),
            "count_product" => Product::count(),
            "name_services"  => Service::select('name')->get(),
            "name_categories" => Category::select('id', 'name')->get(),
        ];
        // dd($data['products']['0']->PhotoProduct[0]->photo);
        return view("user.index", $data);
    }

    public function userProfile()
    {
        //
        $data = [
            "title" => "Profile",
            "profile" =>  Profile::first(),
            "name_services"  => Service::select('name')->get(),
            "name_categories" => Category::select('id', 'name')->get()
        ];
        // dd($data['news']);
        return view("user.detail-profile", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit()
    {
        //
        $data = [
            "title" => "Admin - Edit Profile",
            "profile" =>  Profile::first(),
        ];
        // dd($data);
        return view("admin.profile-edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
        $validated = $request->validate([
            'overview' => 'required',
            'vision' => 'required',
            'mission' => 'required',
            'history' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
        ]);

        Profile::where('id', $profile->id)->update($validated);

        return redirect('/admin/profile')->with('success', 'Profile updated successfully');
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
    }
}
