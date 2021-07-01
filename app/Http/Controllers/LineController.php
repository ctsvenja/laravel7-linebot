<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LineController extends Controller
{
    public function index(Request $request)
    {
        error_log(1);
        // error_log($request['events'][0]['message']['text']);
        // error_log($request);
        // error_log(env('LINE_CHANNEL_ASCCES_TOKEN'));

        // $replyToken = $request['events'][0]['replyToken'];
    
        // $response = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     // 'Authorization' => 'Bearer '.env('LINE_CHANNEL_ASCCES_TOKEN')
        //     'Authorization' => 'Bearer FcQeDaw3D/132Rc/Hak31wigXlVBMIKvC1xL0WXD4Co6m2BT2auzI+77z55MV6Zhgze+S9SVwF9GXeE7OYAfN02zgoGOE4fW3XfdByXPjaOR3aE65nuFwSmQeKC7GlqQfaZT06G00C+wbWtXw0/YqwdB04t89/1O/w1cDnyilFU='

        // ])->post('https://api.line.me/v2/bot/message/reply',[
        //     'replyToken'=>$replyToken,
        //     'messages'=>[
        //         [
        //             'type'=>'text',
        //             'text'=>$request['events'][0]['replyToken']
        //         ]
        //     ]
        // ]);
        return response('ok','200');
    }
}
