<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImg;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    //
    public function Image_Product(Request $request)
    {
        return view('');
    }
    public function Create_Product(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'featured' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
        ], [
            'name.required' => 'لطفا نام محصول را وارد کنید',
            'description.required' => 'لطفا فیلد را پر کنید',
            'category.required' => 'لطفا یکی از دسته بندی ها را انتخاب کنید',
            'featured.required' => 'لطفا فیلد را پر کنید',
            'image.required' => 'لطفا فیلد را پر کنید',
            'price.required' => 'لطفا فیلد را پر کنید',
        ]);
        if($request->new == "on")
        {
            $request->new = 1;
        }
        else
        {
            $request->new =0;
        }
        if($request->featured == "on")
        {
            $request->featured = 1;
        }
        else
        {
            $request->featured = 0;
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('product/');
            $width = 670;
            $height = 728;
            $original_img = ImageManagerStatic::Make($request->file('image'));
            $original_img_width = $original_img->width();
            $original_img_height = $original_img->height();

            $original_ratio = $original_img_width / $original_img_height;
            $request_ratio = $width / $height;
            if($request_ratio < $original_ratio)
            {
                $new_width = (int) ($original_img_height * $request_ratio);
                // برش تصویر از عرض
                $original_img->resizeCanvas($new_width,null);
            }
            else
            {
                $new_height = (int) ($original_img_width / $request_ratio);
                //برش از ارتفاع
                $original_img->resizeCanvas(null,$new_height);
            }
            //حالا تصویر برش خورده با ابعاد درخواستی ریسایز میکند
            $original_img->resize($width , $height , function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $original_img->save($destinationPath.$name,5);
            ///-----------------------------------------------------------
            // $image = $request->file('image');
            // $name = time().'.'.$image->getClientOriginalExtension();
            // $image = ImageManagerStatic::make($request->file('image'));
            // $image->resize(370,403);
            // $image->save("product/".$name,5);
            ///-----------------------------------------------------------
            $product = new Product;
            $product->name  = $request->name;
            $product->description  = $request->description;
            $product->category  = $request->category;
            $product->new  = $request->new;
            $product->featured  = $request->featured;
            $product->url_img  = $name;
            $product->price  = $request->price;
            $product->price_discount  = $request->pricediscount;
            $query = $product->save();
            return redirect("/admin/edite-product/$product->id");
        }
    }
    public function Create_Image_Product(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ], [
            'image.required' => 'لطفا فیلد را پر کنید',
            'description.required' => 'لطفا فیلد را پر کنید',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('product/');
            $width = 670;
            $height = 728;
            $original_img = ImageManagerStatic::Make($request->file('image'));
            $original_img_width = $original_img->width();
            $original_img_height = $original_img->height();

            $original_ratio = $original_img_width / $original_img_height;
            $request_ratio = $width / $height;
            if($request_ratio < $original_ratio)
            {
                $new_width = (int) ($original_img_height * $request_ratio);
                // برش تصویر از عرض
                $original_img->resizeCanvas($new_width,null);
            }
            else
            {
                $new_height = (int) ($original_img_width / $request_ratio);
                //برش از ارتفاع
                $original_img->resizeCanvas(null,$new_height);
            }
            //حالا تصویر برش خورده با ابعاد درخواستی ریسایز میکند
            $original_img->resize($width , $height , function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $original_img->save($destinationPath.$name,5);

            $product_image = new ProductImg;
            $product_image->product_id  = $request->product_id;
            $product_image->url  = $name;
            $product_image->description  = $request->description;
            $query = $product_image->save();
            return back()->with('success','تصویر شما با موفقیت ثبت شد');
        }
    }
    public function Edite_Product(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ], [
            'name.required' => 'لطفا نام محصول را وارد کنید',
            'description.required' => 'لطفا فیلد را پر کنید',
            'image.required' => 'لطفا فیلد را پر کنید',
            'price.required' => 'لطفا فیلد را پر کنید',
        ]);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'image.required' => 'لطفا فیلد را پر کنید',
            ]);
            $ImageFile = "product/".$request->orginal_image;
            File::delete($ImageFile);
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('product/');
            $width = 670;
            $height = 728;
            $original_img = ImageManagerStatic::Make($request->file('image'));
            $original_img_width = $original_img->width();
            $original_img_height = $original_img->height();

            $original_ratio = $original_img_width / $original_img_height;
            $request_ratio = $width / $height;
            if($request_ratio < $original_ratio)
            {
                $new_width = (int) ($original_img_height * $request_ratio);
                // برش تصویر از عرض
                $original_img->resizeCanvas($new_width,null);
            }
            else
            {
                $new_height = (int) ($original_img_width / $request_ratio);
                //برش از ارتفاع
                $original_img->resizeCanvas(null,$new_height);
            }
            //حالا تصویر برش خورده با ابعاد درخواستی ریسایز میکند
            $original_img->resize($width , $height , function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $original_img->save($destinationPath.$name,5);

            $product = Product::find($request->product_id);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->url_img = $name;
            $product->price = $request->price;
            $product->price_discount = $request->price_discount;
            $product->save();
            return back()->with('success','اطلاعات با موفقیت ثبت شد');
        }
        $product = Product::find($request->product_id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->price_discount = $request->price_discount;
        $product->save();
        return back()->with('success','اطلاعات با موفقیت ثبت شد');
    }
}
