<?php
use App\Models\User;
use Carbon\Carbon;
$today = Carbon::today();
echo count(User::where('markaz_id',auth()->user()->markaz_id)->where('role_id',6)->whereRaw("DATE_FORMAT(tkun, '%m-%d') = ?", [$today->format('m-d')])->get());