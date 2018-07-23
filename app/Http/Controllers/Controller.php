<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function counts($user) {
        // この下変更あき
        $count_histories = count($user->feed_histories());
        
        $count_followings = $user->followings()->count();
        $count_followers = $user->followers()->count();

        return [
            'count_histories' => $count_histories,
            'count_followings' => $count_followings,
            'count_followers' => $count_followers,
        ];
    }
}