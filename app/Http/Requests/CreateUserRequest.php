<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

/**
 * 新規ユーザ登録のバリデーションを行うクラス
 */
class CreateUserRequest extends Request
{
    /**
     * 認証関係の判定を行う場合はここに処理を記述する。
     * 特にない場合は常にtrueを返しておく。
     */ 
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'body' => 'required|max:140',
            'name' => 'required|min:6|confirmed',
        ];
    }
}

//多分いらないりさ