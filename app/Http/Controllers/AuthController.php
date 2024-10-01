<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Detail;
use App\Models\Personaltable;

class AuthController extends Controller
{
    //
    public function register(){
        return view('registration');
    }
    public function details(){
        return view('details');
    }
    public function login(){
        return view('login');
    }
    public function home(){
        $user=session('user');
        $member=Member::where('id',$user)->first();
        $detail=Detail::where('id',$user)->first();
        $personaltable=Personaltable::where('id',$user)->first();

        return view('home',compact('member','detail','personaltable'));
    }
    public function insert1fun(Request $req){
        $obj = new Member;
        $obj->username=$req->input('usnm');
        $obj->password=$req->input('pass');
        $obj->save();

        $latest = $obj->id;
        session(['latest'=>$latest]);

        $obj2 = new Personaltable;
        $obj2->memberid=$latest;
        $obj2->name=$req->input('name');
        $obj2->address=$req->input('address');
        $obj2->email=$req->input('email');
        $obj2->phno=$req->input('phno');
        $obj2->save();

        return redirect()->route('details');
    }
    public function insert2fun(Request $req){
        $obj = new Detail;
        $latest=session('latest');
        $obj->memberid=$latest;
        $obj->spi1=$req->input('sem1');
        $obj->spi2=$req->input('sem2');
        $obj->spi3=$req->input('sem3');
        $obj->spi4=$req->input('sem4');
        $obj->spi5=$req->input('sem5');
        $obj->spi6=$req->input('sem6');
        $obj->cpi=$req->input('cumulative');
        $obj->save();

        return redirect()->route('login');
    }
    public function vals(Request $req){
        $usnm1=$req->get('usnm1');
        $pass1=$req->get('pass1');

        $obj = Member::where('username',$usnm1)->first();

        if($obj){
            $pass2 = $obj->password;
        }
        if($pass2 == $pass1){
            session(['user'=>$obj->id]);
            return redirect()->route('home');
        }
    }
}
