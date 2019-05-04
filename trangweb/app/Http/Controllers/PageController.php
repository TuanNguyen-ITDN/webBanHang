<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
use App\customer;
use App\product;
use App\type_product;
use App\slide;
use App\user;
use App\Cart;
use Auth;
use App\Http\Requests\productsRequest;
use Input,File;
use DB;     
use Session;
// use Request;
 

class PageController extends Controller
{
     

    public function gettrangchu(){
        $slide=slide::select('id','link','image')->get()->toArray();
        $new_product=product::where('new',1)->paginate(8);
        $sanpham_khuyenmai=product::where('promotion_price','<>',0)->paginate(4);
    	return view('layout.pages.trangchuWeb', compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getloaiSP( $type){
        //Lay san pham hien thi theo loai
        $sp_theoloai= product::where('id_type', $type)->limit(3)->get();

        // Lay san pham hien thi khac loai
         $sp_khac=product::where('id_type', '<>',$type)->limit(3)->get();

        // Lay san pham hien thi theo loai san pham cho menu ben trai
        $loai= type_product::all();

        // lay ten san pham moi khi chung ta chon danh muc loai san pham phan menu ben trai
        $loai_sp=type_product::where('id', $type)->first();


        return view('layout.pages.loai_sanpham', compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }

    public function getChitiet($idProduct){
        $detail= product::where('id', $idProduct)->get();
        $id_type=product::where('id', $idProduct)->value('id_type');
        $related = product::where('id_type',$id_type )->limit(3)->get();
        $newproduct= product::where('new',1)->limit(4)->get();
        $sp_sell=product::where('promotion_price', '<>', '0')->limit(4)->get();
        return view('layout.pages.chitiet_sanpham',compact('detail','newproduct','related','sp_sell'));
    } 



    public function getLH(){
    	return view('layout.pages.lienhe');
    }

    public function getAbout(){
    	return view('layout.pages.about');
    }
    
    public function getadmin(){
        return view('admin.pages.homeadmin');
    }

    public function getListCus() {
        $customer = customer::select('id', 'name','gender','email','address','phone_number','note')->get()->toArray();
        return view('admin.pages.customer.listCus', compact('customer'));
    }

    public function getlistUser() {
        $users = user::select('id', 'full_name','email','password','phone','address')->get()->toArray();
        return view('admin.pages.user.listUser', compact('users'));
    }

    
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

    public function postEditProduct($id,Request $request) {
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

    public function getAddtoCard(Request $rq, $id){
        $product= product::find($id);
        $oldCart= Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product, $id);
        $rq->session()->put('cart',$cart);
        return redirect()->back();
    }
    
    public function getDeleteItemCart($id){
        $oldCart= Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items)>0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        
        return redirect()->back();
    }


    // chạy đến file checkout trong folder view
    public function getCheckout() {
        // $typeproduct = type_product::select('id','name','description')->get()->toArray();
        return view('layout/pages/checkout');
    }

    public function postCheckout(Request $rq){
        $cart=Session::get('cart');
        dd($cart);
        $customer= new customer;
        $customer->name = $rq->name;
        $customer->gender=$rq->gender;
        $customer->email=$rq->email;
        $customer->address= $rq->address;
        $customer->phone_number=$rq->phone;
        $customer->note=$rq->notes;
        $customer->save();


        $bill = new bill();
        $bill->id_customer= $customer->id;
        $bill->date_order= date('Y-m-d');
        $bill->total= $card->totalPrice;
        $bill->payment= $rq->payment_mothod;
        $bill->note=$rq->notes;
        $bill->save();

        foreach($cart->items as $key=>$value){
            $bill_detail = new bill_detail();
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;// $value['item']['id'];
            $bill_detail->quantity = $value['qty'];
            $bill_detail->init_price = $value['price']/$value['qty'];
            $bill_detail->save();
        }

        Session::forget('cart');
        return redirect()->back()->with('Thong bao','Đặt hàng thành công');
    }    

     
     
}
