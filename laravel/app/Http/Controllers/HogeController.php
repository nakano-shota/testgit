<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HogeController extends Controller
{
    public function input(){
      $tagu = \Request::input('tagu');
      if($tagu){
        $data = \DB::table('bookmarks')->where('tagu',$tagu)->get();
        return view('input',compact('data'));
      }else{
        $data = \DB::table('bookmarks')->get();
        return  view('input',compact('data'));
      }
    }

    
    public function in(){
        $input =\Request::all();
        \DB::insert('insert into bookmarks (url,tagu) values (?,?)',[$input['url'],$input['tagu']]);
        return redirect('bookmark');
    }
    
    public function out(){
        $delete = \Request::input('id');
        \DB::delete('delete from bookmarks where id = ?',[$delete]);
        return redirect('bookmark');
    }
}
