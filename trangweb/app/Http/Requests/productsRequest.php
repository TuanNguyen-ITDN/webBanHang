<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;




class productsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     * @return array
     */
    public function rules()
    {
        return [
            'name'             =>'required|unique:products,name',
            'id_type'          =>'required|numeric',
            'description'      => 'required',
            'unit_price'       => 'required|numeric',
            'promotion_price'  => 'required|numeric',
            'image'            => 'required|image',
            'unit'             => 'required',
            'new'              => 'required',
        ];
    }

    public function messages (){
        return[
            'name.required'              =>'Vui lòng nhập tên sản phẩm !',
            'name.unique'                =>'Tên sản phẩm đã tồn tại !',
            'id_type.required'           =>'Vui lòng chọn loại sản phẩm !' ,
            'description.required'       =>'Vui lòng viết mô tả cho sản phẩm!',
            'unit_price.required'        =>'Vui lòng nhập đơn giá sản phẩm !',
            'unit_price.numeric'         =>' Đơn giá phải là số !',
            'promotion_price.required'   =>'Vui lòng nhập giá khuyến mãi sản phẩm !',
            'promotion_price.numeric'    =>'Giá khuyến mãi phải là số !',
            'image.required'             =>'Vui lòng chọn ảnh cho sản phẩm !',
            'image.image'                =>'Hình ảnh không đúng định dạng !',
            'unit.required'              =>'Vui lòng đơn vị sản phẩm !',
            'new.required'               =>'Vui lòng nhập new!',
        ];
    }
}
