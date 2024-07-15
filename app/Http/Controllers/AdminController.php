<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Markaz;
use App\Models\Kassa;
use App\Models\MarkazOgohlik;

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
        $response = array();
        $response['markaz'] = Markaz::find($id);
        $response['markazOgoh'] = MarkazOgohlik::where('markaz_id',$id)->get();
        return view('admin.index_show',compact('id','response'));
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
