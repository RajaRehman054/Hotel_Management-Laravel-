<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use App\Models\Form;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function index(){
    // $users = DB::select('select * from test'); 
    // foreach ($users as $user) { 
    //     echo $user->name."<br>"; 
    //     }
    // }
    
    // function index() {
    //      return view('home');
    // }

    // function register() {
    //     return view('register');
    // }

    // function login() {
    //     return view('login');
    // }
    
    // function match() {
    //     $uname = Request::input('username');
    //     $pass = Request::input('password');

    //     $loginData = DB::select('select password from users where username = ?', [$uname]); 
     
    //     if (count($loginData) > 0){
            
    //         foreach ($loginData as $tablepass) {

    //             if (($tablepass->password) == $pass){
    //                 return redirect('home');
    //             }
    //             else{
    //                 $error='Password does not match';
    //                 return view('login')->with('error',$error);
    //             }
    //         }
    //     }
    //     //return redirect('login');
    // }

    // function home() {
    //     $fishData = DB::select('select * from details');     
    //     return view('home', ["fishData"=>$fishData]);

    // }

    // function storeFish() {     
        
    //     $fishname = Request::input('fishname');
    //     $fishweight = Request::input('fishweight');
    //     $public = Request::input('public');

    //     if ($public == "yes")
	// 	    $decision="yes";
	//     else
	// 	    $decision="no";
	
    //     DB::insert('insert into details (name, weight, public,updatedtime) values (?, ?, ?,?)', [$fishname , $fishweight, $decision,null]);
    //     return redirect('home');
		
    // }

    // function viewFish() {
    //     $id= request('id'); //13
    //     $fishData = DB::select('select * from details where id = ?',[$id]);
           
    //     return view('edit', ["fishData"=>$fishData,'id'=>$id]);
    // }
    

    // function updateFish($id) {

    //     $fishweight = Request::input('fishweight');
    //     $public = Request::input('public');

    //     if ($public == "yes")
    //     $decision="yes";
    //     else
    //     $decision="no";

    //     date_default_timezone_set("Asia/Karachi");
    //     $dt = date("Y-m-d H:i:s");

    //     DB::update('update details set weight=?, public=?, updatedtime=? where id= ?', [$fishweight, $decision, $dt ,$id]);
    //     return redirect('home');
    // }

    // function deleteFish() {
    //     $id= request('id');
    //     DB::delete('delete from details where id= ?', [$id]);
    //     return redirect('home');
    // }
}

