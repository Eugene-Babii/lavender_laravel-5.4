<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send(){
        // 1 - имя файла с текстом сообщения
        // 2 - массив данных для представления (имя отправителя)
        // 3 - функция с получатлем, темой и т.п.
        Mail::send(['text'=>'mail'], ['name', 'Лаванда'], function($message){
            $message->to('jie.babii@gmail.com', 'To admin')->subject('Бронирование лавандового поля');
            $message->from('jie.babii@gmail.com', 'From admin');

        });
    }
}
