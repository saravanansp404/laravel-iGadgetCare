<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\StudInsert;
use Illuminate\Support\Facades\Auth;
use App\Models\news;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use app\Models\member;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon; 


use  Illuminate\Support\Facades\Mail; 


use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public static  function name(){
        // $usersCount=DB::table("users")->count();
        // return $usersCount;
        $users = DB::select("SELECT COUNT(is_admin) FROM `users` WHERE is_admin='0' ");
        return  $users;
     }
     public function dashboard()
     {
         if(Auth::check()){
             return view('dashboard');
         }
   
         return redirect("/admin")->withSuccess('You are not allowed to access');
     }
     public function logout()
     {
         if(session()->has('user'))
         {
             session()->pull('user');
             return redirect('/admin');
         }
     }
     public function contactinsert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $moblie = $request->input('moblie');
        $message = $request->input('message');
        $data=array('name'=>$name,"email"=>$email,"moblie"=>$moblie,"message"=>$message);
        DB::table('contact')->insert($data);
        $msg=$request->session()->flash('alert-success', 'Thank you for contacting us !');
        return redirect('/contact');
        }
        public function indextable(){
            if(Auth::user()->is_admin == 1){

            $news = DB::select('select * from contact');
            return view('admin.table',['news'=>$news]);
            }
        }
        public function newstabledelete($id){
            DB::delete('delete from contact where id = ?',[$id]);
            return back()->with('delete','data daleted !');
    
        }
        public function address(Request $request,$id) {
            $address = $request->input('address');
            $data=array("userid"=>$id,'address'=>$address);

             DB::table('address')->insert($data);
            return back()->with('save','data Saved !');
        }

         public static function useraddress( $id){
            $users = DB::select("SELECT * FROM `address` WHERE  userid='$id' ");
         
            return  $users;   
        }
        public function bookrepair(){
            if(Auth::check()){
                return view('bookrepair');
            }
      
            return redirect("/")->withSuccess('You are not allowed to access');
        }
        public function moblibooking(Request $request){
            $userid = $request->input('userid');
            $bookid = $request->input('bookid');
             $address = $request->input('address');
        $mobliebrand = $request->input('mobliebrand');
        $moblieproble = $request->input('moblieproble');
        $moblieproblemother = $request->input('moblieproblemother');
        $message = $request->input('message');
        $data=array('booktoken'=>$bookid,'id'=>$userid,"address_id"=>$address,"mobliebrand"=>$mobliebrand,"moblieproblem"=>$moblieproble,"otherproble"=>$moblieproblemother,"status"=>'',"worker"=>'');
        DB::table('booking')->insert($data);
        $msg=$request->session()->flash('alert-success',  $bookid );
        return back()->with('save','data Saved !');

        }
        public function tacking(){
            if(Auth::check()){
                return view('tackworkingstatus');
            }
      
            return redirect("/")->withSuccess('You are not allowed to access');
        }
        public static function mobliestatus( $id){
            $users = DB::select("SELECT * FROM `booking` WHERE id='$id' ORDER BY `booking`.`date` DESC ");
         
            return  $users;   
        }
        public function addproblem(){
            if(Auth::user()->is_admin == 1){
                $news = DB::select('select * from moblieproble');
            return view('admin.problem',['news'=>$news]);
                
            }
      
            return redirect("/")->withSuccess('You are not allowed to access');
        }
        public function problemdelete($id){
            DB::delete('delete from moblieproble where id = ?',[$id]);
            return back()->with('delete','data daleted !');
    
        }
        public function addproblems(Request $request){
            $problem = $request->input('problem');
            $data=array('problemtype'=>$problem);
            DB::table('moblieproble')->insert($data);
            $msg=$request->session()->flash('alert-success' );
            return back()->with('save','data Saved !');

        }
        public static function moblieproble(){

            if(Auth::check()){
                $problem = DB::select("SELECT * FROM `moblieproble` ");
         
                return  $problem; 
                
            }
            
        }
        public function booking(){
            if(Auth::user()->is_admin == 1){
                $news = DB::select('SELECT * from  users INNER join  booking  ON users.id=booking.id INNER join address on  booking.id=address.id  
ORDER BY `booking`.`booking_id`  DESC');
            return view('admin.Booking',['news'=>$news]);
                
            }

        }
        public function statusupdate(Request $request) {
            $id = $request->input('id');
            $md_date = $request->input('md_date');
            $workingperson = $request->input('workingperson');
            $status = $request->input('status');
            DB::update('update booking set status = ?,worker = ?,md_date = ? where booking_id = ?',[$status,$workingperson,$md_date,$id]);
            $msg=$request->session()->flash('alert-success' ,"data was successfully saved");
            return back()->with('save','data Saved !');
        }
        public function bookingdelete(Request $request) {
            $id = $request->input('did');
          
            DB::delete('delete from booking where booking_id = ?',[$id]);
            $msg=$request->session()->flash('alert-danger',"data was successfully Deleted");
            return back()->with('save','data Saved !');
        }
        public static function statustracking(Request $request){
            $bookingid = $request->input('search');
            $posts = DB::select("SELECT status FROM `booking` WHERE booktoken='$bookingid' ");

            
            $msg=$request->session()->flash('alert-success',"hi");

          
            return view('pages.track', compact('posts'));
        }
        public static function todaybook(){
           $date= date("Y-m-d");
            $todaybook = DB::select("SELECT COUNT(booktoken) as count FROM `booking` WHERE date='$date' ");
            return  $todaybook;
        }
        public static function toreg(){
            $date= date("Y-m-d");
             $toreg = DB::select("SELECT COUNT(id) as toreg FROM `users` WHERE is_admin='0' and cr_date='$date' ");
             return  $toreg;
         }
         public static function totalbooking(){
           
             $totalbooking = DB::select("SELECT COUNT(booktoken) as totalbook FROM `booking` ");
             return  $totalbooking;
         }
         public static function totalreg(){
           
            $totalreg = DB::select("SELECT COUNT(id) as totalreg  FROM `users` WHERE is_admin='0'");
            return  $totalreg;
        }
        public static function todelivered(){
            $date= date("Y-m-d");
            $todelivered = DB::select("SELECT COUNT(booktoken) as todelivered FROM `booking` WHERE status='delivered' AND md_date='$date'");
            return  $todelivered;
        }
        public static function totaldelivered(){
           
            $totaldelivered = DB::select("SELECT COUNT(booktoken) as totaldelivered FROM `booking` WHERE status='delivered'  ");
            return  $totaldelivered;
        }
        public static function toPending(){
            $date= date("Y-m-d");
            $toPending = DB::select("SELECT COUNT(status) as toPending FROM `booking` WHERE status in ('waiting for service','in process','completed','') and date='$date'");
            return  $toPending;
        }

        public function book(){
            if(Auth::check()){
                return view('bookrepair');
            }else{
                return view('pages.book');
            }
      
            
        }
}
