<?php
    use App\Models\Form;
    echo count(Form::where('markaz_id',auth()->user()->markaz_id)->where('status','true')->get());
?>