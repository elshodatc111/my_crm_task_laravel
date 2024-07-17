<?php

namespace App\Http\Controllers\Meneger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Markaz;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Log;
use App\Jobs\SendMessage;
use App\Models\MarkazAddres;
use Illuminate\Support\Facades\Hash;

class HodimController extends Controller
{
    public function hodim(){
        $User = User::where('markaz_id',auth()->user()->markaz_id)->whereIn('role_id', [2, 3, 4])->where('id','!=',auth()->user()->id)->get();
        return view('meneger.hodim.hodim',compact('User'));
    }
    public function hodimUnlock(Request $request){
        $User = User::find($request->id);
        if($User->status=='true'){
            $User->status = 'false';
            $User->save();
            if($User->role_id==5){
                return redirect()->back()->with('success', "O'qiuvchi bloklandi.");
            }else{
                return redirect()->back()->with('success', "Hodim bloklandi.");
            }
        }else{
            $User->status = 'true';
            $User->save();
            if($User->role_id==5){
                return redirect()->back()->with('success', "O'qituvchi aktivlashtirildi.");
            }else{
                return redirect()->back()->with('success', "Hodim aktivlashtirildi.");
            }
            
        }
    }
    public function hodimCreate(){
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.hodim.hodim_create',compact('MarkazAddres'));
    }
    public function hodimCreateStore(Request $request){ 
        $validate = $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'addres' => 'required',
            'tkun' => ['required', 'date', 'before_or_equal:' . now()->subYears(16)->toDateString(), 'after_or_equal:' . now()->subYears(65)->toDateString()],
            'about' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => ['required','unique:users'],
        ]);
        User::create([
            'markaz_id' => auth()->user()->markaz_id,
            'role_id' => $request->role_id,
            'name' => $request->name,
            'addres' => $request->addres,
            'tkun' => $request->tkun,
            'about' => $request->about,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'password' => Hash::make('12345678'),
        ]);
        $Markaz_ID = auth()->user()->markaz_id;
        $Phone = str_replace(" ","",$request->phone1);
        $Url = "https://atko.uz";
        $Text = "Hurmatli ".$request->name." siz ".Markaz::find(auth()->user()->markaz_id)->name." o'quv markaziga ishga olindingiz. Sizning login: ".$request->email." parol: 12345678 websayt: ".$Url;

        SendMessage::dispatch($Markaz_ID, $Phone, $Text);

        return redirect()->route('meneger.hodim')->with('success', "Yangi hodim qo'shildi.");
    }
    public function hodimShow($id){
        return view('meneger.hodim.hodim_show');
    }
    public function techer(){
        $User = User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',5)->where('id','!=',auth()->user()->id)->get();
        return view('meneger.hodim.techer',compact('User'));
    }
    public function techerCreate(){
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.hodim.techer_create',compact('MarkazAddres'));
    }
    public function techerCreateStore(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'addres' => 'required',
            'tkun' => ['required', 'date', 'before_or_equal:' . now()->subYears(16)->toDateString(), 'after_or_equal:' . now()->subYears(65)->toDateString()],
            'about' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => ['required','unique:users'],
        ]);
        User::create([
            'markaz_id' => auth()->user()->markaz_id,
            'role_id' => 5,
            'name' => $request->name,
            'addres' => $request->addres,
            'tkun' => $request->tkun,
            'about' => $request->about,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'password' => Hash::make('12345678'),
        ]);
        $Markaz_ID = auth()->user()->markaz_id;
        $Phone = str_replace(" ","",$request->phone1);
        $Url = "https://atko.uz";
        $Text = "Hurmatli ".$request->name." siz ".Markaz::find(auth()->user()->markaz_id)->name." o'quv markaziga o'qituvchi lovozimiga ishga olindingiz. Sizning login: ".$request->email." parol: 12345678 websayt: ".$Url;
        
        SendMessage::dispatch($Markaz_ID, $Phone, $Text);

        return redirect()->route('meneger.techer')->with('success', "Yangi o'qituvchi qo'shildi.");
    }
    public function techerShow($id){
        return view('meneger.hodim.techer_show');
    }
}
