<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Grops;
use App\Models\UserPaymart;
use App\Models\MarkazRoom;
use App\Models\MarkazCoursTest;
use App\Models\GropsTime;
use App\Models\Markaz;
use App\Models\UserHistory;
use App\Models\MarkazBalans;
use App\Models\MarkazPaymart;
use App\Models\UserGroup;
use App\Models\UserTest;
use App\Models\UserBalans;
use App\Models\Transaction;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PaymeController extends Controller{
    public function index(Request $request){
        if($request->method == 'CheckPerformTransaction'){
            if(empty($request->params['account'])){
                $response = [
                    'id' => $request->id,
                    'error' => [
                        'code' => -32504,
                        'message' =>[
                            'uz' => "To'lov malumotlarida kamchilik mavjud.",
                            'ru' => "В платежной информации ошибка.",
                            'en' => "There is an error in the payment information.",
                        ]
                    ]
                ];
                return json_encode($response);
            }else{
                $account = $request->params['account'];
                $Order = Order::where('id', $account['order_id'])->first();
                if(empty($Order)){
                    $response = [
                        'id' => $request->id,
                        'error' => [
                            'code' => -31050,
                            'message' =>[
                            'uz' => "Foydalanuvchi topilmadi.",
                            'ru' => "Пользователь не найден.",
                            'en' => "User not found.",
                            ]
                        ]
                    ];
                    return json_encode($response);
                }
                else if($Order->price*100 != $request->params['amount']){//*100
                    $response = [
                        'id' => $request->id,
                        'error' => [
                            'code' => -31001,
                            'message' =>[
                                'uz' => "To'lov summasi noto'g'ri kiritilgan.",
                                'ru' => "Сумма платежа была введена неверно.",
                                'en' => "The payment amount was entered incorrectly.",
                            ]
                        ]
                    ];
                    return json_encode($response);
                }
            }
            $response = [
                'result'=>[
                    'allow' => true,
                ]
            ];
            return json_encode($response);
        }
        else if($request->method == 'CreateTransaction'){
            if(empty($request->params['account'])){
                $response = [
                    'id' => $request->id,
                    'error' =>[
                        'code' => -32504,
                        'message' =>[
                            'uz' => "Bajarish uchun imtiyozlar mavjud emas.",
                            'ru' => "Никаких преимуществ в производительности нет.",
                            'en' => "There are no performance benefits.",
                        ]
                    ]
                ];
                return json_encode($response);
            }else{
                $account = $request->params['account'];
                $order = Order::where('id',$account['order_id'])->first();
                $order_id = $request->params['account']['order_id'];
                $transaction = Transaction::where('order_id', $order_id)->where('state',1)->get();
                if(empty($order)){
                    $response = [
                        'id' => $request->id,
                        'error' => [
                            'code' => -31050,
                            'message' =>[
                                'uz' => "Tranzaksiya topilmadi.",
                                'ru' => "Транзакция не найдена.",
                                'en' => "Transaction not found.",
                            ]
                        ]
                    ];
                    return json_encode($response);
                }
                else if($order->price*100 != $request->params['amount']){///*100
                    $response = [
                        'id' => $request->id,
                        'error' => [
                            'code' => -31001,
                            'message' =>[
                                'uz' => "To'lov summasi xato kiritildi.",
                                'ru' => "Сумма платежа была введена неверно.",
                                'en' => "The payment amount was entered incorrectly.",
                            ]
                        ]
                    ];
                    return json_encode($response);
                }
                else if(count($transaction) == 0){
                    $transaction = new Transaction();
                    $transaction->paycom_transaction_id = $request->params['id'];
                    $transaction->paycom_time = $request->params['time'];
                    $transaction->paycom_time_datetime = now();
                    $transaction->amount = $request->params['amount'];
                    $transaction->state = 1;
                    $transaction->order_id = $account['order_id'];
                    $transaction->save();
                    return response()->json([
                        'result' => [
                            'create_time' => $request->params['time'],
                            'transaction' => strval( $transaction->id ),
                            'state' => $transaction->state,
                        ]
                    ]);
                }
                else if((count($transaction)==1) and 
                ($transaction->first()->paycom_time==$request->params['time']) and 
                ($transaction->first()->paycom_transaction_id==$request->params['id'])){
                    $response = [
                        'result'=>[
                            'create_time' => $request->params['time'],
                            'transaction' => "{$transaction[0]->id}",
                            'state' => intval($transaction[0]->state)
                        ]
                    ];
                    return json_encode($response);
                }
                else{
                    $response = [
                        'id' => $request->id,
                        'error' => [
                            'code' => -31099,
                            'message' => [
                                'uz' => "To'lov amalga oshirilmoqda.",
                                'ru' => "Оплата производится.",
                                'en' => "Payment is being made."
                            ]
                        ]
                    ];
                    return json_encode($response);
                }
            }
        }
        else if($request->method == 'CheckTransaction'){
            $transaction = Transaction::where('paycom_transaction_id', $request->params['id'])->first();
            if(empty($transaction)){
                $response = [
                    'id' => $request->id,
                    'error' => [
                        'code' => -32504,
                        'message' =>[
                            'uz' => "Tranzaksiya topilmadi.",
                            'ru' => "Транзакция не найдена.",
                            'en' => "Transaction not found.",
                        ]
                    ]
                ];
                return json_encode($response);
            }
            else if($transaction->state == 1){
                $response = [
                    'result' =>[
                        'create_time' => intval($transaction->paycom_time),
                        'perform_time' => intval($transaction->perform_time_unix),
                        'cancel_time' => 0,
                        'transaction' => strval($transaction->id),
                        'state' => $transaction->state,
                        'reason' => $transaction->reason
                    ]
                ];
                return json_encode($response);
            }
            else if($transaction->state == 2){
                $response = [
                    'result' =>[
                        'create_time' => intval($transaction->paycom_time),
                        'perform_time' => intval($transaction->perform_time_unix),
                        'cancel_time' => 0,
                        'transaction' => strval($transaction->id),
                        'state' => $transaction->state,
                        'reason' => $transaction->reason
                    ]
                ];
                return json_encode($response);
            }
            else if($transaction->state == -2){
                $response = [
                    'result' =>[
                        'create_time' => intval($transaction->paycom_time),
                        'perform_time' => intval($transaction->perform_time_unix),
                        'cancel_time' => intval($transaction->cancel_time),
                        'transaction' => strval($transaction->id),
                        'state' => $transaction->state,
                        'reason' => $transaction->reason
                    ]
                ];
                return json_encode($response);
            }
            else if($transaction->state == -1){
                $response = [
                    'result' =>[
                        'create_time' => intval($transaction->paycom_time),
                        'perform_time' => 0,
                        'cancel_time' => intval($transaction->cancel_time),
                        'transaction' => strval($transaction->id),
                        'state' => $transaction->state,
                        'reason' => $transaction->reason
                    ]
                ];
                return json_encode($response);
            }
            
        }
        else if($request->method == 'PerformTransaction'){
            $ldate = date("Y-m-d H:i:s");
            $transaction = Transaction::where('paycom_transaction_id', '=', $request->params['id'])->first();
            if(empty($transaction)){
                $response = [
                    'id' => $request->id,
                    'error' => [
                        'code' => -32504,
                        'message' =>[
                            'uz' => "Tranzaksiya topilmadi.",
                            'ru' => "Транзакция не найдена.",
                            'en' => "Transaction not found.",
                        ]
                    ]
                ];
                return json_encode($response);
            }
			else if($transaction->state == 1){
                $currentMillis = intval(microtime(true) * 1000);
                $transaction = Transaction::where('paycom_transaction_id', $request->params['id'])->first();
                $transaction->state = 2;
                $transaction->perform_time = $ldate;
                $transaction->perform_time_unix = str_replace('.', '', $currentMillis);
                $transaction->update();
                $order_id = $transaction->order_id;
                $order_table = Order::where('id', $order_id)->first();
                $order_table->status = "To'lov qilindi.";
                $order_table->update();
                $Grops = Grops::find($order_table->cours_id);
                if(!$Grops){
                    return response()->json([
                        'status' => false,
                        'message' => 'Not fount guruh_id',
                    ],401);
                }
                $User = User::find($order_table->user_id);
                $UserHistory = UserHistory::create([
                    'markaz_id' => $order_table->markaz_id,
                    'user_id' => $order_table->user_id,
                    'status' => 'Payme',
                    'guruh' => $Grops->guruh_name,
                    'summa' => $order_table->price,
                    'tulov_type' => 'Payme',
                    'comment' => "Payme orqali tulov",
                    'xisoblash' => number_format($User->balans, 0, '.', ' ')." + ".number_format($order_table->price, 0, '.', ' ')." = ".number_format($User->balans+$order_table->price, 0, '.', ' '),
                    'balans' => number_format($User->balans+$order_table->price, 0, '.', ' '),
                    'meneger' => "Payme",
                ]);
                $UserBalans = UserBalans::where('user_id',$order_table->user_id)->first();
                if($UserBalans->payme == 0){
                    $UserBalans->payme = $order_table->price;
                }else{
                    $UserBalans->payme = $UserBalans->payme + $order_table->price;
                }
                $UserBalans->save();
                UserPaymart::create([
                    'markaz_id' => $order_table->markaz_id,
                    'user_id' => $order_table->user_id,
                    'summa' => $order_table->price,
                    'tulov_type' => "Payme",
                    'guruh' => $Grops->id,
                    'comment' => "Payme orqali to'lov",
                    'meneger' => "Payme",
                ]);
                $MarkazBalans = MarkazBalans::where('markaz_id', $order_table->markaz_id)->first();
                $MarkazBalans->balans_payme = $MarkazBalans->balans_payme + $order_table->price;
                $MarkazBalans->save();
                $User->balans = $User->balans + $order_table->price;
                $User->save();                
                $response = [
                    'result' =>[
                        'transaction' => "{$transaction->id}",
                        'perform_time' => intval($transaction->perform_time_unix),
                        'state' => intval($transaction->state)
                    ]
                ];
                return json_encode($response);
            }
			else if($transaction->state == 2){
                $response = [
                    'result' =>[
                        'transaction' => strval($transaction->id),
                        'perform_time' => intval($transaction->perform_time_unix),
                        'state' => intval($transaction->state)
                    ]
                ];
                return json_encode($response); 
            }
			else if($transaction->state == -1){
                $response = [
                    'result' =>[
                        'transaction' => strval($transaction->id),
                        'perform_time' => intval($transaction->perform_time_unix),
                        'state' => intval($transaction->state)
                    ]
                ];
                return json_encode($response); 
            }
			else if($transaction->state == -2){
                $response = [
                    'result' =>[
                        'transaction' => strval($transaction->id),
                        'perform_time' => intval($transaction->perform_time_unix),
                        'state' => intval($transaction->state)
                    ]
                ];
                return json_encode($response); 
            }
            
        }else if($request->method == 'CancelTransaction'){
            $end = date("Y-m-d")." 00:00:00";
            $ldate = date("Y-m-d H:i:s");
            $transaction = Transaction::where('paycom_transaction_id', $request->params['id'])->first();
            if(empty($transaction)){
                $response = [
                    'id'=>$request->id,
                    'error'=>[
                        'code' => -32504,
                        'message' =>[
                            'uz' => "Tranzaksiya topilmadi.",
                            'ru' => "Транзакция не найдена.",
                            'en' => "Transaction not found.",
                        ]
                    ]
                ];
                return json_encode($response);
            }
			else if($transaction->state == 1){
                $currentMillis = intval(microtime(true) *1000 );
                $transaction = Transaction::where('paycom_transaction_id', $request->params['id'])->first();
                $transaction->reason = $request->params['reason'];
                $transaction->cancel_time = str_replace('.',"",$currentMillis);
                $transaction->state = -1;
                $transaction->update();
                $order_id = $transaction->order_id;
                $order_table = Order::where('id', $order_id)->first();
                $order_table->status = "Bekor qilindi";
                $order_table->update();
                $response = [
                    'result' =>[
                        'state' => intval($transaction->state),
                        'cancel_time' => intval($transaction->cancel_time),
                        'transaction' => strval($transaction->id)
                    ]
                ];
                return $response;
            }
			else if($transaction->state == 2){
                $currentMillis = intval(microtime(true) * 1000 );
                $transaction = Transaction::where('paycom_transaction_id',$request->params['id'])->first();
                $transaction->reason = $request->params['reason'];
                $transaction->cancel_time = str_replace('.','',$currentMillis);
                $transaction->state = -2;
                $transaction->update();
                $order_id = $transaction->order_id;
                $order_table = Order::where('id', $order_id)->first();
                $order_table->status = "Bekor qilindi";
                $order_table->update();

                ///##################################
                $Grops = Grops::find($order_table->cours_id);
                if(!$Grops){
                    return response()->json([
                        'status' => false,
                        'message' => 'Not fount guruh_id',
                    ],401);
                }
                $User = User::find($order_table->user_id);
                $UserHistory = UserHistory::create([
                    'markaz_id' => $order_table->markaz_id,
                    'user_id' => $order_table->user_id,
                    'status' => 'Payme Bekor qilindi',
                    'guruh' => $Grops->guruh_name,
                    'summa' => $order_table->price,
                    'tulov_type' => 'Payme Cancel',
                    'comment' => "Payme orqali tulov bekor qilindi.",
                    'xisoblash' => number_format($User->balans, 0, '.', ' ')." - ".number_format($order_table->price, 0, '.', ' ')." = ".number_format($User->balans-$order_table->price, 0, '.', ' '),
                    'balans' => number_format($User->balans-$order_table->price, 0, '.', ' '),
                    'meneger' => "Payme",
                ]);
                $UserBalans = UserBalans::where('user_id',$order_table->user_id)->first();
                $UserBalans->payme = $UserBalans->payme - $order_table->price;
                $UserBalans->save();
                UserPaymart::create([
                    'markaz_id' => $order_table->markaz_id,
                    'user_id' => $order_table->user_id,
                    'summa' => $order_table->price,
                    'tulov_type' => "Payme Cancel",
                    'guruh' => $Grops->id,
                    'comment' => "Payme orqali to'lov bekor qilindi.",
                    'meneger' => "Payme",
                ]);
                $MarkazBalans = MarkazBalans::where('markaz_id', $order_table->markaz_id)->first();
                $MarkazBalans->balans_payme = $MarkazBalans->balans_payme - $order_table->price;
                $MarkazBalans->save();
                $User->balans = $User->balans - $order_table->price;
                $User->save();  
                /// #########################


                $response = [
                    'result' =>[
                        "transaction" => strval($transaction->id),
                        "cancel_time" => intval($transaction->cancel_time),
                        "state" => intval($transaction->state)
                    ]
                ];
                return $response;
            }
			else if($transaction->state == -1){
                $transaction = Transaction::where('paycom_transaction_id',$request->params['id'])->first();
                $response = [
                    'result' =>[
                        "transaction" => strval($transaction->id),
                        "cancel_time" => intval($transaction->cancel_time),
                        "state" => intval($transaction->state)
                    ]
                ];
                return $response;
            }
			else if($transaction->state == -2){
                $transaction = Transaction::where('paycom_transaction_id',$request->params['id'])->first();
                $response = [
                    'result' =>[
                        "transaction" => strval($transaction->id),
                        "cancel_time" => intval($transaction->cancel_time),
                        "state" => intval($transaction->state)
                    ]
                ];
                return $response;
            }
        }
        else if($request->method == "GetStatement"){
            $from = $request->params['from'];
            $to = $request->params['to'];
            $transaction = Transaction::where('paycom_time',">=",$from)->where('paycom_time','<=',$to)->get()->first();
            if(empty($transaction)){
                $response = [
                    'id'=>$request->id,
                    'error'=>[
                        'code' => -32504,
                        'message' =>"Bu maydon bo'sh"
                    ]
                ];
                return json_encode($response);
            }else{
                $response = array();
                $i=0;
                foreach ($transaction as $value) {
                    $response['result']['transaction'][$i]['id'] = $transaction->paycom_transaction_id;
                    $response['result']['transaction'][$i]['time'] = $transaction->paycom_time;
                    $response['result']['transaction'][$i]['amount'] = $transaction->amount;
                    $response['result']['transaction'][$i]['account']['user_id'] = $transaction->user_id;
                    $response['result']['transaction'][$i]['account']['cours_id'] = $transaction->cours_id;
                    $response['result']['transaction'][$i]['create_time'] = intval($transaction->paycom_time);
                    $response['result']['transaction'][$i]['perform_time'] = intval($transaction->perform_time_unix);
                    $response['result']['transaction'][$i]['cancel_time'] = intval($transaction->cancel_time) ?? 0;
                    $response['result']['transaction'][$i]['transaction'] = $transaction->paycom_transaction_id;
                    $response['result']['transaction'][$i]['transaction'] = $transaction->id;
                    $response['result']['transaction'][$i]['transaction'] = $transaction->id;
                    $response['result']['transaction'][$i]['reason'] = $transaction->reason;
                    $i++;
                }
                return json_encode($response);
            }
        }  
        else if($request->method =='ChangePassword'){
            $response = [
                'id'=>$request->id,
                'error'=>[
                    'code' => -32504,
                    'message' =>"ChangePassword"
                ]
            ];
            return json_encode($response);
        }
    }
}
