<?php
    use App\Models\UserEslatma;
    echo count(UserEslatma::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get());
?>