<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    function login(Request $req){
        $uname = $req->input('uname');
        $pass = $req->input('psw');

        $loginData = DB::select('select password from admin where username = ?', [$uname]); 
     
        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

                if (($tablepass->password) == $pass){
                    return redirect('admin');
                }
                else{
                    $error='Password does not match';
                    return view('adminlogin')->with('error',$error);
                }
            }
        }

        else{
            $error='Username not Found.';
            return view('adminlogin')->with('error',$error);
        }
    }

    function notification(Request $req) {     
        
        $type = $req->input('type');
        $date = $req->input('date');
        $text = $req->input('text');
	
        DB::insert('insert into notification(type,date,description) values (?, ?, ?)', [$type , $date, $text]); 
        $Arr['Data'] = DB::table('users')->get();
        return view('admin',$Arr);
		
    }

    function addRooms(Request $req){
    
        $type=$req->post('type');

        if ( $type == 'single' ){
            $price=5000;
        }
        else if ( $type == 'double' ){
            $price=7000;
        }
        else{
            $price=10000;
        }

        $floor=$req->post('floor');
        DB::insert('insert into rooms(type,price,floor,u_id) values (?, ?,?,?)', [$type , $price , $floor,0]);
    
    }

    function addUsers(Request $req){

        $fname=$req->post('fname');
        $lname=$req->post('lname');
        $cnumber=$req->post('cnumber');
        $email=$req->post('email');
        $password=$req->post('password');
        $uname=$req->post('uname');

        $name = $fname.$lname;
        
        DB::insert('insert into users(name, email, contact,username,password) values (?, ?, ?,?,?)', [$name , $email, $cnumber,$uname,$password]);
    }

    function viewUsers(Request $req){

        $Arr['Data'] = DB::table('users')->get();
        return view('admin',$Arr);
    }

    function fetchUsers(){

        $user =  DB::table('users')->get();
        return response()->json([
            'user'=>$user,
        ]);
        
    }

    public function delUser($id){
        DB::table('users')->where('id', $id)->delete();
    }

    public function editUser($id){
        $user = DB::table('users')->where('id', $id)->get();
        return response()->json([
            'user'=>$user,
        ]);
    }

    public function updateUser(Request $req,$id){
        $name = $req->input('name');
        $email = $req->input('email');
        $pswd = $req->input('password');
        $uname = $req->input('username');
        $contact = $req->input('contact');
        DB::update('update users set name=?, email=?, password=?, username=?, contact=? where id= ?', [$name, $email, $pswd ,$uname, $contact,$id]);
        return response()->json([
            'user'=>"Successfully Updated Student",
        ]);
    }

    
    function fetchRooms(){

        $user =  DB::table('rooms')->get();
        return response()->json([
            'user'=>$user,
        ]);
        
    }

    public function delRoom($id){
        DB::table('rooms')->where('id', $id)->delete();
    }

    public function editRoom($id){
        $user = DB::table('rooms')->where('id', $id)->get();
        return response()->json([
            'user'=>$user,
        ]);
    }

    public function updateRoom(Request $req,$id){
        $type = $req->input('type');
        $floor = $req->input('floor');
        $price = $req->input('price');
        DB::update('update rooms set type=?, floor=?, price=? where id= ?', [$type, $floor, $price, $id]);
        return response()->json([
            'user'=>"Successfully Updated Student",
        ]);
    }

    
}

