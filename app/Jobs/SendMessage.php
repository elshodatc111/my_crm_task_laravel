<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Markaz;
use App\Models\MarkazSendMessage;
use mrmuminov\eskizuz\Eskiz;
use mrmuminov\eskizuz\types\sms\SmsSingleSmsType;
use Illuminate\Support\Facades\Log;
class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    protected $markaz_id;
    protected $phone;
    protected $text;
    public function __construct($markaz_id, $phone, $text){
        $this->markaz_id = $markaz_id;
        $this->phone = $phone;
        $this->text = $text;
    }
    public function handle(): void{
        $eskiz_email = env('SMS_EMAIL');
        $eskiz_password = env('SMS_PASSWORD');
        $SAYTKINK = env('SAYTKINK');
        $Text = $this->text . " websayt: " . $SAYTKINK;
        $eskiz = new Eskiz($eskiz_email, $eskiz_password);
        $eskiz->requestAuthLogin();
        $from = '4546';
        $mobile_phone = $this->phone;
        $message = strval($Text);
        $user_sms_id = 1;
        $callback_url = '';
        $singleSmsType = new SmsSingleSmsType(
            from: $from,
            message: $message,
            mobile_phone: $mobile_phone,
            user_sms_id: $user_sms_id,
            callback_url: $callback_url
        );
        $result = $eskiz->requestSmsSend($singleSmsType);
        if ($result->getResponse()->isSuccess) {
            MarkazSendMessage::create([
                'markaz_id' => $this->markaz_id,
                'phone' => $this->phone,
                'description' => strval($Text),
            ]);
            $Markaz = Markaz::find($this->markaz_id);
            $Markaz->count_sms = $Markaz->count_sms + 1;
            $Markaz->mavjud_sms = $Markaz->mavjud_sms - 1;
            $Markaz->save();
        } else {
            Log::info('Yuborilmadi: ' . $result->getResponse()->message);
        }
    }
    
}
