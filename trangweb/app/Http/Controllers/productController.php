<?php

namespace App\Http\Controllers;

 
use App\Http\Requests;
use Validator;
use Auth;
use App\product;
use App\type_product;
use App\Http\Requests\productsRequest;
use Input,File;
use DB;     
use Session;
use Request;


class productController extends Controller
{


	 //Hiển thị danh sách sản phẩm
    public function getListProduct() {
        $product = product::select('id', 'name','id_type','description', 'unit_price','promotion_price','image','unit','new')->get()->toArray();
        return view('admin/pages/product/listProduct',compact('product'));
    }

    // chạy đến file add trong folder view
    public function addProduct() {
        $typeproduct = type_product::select('id','name','description')->get()->toArray();
        return view('admin/pages/product/addProducts', compact('typeproduct'));
    }
    
    // Lấy dữ liệu vừa nhập và lưu lại
    public function postAdd(productsRequest $request) {
        $product = new product; // ten model
        $file_name = $request->file('image')->getClientOriginalName();
        $product->name = $request->name;
        $product->id_type = $request->id_type;
        $product->description= $request->description;
        $product->unit_price=$request->unit_price;
        $product->promotion_price = $request->promotion_price;
        $product->image = $file_name; 
        $product->unit = $request->unit;
        $product->new = $request->new;
        $request->file('image')->move('public/backend/images/product/',$file_name);
        $product->save();
        return redirect()->route('backend.product.getList')->with('success','Thêm sản phẩm thành công!'); // Lay dia chi cua phan as ben route
         
    }

    // delete product follow id
    public function deleteProduct($id) {
        $product = product::find($id);
        File::delete('public/backend/images/product/'.$product->image);
        $product->delete($id);
        return back()->with('success','Xóa sản phẩm thành công!');
    }

    
     // Edit product follow id
    public function editProduct($id) {
        $typeproduct = type_product::select('id','name','description')->get()->toArray();
        $product = product::find($id);
        $product_img = product::findOrFail($id)->get()->toArray();
        return view('admin/pages/product/edit',compact('typeproduct','product','product_img'));
    }

    public function postEditProduct($id,productsRequest $request) {
        $product = product::find($id);
        $img_current = 'public/backend/images/product/'. Request::input('img_current');
        $product->name = Request::input('name');
        $product->id_type = Request::input('id_type');
        $product->description = Request::input('description');
        $product->unit_price = Request::input('unit_price');
        $product->promotion_price = Request::input('promotion_price');
        if(!empty(Request::file('image')))
        {
            $file_name = Request::file('image')->getClientOriginalName();
            $product->image = $file_name;
            Request::file('image')->move('public/backend/images/product/',$file_name);
            if(File::exists($img_current))
            {
                File::delete($img_current);
            }
        }
        $product->unit = Request::input('unit');
        $product->new = Request::input('new');
        
        $product->save();
        return redirect()->route('backend.product.getList')->with('success','Sửa sản phẩm thành công!');
    }
}
