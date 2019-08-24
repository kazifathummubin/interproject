<?php

namespace App\Http\Controllers;



use App\Category;
use App\Product;
use Citco\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::with(['category', 'user'])->get();

        return view('backend/product/index', compact('products'));
    }

    public function create()
    {


        $category = Category::pluck('name', 'id');

        return view('backend.product.create', compact('category'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        if ($request->hasFile('feature_photo')) {
            $image = $request->file('feature_photo');
            $data['feature_photo'] = $this->imageUpload($image);

        } else {
            $data['feature_photo'] = null;
        }

        if ($request->hasFile('photo1')) {
            $image = $request->file('photo1');
            $data['photo1'] = $this->imageUpload($image);

        } else {
            $data['photo1'] = null;
        }

        if ($request->hasFile('photo2')) {
            $image = $request->file('photo2');
            $data['photo2'] = $this->imageUpload($image);

        } else {
            $data['photo2'] = null;
        }

        if ($request->hasFile('photo3')) {
            $image = $request->file('photo3');
            $data['photo3'] = $this->imageUpload($image);

        } else {
            $data['photo3'] = null;
        }


        if ($request->hasFile('photo4')) {
            $image = $request->file('photo4');
            $data['photo4'] = $this->imageUpload($image);

        } else {
            $data['photo4'] = null;
        }

        $date = strtoupper(Carbon::now()->format('d-My'));
        $random = rand(0, 9999);
        $data['sku'] = 'P-' . $date . '-' . $random;
        $data['user_id'] = Auth::user()->id;
        if($request->input('category_id')==null){
            $data['category_id']=4;
        }else{
            $data['category_id']=$request->input('category_id');
        }

        //dd($data);
        //uncategorized -> 25

        Product::create($data);
        session()->flash('msg', 'New Product Added Successfully');
        return redirect(route('product.index'));


    }

    public function show($id)
    {
        $product = Product::with(['category', 'user'])->findOrFail($id);
        return view('backend.product.show', compact('product'));
    }


    public function edit($id)
    {

        $category = Category::pluck('name', 'id');
        $product = Product::with(['category', 'user'])->findOrFail($id);
        return view('backend.product.edit', compact('product', 'category'));
    }

    public function update(Request $request, $id)
    {


        $product = Product::findOrFail($id);

        $data = $request->all();
        if ($request->hasFile('feature_photo')) {
            $image = $request->file('feature_photo');
            $data['feature_photo'] = $this->imageUpload($image);
        } else {
            $data['feature_photo'] = $product->feature_photo;
        }

        if ($request->hasFile('photo1')) {
            $image = $request->file('photo1');
            $data['photo1'] = $this->imageUpload($image);
        } else {
            $data['photo1'] = $product->photo1;
        }
        if ($request->hasFile('photo2')) {
            $image = $request->file('photo2');
            $data['photo2'] = $this->imageUpload($image);
        } else {
            $data['photo2'] = $product->photo1;
        }
        if ($request->hasFile('photo3')) {
            $image = $request->file('photo3');
            $data['photo3'] = $this->imageUpload($image);
        } else {
            $data['photo3'] = $product->photo1;
        }
        if ($request->hasFile('photo4')) {
            $image = $request->file('photo4');
            $data['photo4'] = $this->imageUpload($image);
        } else {
            $data['photo4'] = $product->photo1;
        }

        $product->update($data);
        session()->flash('msg', 'Product Updated Successfully');
        return redirect(route('product.index'));
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        session()->flash('msg', 'Product Deleted Successfully');
        return redirect(route('product.index'));
    }

    public function imageUpload($file)
    {
        $path = 'backend/assets/images/products/';
        $ImageName = Carbon::now();
        $random = rand(0, 99);
        $ImageName = str_replace([' ', ':'], '-', $ImageName);
        $image_file_name = $ImageName . '-' . $random . '.' . $file->getClientOriginalExtension();
        Image::make($file)->fit(300, 300)->save($path . $image_file_name);
        return $image_file_name;

    }

    public function trash()
    {
        $products=Product::with(['category','user'])->onlyTrashed()->get();

        return view('backend/product/trash', compact('products'));
    }
    public function restore($id)
    {
        $product= Product::onlyTrashed()->where('id',$id)->first();
//        dd($product);
        $product->restore();
        session()->flash('msg', 'Product Restored Successfully');
        return redirect(route('product.index'));
    }
    public function delete($id)
    {
        $product= Product::onlyTrashed()->where('id',$id)->first();

        $product->forceDelete();
        session()->flash('msg', 'Product Deleted Successfully');
        return redirect(route('product.trash'));
    }

    public function byCategory($id)
    {

        $products = Product::where('category_id', $id)->get();
        $title = Category::findOrFail($id);
        $title = $title->name;

        return view('backend/product/byCategory', compact('products', 'title'));
    }


    public function find(Request $request)
    {
        $search = $request->input('text');
        $search = ucfirst($search);
        $title = 'Search Result of ' . $search;
        $products = Product::where('title', 'LIKE', '%' . $search . '%')->orWhere('sku', 'LIKE', '%' . $search . '%')->orWhere('body', 'LIKE', '%' . $search . '%')->get();
        return view('backend/product/search', compact('products', 'title', 'search'));
    }

}

