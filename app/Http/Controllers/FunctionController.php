<?php

namespace App\Http\Controllers;
Use App\Models\User;
Use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
// use Carbon;


use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public function deposit(){
        return view('deposit');
    }
    
    
    public function depositSave(Request $request){
    
    //auth()->user()->email;
    // auth()->user()->balance;
    // $balance = $balance+$amount;

    //$amount = $request->('amount');
    $amount =$request->amount; 
    $balance = auth()->user()->balance;
    

    DB::table('users')->where('user_id',Auth()->id())->update(['value'=> $balance]);
    $post = new transaction();
    $post->id = $request->id;
    $post->value = $request->value;
    $post->user_id = Auth()->id();
    $post->save();
    $balance = $balance+$post->value;
    return redirect()->back()->with('success','Amount has been credited');
}

    public function withdraw(){
        return view('withdraw');

    // $balance = db::table('users')
    // ->where('user_id', Auth()->id())
    // ->select(DB::raw("SUM(value) as value"))
    // ->first();

    //return view('withdraw', compact('user'));
        // return view('withdraw');
    }
    public function withdrawSave(Request $request){

        $amount = $request('amount');

        $balance = auth()->user()->balance;
        $balance = $balance-$post->value
    
        DB::table('users')->where('user_id',Auth()->id())->update(['value'=> $balance]);
        $post = new transaction();
        $post->id = $request->id;
        $post->value = $request->value;
        $post->user_id = Auth()->id();
        $post->save();
        return redirect()->back()->with('success','Amount has been debited');
    
    }
    public function transfer(){
        return view('transfer');
    }
    
  public function transfersave(Request $request)
  {
    $amount =$request->amount;
    $balance = db::table('users')
    ->where('user_id', Auth()->id())
    ->sum('value');

    // $this->validate($request, [
    //     'value' => "required|min:0|max:$balance",
    //     'rekening' => "required",
    //     'receiver' => "required",
    //   ]);
  
      $post = new transaction();
      $post->id = $request->id;
      $post->value = $request->value;
      $post->user_id = Auth()->id();
      $post->receiver = $request->receiver;
      $post->save();
    //   DB::beginTransaction();
    $balance = $balance-$post->value
  
        
  
        DB::table('users')->where('user_id',Auth()->id())->update(['value'=> $balance]);

        return redirect()->back()->with('success','Amount has been transferd');
      }


    // public function statement(){
    //     return view('statement');
    // }


}

