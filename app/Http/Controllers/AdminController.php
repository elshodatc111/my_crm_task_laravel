<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Markaz;

class AdminController extends Controller{

    public function index(){
        $Markaz = Markaz::get();
        return view('admin.index',compact('Markaz'));
    }


    public function create(){
        $Markaz = Markaz::get();
        return view('admin.create_index');
    }

    public function show($id){
        return view('admin.index_show',compact('id'));
    }

    public function show_setting($id){
        return view('admin.index_show_setting',compact('id'));
    }

    public function show_sms($id){
        return view('admin.index_show_sms',compact('id'));
    }

    public function show_statistik($id){
        return view('admin.index_show_statistik',compact('id'));
    }
}
