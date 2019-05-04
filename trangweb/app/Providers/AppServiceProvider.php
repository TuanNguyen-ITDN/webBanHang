<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\type_product;
use App\slide;
use Session;
use App\Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.header',function($view){ 
           $loai_sp=type_product::all(); 
           $view->with('loai_sp',$loai_sp);              
       });  
        view()->composer('layout.slider',function($view){ 
           $slide=slide::all(); 
           $view->with('slide',$slide);              
       }); 

        view()->composer('layout.header',function($view){ 
            if (Session('cart')) {
              $oldCart=Session::get('cart');
              $cart= new Cart($oldCart);
              $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
          }              
      }); 

        view()->composer('layout.pages.checkout',function($view){ 
            if (Session('cart')) {
              $oldCart=Session::get('cart');
              $cart= new Cart($oldCart);
              $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
          }              
      }); 

        Schema::defaultStringLength(191);
    }
}
