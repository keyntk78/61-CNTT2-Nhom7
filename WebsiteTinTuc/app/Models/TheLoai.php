<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TheLoai extends Model
{
    use HasFactory;

    // lấy danh sách thể loại
    public function DanhsachTheloai(){
        $list = DB::table('theloai')->get();
        return $list;
    }

    //thêm thể loại
    public function ThemTheloai($data){
       return DB::table('theloai')->insert($data);  
    }

    // Chi tiết thể loại theo id
    public function ChiTietTheLoai($id){
        $chittiet = DB::table('theloai')->select('*')->where('id', '=', $id)->get();

        return $chittiet;
    }

    // cập nhật thể loại
    public function CapNhattheloai($id,$data){
        return  DB::table('theloai')->where('id', '=', $id)->update($data);
    }

    // xóa thể loại
    public function Xoatheloai($id){
        return  DB::table('theloai')->where('id', '=', $id)->delete();
    }

    // Lấy 4 thể loại đầu tiên
     public function Top_4_Theloai(){
        $list = DB::table('theloai')
        ->orderBy('created_at', 'asc')
        ->take(4)
        ->get();
        return $list;
    }
}