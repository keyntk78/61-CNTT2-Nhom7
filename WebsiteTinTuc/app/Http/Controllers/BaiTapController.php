<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaiTapController extends Controller
{
    public function index()
    {
        return view('pages.baitap.index');
    }
    //bài tập 1
    public function form_BaiTap1()
    {
        return view('pages.baitap.form.baitap1');
    }

     public function post_form_BaiTap1()
    {
        return view('pages.baitap.form.baitap1');
    }

    //bai tap 3
    public function form_BaiTap3()
    {
        return view('pages.baitap.form.baitap3');
    }

     public function post_form_BaiTap3()
    {
        return view('pages.baitap.form.baitap3');
    }

    //bai tap 6
    public function form_BaiTap6()
    {
        return view('pages.baitap.form.baitap6');
    }

     public function post_form_BaiTap6()
    {
        return view('pages.baitap.form.baitap6');
    }

    public function form_BaiTap6_ketquapheptinh()
    {
        return view('pages.baitap.form.ketquapheptinh');
    }

    //bai tap 7
    public function form_BaiTap7()
    {
        return view('pages.baitap.form.baitap7');
    }

     public function post_form_BaiTap7()
    {
        return view('pages.baitap.form.baitap7');
    }

    public function form_BaiTap7_ketquapheptinh()
    {
        return view('pages.baitap.form.ketquapheptinh');
    }

    //bai tap 8
    public function form_BaiTap8()
    {
        return view('pages.baitap.form.baitap8');
    }

     public function post_form_BaiTap8()
    {
        return view('pages.baitap.form.baitap8');
    }


    //bài tập 2
    public function form_BaiTap2()
    {
        return view('pages.baitap.form.baitap2');
    }

     public function post_form_BaiTap2()
    {
        return view('pages.baitap.form.baitap2');
    }
    //bài tập 4
    public function form_BaiTap4()
    {
        return view('pages.baitap.form.baitap4');
    }

     public function post_form_BaiTap4()
    {
        return view('pages.baitap.form.baitap4');
    }

    //bài tập 5
    public function form_BaiTap5()
    {
        return view('pages.baitap.form.baitap5');
    }

     public function post_form_BaiTap5()
    {
        return view('pages.baitap.form.baitap5');
    }
}
