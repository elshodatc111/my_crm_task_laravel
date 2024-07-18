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
use App\Models\MarkazHodimStatistka;
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
        $User = User::create([
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
        MarkazHodimStatistka::create([
            'markaz_id'=>auth()->user()->markaz_id,
            'user_id'=>$User->id,
            'naqt'=>0,
            'plastik'=>0,
            'chegirma'=>0,
            'qaytarildi'=>0,
            'tashrif'=>0,
        ]);
        $Markaz_ID = auth()->user()->markaz_id;
        $Phone = str_replace(" ","",$request->phone1);
        $Url = "https://atko.uz";
        $Text = "Hurmatli ".$request->name." siz ".Markaz::find(auth()->user()->markaz_id)->name." o'quv markaziga ishga olindingiz. Sizning login: ".$request->email." parol: 12345678 websayt: ".$Url;

        SendMessage::dispatch($Markaz_ID, $Phone, $Text);

        return redirect()->route('meneger.hodim')->with('success', "Yangi hodim qo'shildi.");
    }
    public function hodimUpdateStore(Request $request){
        $validate = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'addres' => 'required',
            'tkun' => 'required',
            'role_id' => 'required',
            'about' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
        ]);
        $User = User::find($request->id);
        $User->name = $request->name;
        $User->addres = $request->addres;
        $User->role_id = $request->role_id;
        $User->about = $request->about;
        $User->phone1 = $request->phone1;
        $User->phone2 = $request->phone2;
        $User->save();
        return redirect()->back()->with('success', "Hodim malumotlari yangilandi.");
    }
    public function hodimShow($id){
        $User = User::find($id);
        $Statistik = MarkazHodimStatistka::where('user_id',$id)->first();
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.hodim.hodim_show',compact('User','Statistik','MarkazAddres'));
    }
    public function hodimUpdatePassword(Request $request){
        $User = User::find($request->id);
        $User->password = Hash::make('12345678');
        $User->save();
        $Phone = str_replace($User->phone1, " ", ""); 
        $Markaz_ID = auth()->user()->markaz_id;
        $password = '12345678';
        $Url = "https://atko.uz";
        $Text = $User->name." Sizning parolingiz yangilandi. Yangi parol ".$password." websayt: ".$Url;
        SendMessage::dispatch($Markaz_ID, $Phone, $Text);
        return redirect()->back()->with('success', "Hodim paroli yangilandi.");
    }
    public function hodimStatistikClear(Request $request){
        $MarkazHodimStatistka = MarkazHodimStatistka::where('user_id',$request->id)->first();
        $MarkazHodimStatistka->naqt = 0;
        $MarkazHodimStatistka->plastik = 0;
        $MarkazHodimStatistka->chegirma = 0;
        $MarkazHodimStatistka->qaytarildi = 0;
        $MarkazHodimStatistka->tashrif = 0;
        $MarkazHodimStatistka->save();
        return redirect()->back()->with('success', "Hodim statistikasi tozalandi.");
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
        $User = User::find($id);
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.hodim.techer_show',compact('User','MarkazAddres'));
    }
    public function techerUpdatePassword(Request $request){
        $User = User::find($request->id);
        $User->password = Hash::make('12345678');
        $User->save();
        $Phone = str_replace($User->phone1, " ", ""); 
        $Markaz_ID = auth()->user()->markaz_id;
        $password = '12345678';
        $Url = "https://atko.uz";
        $Text = $User->name." Sizning parolingiz yangilandi. Yangi parol ".$password." websayt: ".$Url;
        SendMessage::dispatch($Markaz_ID, $Phone, $Text);
        return redirect()->back()->with('success', "O'qituvchi paroli yangilandi.");
    }
    public function techerUpdateStore(Request $request){
        $validate = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'addres' => 'required',
            'tkun' => 'required',
            'about' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
        ]);
        $User = User::find($request->id);
        $User->name = $request->name;
        $User->addres = $request->addres;
        $User->about = $request->about;
        $User->phone1 = $request->phone1;
        $User->phone2 = $request->phone2;
        $User->save();
        return redirect()->back()->with('success', "O'qituvchi ma`lumotlari yangilandi.");
    }
}
