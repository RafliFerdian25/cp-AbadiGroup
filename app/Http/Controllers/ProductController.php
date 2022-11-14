<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PhotoProduct;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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
            "title" => "produk",
            "products" => Product::get(),
        ];
        return view("admin.product", $data);
    }

    public function userProduct(Category $category)
    {
        //
        $data = [
            "title" => "produk",
            "products" => Product::where('category_id', $category->id)->get(),
            "profile" =>  Profile::first(),
            "name_services"  => Service::select('name')->get(),
            "name_categories" => Category::select('id', 'name')->get(),
        ];
        // dd($category);
        return view("user.produk", $data);
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
            "title" => "Admin - Add Product",
            "categories" => Category::all(),
        ];
        return view("admin.product-create", $data);
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
            'price' => 'required',
            'length' => 'required',
            'breadth' => 'required',
            'depth' => 'required',
            'speed' => 'required',
            'main_engine' => 'required',
            'number_of_engine' => 'required',
            'category_id' => 'required',
            'image1' => 'required|image|file|max:8192',
            'image2' => 'image|file|max:8192',
            'image3' => 'image|file|max:8192',
            'image4' => 'image|file|max:8192',
            'image5' => 'image|file|max:8192',
        ]);


        $images = [
            $request->file('image1')->store('assets/product'),
        ];
        for (
            $i = 2;
            $i <= 5;
            $i++
        ) {
            if ($request->file('image' . $i)) {
                array_push($images, $request->file('image' . $i)->store('assets/product'));
            }
        }

        $product = Product::create($validated);

        foreach ($images as $image) {
            $photo = [
                'photo' => $image,
                'product_id' => $product->id
            ];
            PhotoProduct::create($photo);
        }

        return redirect('/admin/product')->with('create', 'Product created successfully');
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
            "product" =>  Product::with('photoProduct', 'category')->find($id),
            "categories" => Category::all(),
        ];
        // dd($data['service']->gallery[0]->photo);
        return view("admin.product-edit", $data);
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
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'length' => 'required',
            'breadth' => 'required',
            'depth' => 'required',
            'speed' => 'required',
            'main_engine' => 'required',
            'number_of_engine' => 'required',
            'category_id' => 'required',
            // 'image1' => 'image|file|max:8192',
            // 'image2' => 'image|file|max:8192',
            // 'image3' => 'image|file|max:8192',
            // 'image4' => 'image|file|max:8192',
            // 'image5' => 'image|file|max:8192',
        ]);

        Product::where('id', $id)->update($validated);

        $photoProduct = PhotoProduct::where('product_id', $id)->get();
        $images = [];
        for (
            $i = 1;
            $i <= 5;
            $i++
        ) {
            // jika upload gambar
            if ($request->file('image' . $i)) {
                // jika ada image di db
                if ($i <= count($photoProduct)) {
                    Storage::delete($photoProduct[$i - 1]->photo);
                }
                array_push($images, $request->file('image' . $i)->store('assets/product'));
            } else if ($i <= count($photoProduct)) {
                array_push($images, $photoProduct[$i - 1]->photo);
            }
        }
        // menghapus seluruh data photo
        PhotoProduct::where('product_id', $id)->delete();

        // menyimpan ulang data photo
        foreach ($images as $image) {
            $photoProduct = [
                'photo' => $image,
                'product_id' => $id
            ];
            PhotoProduct::create($photoProduct);
        }

        return redirect('/admin/product')->with('create', 'Product created successfully');
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
        // delete image
        $photoProduct = PhotoProduct::where('product_id', $id)->get();
        foreach ($photoProduct as $image) {
            Storage::delete($image->photo);
        }
        Product::destroy($id);

        return redirect('/admin/product')->with('destroy', 'Product created successfully');
    }
}