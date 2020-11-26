<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\theloai;
class TheloaiController extends Controller
{
    //
      public function list_category()
    {
    	$theloai=theloai::paginate(2);
    	return view('admin.theloai.list',['theloai'=>$theloai]);
    }
    public function load_add()
    {
    	return view('admin.theloai.add');
    }
    public function post_add(Request $req)
    {
    	$this->validate($req,
    	[
    		'tentheloai'=>'required|min:10|max:50|unique:theloai'
    	],
    	[
    		'tentheloai.required'=>"Bạn chưa nhập tên thể loại!",
    		'tentheloai.min'=>"Tên thể loại phải lớn hơn 10 ký tự !",
    		'tentheloai.max'=>"Tên thể loại phải nhỏ hơn 50 ký tự !",
    		'tentheloai.unique'=>"Tên thể loại đã tồn tại !"
    	]);
    	$theloai=new theloai;
    	$theloai->tentheloai=$req->tentheloai;
    	$theloai->tenkhongdau=convert_vi_to_en($req->tentheloai);
    	$theloai->save();
    	return redirect('admin/theloai/themmoi')->with('thongbao','Thêm mới thành công!');
    }
}
