<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\truyen;
use Illuminate\Support\Facades\Session;
use App\Models\theloaitruyen;
use App\Models\tacgia;

class TruyenController extends Controller
{
    //
    public function load_list()
    {
    	$truyen=truyen::paginate(Session::get('paginate'));
    	return view('admin.truyen.list',['truyen'=>$truyen]);
    }
    public function load_add()
    {
    	$TheLoaiTruyen=theloaitruyen::all();
    	$TacGia=tacgia::all();
    	return view('admin.truyen.add',['TacGia'=>$TacGia,'TheLoaiTruyen'=>$TheLoaiTruyen]);
    }

    public function post_add(Request $req)
    {
        // Điều kiện cho phép upload

      $this->validate($req,
      		[
                'file' => 'image|max:2028|required',
                'TenTruyen'=>'max:200|min:3|required',
                'TheLoaiTruyen'=>'required',
                'TacGia'=>'required',
            ],
            [
            	'TenTruyen.max'=>"Tên truyện nhiều nhất 200 ký tự !",
            	'TenTruyen.min'=>"Tên truyện ít nhất 3 ký tự !",
            	'TenTruyen.required'=>"Tên truyện không được bỏ trống !",
            	'file.image' => 'Định dạng không cho phép !',
            	'file.max' => 'Kích thước file quá lớn !',
            	'file.required'=>'Bạn chưa chọn ảnh !',
            	'TheLoaiTruyen.required'=>"Bạn chưa chọn thể loại truyện !",
            	'TacGia.required'=>"Bạn chưa chọn tác giả !",
            ]);   
       		$file=$req->file;
        	// Kiểm tra file hợp lệ
            // Lấy tên file
            $file_name = random_string(20).'.'.$file->getClientOriginalExtension();
            // Lưu file vào thư mục upload với tên là biến $filename
            $file->move('upload',$file_name);
            $truyen=new truyen();
            $truyen->tentruyen=$req->TenTruyen;
            $truyen->tenkhongdau=convert_vi_to_en($req->TenTruyen);
            $truyen->hinhanh=$file_name;
            $truyen->gioithieu=$req->gioithieu;
            $truyen->user_id=session('admin')['id'];
            $truyen->id_theloaitruyen=$req->TheLoaiTruyen;
            $truyen->id_tacgia=$req->TacGia;
            $truyen->save();
            return redirect("admin/truyen/themmoi")->with('thongbao',"Thêm mới thành công!");
	}
	public function load_edit($id)
	{
		$truyen=truyen::find($id);
		$TheLoaiTruyen=theloaitruyen::all();
		$TacGia=tacgia::all();
		return view('admin.truyen.edit',['truyen'=>$truyen,'TheLoaiTruyen'=>$TheLoaiTruyen,'TacGia'=>$TacGia]);
	}
}
