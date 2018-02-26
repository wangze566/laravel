<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Member;

class LoveController extends Controller{
    public function index()
    {
        return view('love\love');
    }

    public function info(){
        //return  'my id ='.$id;
        return view('love\love',[
            'name' => 'wz',
            'age' =>18,
            ]);
    }

    public function member()
    {
        return Member::getMember();

    }
}

 