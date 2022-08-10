<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    function addUser(Request $req) {     
        
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $cnumber = $req->input('cnumber');
        $uname = $req->input('uname');
        $pswd = $req->input('pswd');
        $email = $req->input('email');
        
        $name = $fname.$lname;

        $loginData = DB::select('select username from users where username = ?', [$uname]); 

        if (count($loginData) > 0){
            
                $error='Username already exists.
                ';
                return view('signup')->with('error',$error);

            }
	
        DB::insert('insert into users(name, email, contact,username,password) values (?, ?, ?,?,?)', [$name , $email, $cnumber,$uname,$pswd]);
        return redirect('/');
		
    }


    function login(Request $req){
        $uname = $req->input('uname');
        $pass = $req->input('psw');

        $loginData = DB::select('select password from users where username = ?', [$uname]); 
     
        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

                if (($tablepass->password) == $pass){
                    $psw= $req->input('psw');
                    $req->session()->put('data',$req->input()); 
                    $customer = DB::select('select * from users where username = ?',[$uname]);
                    $notifications = DB::select('select * from notification ');
                    return view('customer',["customer"=>$customer,"notifications"=>$notifications]);
                }
                else{
                    $error='Password does not match';
                    return view('login')->with('error',$error);
                }
            }
        }

        else{
            $error='Username not Found.';
            return view('login')->with('error',$error);
        }
    }

    function feedback(Request $request) {     
        
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $cnumber = $request->input('cnumber');
        $email = $request->input('email');
        $text = $request->input('text');
        
        $name = $fname.$lname;
	
        DB::insert('insert into feedback(name, email, cnumber,description) values (?, ?, ?,?)', [$name , $email, $cnumber,$text]); 
        $customer = DB::select('select * from feedback');
        return view('home', ["customer"=>$customer]);
		
    }

    function addLaundary(Request $req,$id){

        $item=$req->post('item');
        $quant=$req->post('quantity');

        if($item == "shirt" || $item== "pants"){
            $price= 100*$quant;
        }
        else if($item == "coat" ){
            $price=200*$quant;
        }
        else{
            $price=250*$quant;
        }
        
        DB::insert('insert into laundary(type, quantity, price,u_id) values (?, ?, ?,?)', [$item , $quant, $price,$id]);
    }

    function addDinner(Request $req,$id){

        $type=$req->post('type');

        if($type == "chicken biryani"){
            $price= 500;
        }
        else if($type == "Mutton karai" ){
            $price=1500;
        }
        else{
            $price=2000;
        }
        
        DB::insert('insert into food(type,price,u_id) values (?, ?, ?)', [$type , $price,$id]);
    }

    function addBreak(Request $req,$id){

        $type=$req->post('type');

        if($type == "egg,toast,juice"){
            $price= 500;
        }
        else if($type == "pancakes,butter,juice" ){
            $price=600;
        }
        else{
            $price=700;
        }
        
        DB::insert('insert into food(type,price,u_id) values (?, ?, ?)', [$type , $price,$id]);
    }

    function addLunch(Request $req,$id){

        $type=$req->post('type');

        if($type == "chicken tikka , Naan"){
            $price= 900;
        }
        else if($type == "Mutton palao" ){
            $price=1000;
        }
        else{
            $price=2000;
        }
        
        DB::insert('insert into food(type,price,u_id) values (?, ?, ?)', [$type , $price,$id]);
    }

    function bookRoom(Request $req,$id){

        $type=$req->post('roomv');

        $room = DB::select('select * from rooms where type = ? and u_id= ? ', [$type,0]);

        if (count($room) > 0){
    
            DB::update('update rooms set u_id=? where id= ?', [$id, $room[0]->id]);
            $res = DB::select('select * from rooms where id = ? and u_id= ? ', [$room[0]->id,$id]);
            return response()->json([
                'user'=>$res,
            ]);

        } 
        else{
            return response()->json([
                'user'=>"No available rooms in this category.",
            ]);
        }     
        
    }

    function addMisc(Request $req,$id){

        $type=$req->post('item');

        $room = DB::select('select id from rooms where u_id = ? ', [$id]);

        if (count($room) > 0){

            if($type == "Tv"){
                $price= 1000;
            }
            else if($type == "Wifi" ){
                $price=1500;
            }
            else if($type == "Ac" ){
                $price=2000;
            }
            else{
                $price=1500;
            }
            DB::insert('insert into misc(type,price,u_id) values (?, ?, ?)', [$type , $price,$id]);
        } 

        else{
            return response()->json([
                'user'=>"Please book a room first.",
            ]);
        }      
        
    }

    function getBill(Request $req,$id) {    

       $l_bill=DB::select('select Sum(price) as value from laundary where u_id = ?', [$id]);
       $r_bill=DB::select('select Sum(price) as value from rooms where u_id = ?', [$id]);
       $f_bill=DB::select('select Sum(price) as value from food where u_id = ?', [$id]);
       $m_bill=DB::select('select Sum(price) as value from misc where u_id = ?', [$id]);
       

       $total = $l_bill[0]->value + $r_bill[0]->value + $f_bill[0]->value + $m_bill[0]->value;

       if($f_bill[0]->value==NULL){
            $f_bill[0]->value = 0;
       }
       if($r_bill[0]->value==NULL){
            $r_bill[0]->value = 0;
        }
       if($m_bill[0]->value==NULL){
            $m_bill[0]->value = 0;
        }
        if($l_bill[0]->value==NULL){
            $l_bill[0]->value = 0;
        }
        if($total==NULL){
            $total= 0;
        }

        $user_new = DB::select('select * from price where u_id = ? ', [$id]);

        if( $total != 0 ){

            if( count($user_new) != 0 ){

                DB::update('update price set laund_bill=? , food_bill=?, misc_bill=? , room_bill=? ,total=? where u_id= ?', [$l_bill[0]->value,$f_bill[0]->value,$m_bill[0]->value,$r_bill[0]->value,$total,$id]);

            }

            else{

            DB::insert('insert into price (laund_bill,u_id,food_bill,misc_bill,room_bill,total) values (?, ?, ?, ?, ?,?)', [$l_bill[0]->value,$id,$f_bill[0]->value,$m_bill[0]->value,$r_bill[0]->value,$total]);

            }

    }
        $user = DB::select('select * from price where u_id = ? ', [$id]);
        return response()->json([
            'user'=>$user,
        ]);    
		
    }

    function payment(Request $req,$id){

        DB::table('laundary')->where('u_id', $id)->delete();
        DB::table('misc')->where('u_id', $id)->delete();
        DB::table('price')->where('u_id', $id)->delete();
        DB::table('food')->where('u_id', $id)->delete();
        DB::update('update rooms set u_id=? where u_id= ?', [0,$id]);    
        return response()->json([
            'user'=>'Deleted.',
        ]);
        
    }

}
