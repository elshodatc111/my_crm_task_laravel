<?php

namespace App\Http\Controllers\Meneger;
use Illuminate\Validation\Rule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MarkazAddres;
use App\Models\MarkazSmm;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Models\UserBalans;
use App\Models\UserHistory;
use App\Models\Markaz;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendMessage;

class TashrifController extends Controller
{
    public function allTashrif(){
        return view('meneger.students.index');
    }
    public function allDebet(){
        return view('meneger.students.debet');
    }
    public function allCreate(){
        $MarkazAddres = MarkazAddres::where('markaz_id',auth()->user()->markaz_id)->get();
        $MarkazSmm = MarkazSmm::where('markaz_id',auth()->user()->markaz_id)->get();
        return view('meneger.students.create',compact('MarkazAddres','MarkazSmm'));
    }
    public function allCreateStory(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'phone2' => 'required|string',
            'addres' => 'required|string|max:255',
            'tkun' => ['required', 'date', 'before_or_equal:' . now()->subYears(7)->toDateString(), 'after_or_equal:' . now()->subYears(65)->toDateString()],
            'about' => 'required|string|max:255',
            'smm' => 'required|string|max:255',
            'phone1' => [
                'required',
                'string',
                Rule::unique('users')->where(function ($query) use ($request) {
                    return $query->where('role_id', 6)
                                 ->where('markaz_id', auth()->user()->markaz_id);
                }),
            ],
        ]);
        $User = User::create([
            'markaz_id' => auth()->user()->markaz_id,
            'role_id' => 6,
            'name' => $request->name,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'addres' => $request->addres,
            'tkun' => $request->tkun,
            'about' => $request->name,
            'smm' => $request->smm,
            'status' => 'true',
            'balans' => 0,
            'email' => "S".time(),
            'password' => Hash::make('12345678'),
        ]);
        UserHistory::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $User->id,
            'status' => 'Markazga tashrif',
            'guruh' => '-',
            'summa' => '-',
            'tulov_type' => '-',
            'xisoblash' => '-',
            'balans' => 0,
            'meneger' => auth()->user()->email,
        ]);
        UserBalans::create([
            'markaz_id' => auth()->user()->markaz_id,
            'user_id' => $User->id,
            'naqt' => 0,
            'plastik' => 0,
            'payme' => 0,
            'qaytarildi' => 0,
            'chegirma' => 0,
            'jarima' => 0,
        ]);
        $Phone = str_replace($request->phone1," ", "");
        $Url = "https://atko.uz";
        $Text = "Hurmatli ".$request->name." siz ".Markaz::find(auth()->user()->markaz_id)->name." o'quv markaziga tashrifingizdan mamnunmiz. Sizning login: ".$request->email." parol: 12345678 websayt: ".$Url;
        SendMessage::dispatch(auth()->user()->markaz_id, $Phone, $Text);
        Log::info($Text);
        return redirect()->route('meneger.all_show', $User->id )->with('success', "Yangi tashrif qo'shildi.");
    }
    public function allShow($id){
        return view('meneger.students.show');
    }
}
