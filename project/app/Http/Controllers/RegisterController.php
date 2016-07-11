<?php 
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\user;
use Illuminate\Support\Facades\Request;
//use Request;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Input;
use Validator;
use Redirect;
use Session;
class RegisterController extends Controller {

public function Updateuser()
{
 $newdata=Request::all();
 $i=$newdata['id'];
 $user = User::find($i);

if (Input::hasFile('image')) { $image=Input::file('image');
$fileName=time() . '.' . $image->getClientOriginalExtension();
$destinationPath='./uploads';
 $i=Input::file('image')->move($destinationPath, $fileName); 
}


$user->name = $newdata['name'];
$user->email = $newdata['email'];
$user->country = $newdata['country'];
$user->state = $newdata['state'];
$user->city = $newdata['city'];
 $user->pincode = $newdata['pincode'];
$user->contact = $newdata['contact'];
if (Input::hasFile('image')) {
$user->image = $fileName;
}

$user->save();
 return $this->index();
}
  public function Edituser($id)
{
  $id=base64_decode($id);
  $res=User::find($id);
  return View('edituser')->with('data',$res);
 // print_r($res);
 //echo "edit user $id";exit;
}

  public function Login()
{
 $user=Request::all();

   $v=\Validator::make(Request::all(),
   [
   'email'=>'required',
   'password'=>'required',
   ]);
  
   if($v->fails())
     {
       return redirect()->back()->withErrors($v->errors());
     }
   else
    {
    $mailid=$_POST['email'];
   $pwd=md5($_POST['password']);
   $i=DB::table('user')->where('email', '=', $mailid)->where('password', '=', $pwd)->get();
   if(count($i)>0)
       {
    foreach($i as $ad)
         {
  $userid=$ad->id;
  Session::put('userid', $userid);
         }
          $udata=User::find($userid);
          return view('myaccount')->with('data',$udata);
      }
   }
}
public function adminlogin()
{
  $admin =Request::all();
   $v=\Validator::make(Request::all(),
   [
   'email'=>'required',
   'password'=>'required',
   ]);
  
   if($v->fails())
   {
       return redirect()->back()->withErrors($v->errors());
   }
   else
   {
   $mailid=$_POST['email'];
   $pwd=md5($_POST['password']);

   //User::create($users);
   
   $i=DB::table('Admin')->where('email', '=', $mailid)->where('password', '=', $pwd)->get();
   //echo count($i);exit;
  // print_r($i);

   if(count($i)>0)
   {
    foreach($i as $ad)
{
  $adminid=$ad->id;
  Session::put('adminid', $adminid);
}
return  redirect('data');
   }
   else
   {
   
    // return Redirect::to('/admin')->with('message', 'invalid email or password');
     return redirect()->back()->withErrors($v->errors());
   }
   
}

}

public function chngpwd()
{
    $users =Request::all();
    //print_r($users);exit;

$v=\Validator::make(Request::all(),
   [
   'password'=>'required',
   'new password'=>'required',
   'confirm password'=>'required',
   ]);
  if($v->fails())
   {
       return redirect()->back()->withErrors($v->errors());
   }
   else
   {

   }

}

  public function Deleteuser($id)
{
  //echo $id;exit;
  /*Another process
  $user = User::find(1);
$user->delete();

  */
  $id=base64_decode($id);
  User::where('id',$id)->delete();
  return $this->index();
   //echo "delete user $id";exit;
}

public function delete()
{
  $deletedRows = User::where('age', 0)->delete();
  return $this->index();

}

public function Logout()
{
  //Auth::logout();
Session::flush();
return redirect('admin');
}
public function userLogout()
{
  //Auth::logout();
Session::flush();
return redirect('');
}
public function index()
{
   //$data=User::all();
   //$data['pagi'] = User::paginate(2);
  //return View::make('detail')->with('data', $data);

if(Session::get('adminid'))
{
 $data=DB::table('user')->paginate(5);
 return view('detail')->with('data',$data);
}
else
{
  return  redirect('admin');
}
      
}
    public function User()
    { 

   $users =Request::all();
   //print_r($users);exit;
   $v=\Validator::make(Request::all(),
   [
   'name'=>'required',
   'email'=>'required',
   'password'=>'required',
   'country'=>'required',
   'state'=>'required',
   'city'=>'required',
    'contact'=>'required',
    'pincode'=>'required',
    'image'=>'required | mimes:jpeg,bmp,png',
   ]);
  
   if($v->fails())
   {
    //echo "hi";exit;
       return redirect()->back()->withErrors($v->errors());
   }
   else
   {
   	//print_r($users);exit;
//echo "hello";exit;
if (Input::hasFile('image')) { $image=Input::file('image');
$fileName=time() . '.' . $image->getClientOriginalExtension();
//echo $s;exit;
$destinationPath='./uploads';
 Input::file('image')->move($destinationPath, $fileName); 
}
    $data=array(
    'name'=>$_POST['name'],
    'email'=>$_POST['email'],
    'password'=>md5($_POST['password']),
    'contact'=>$_POST['contact'],
    'city'=>$_POST['city'],
    'state'=>$_POST['state'],
    'pincode'=>$_POST['pincode'],
    'country'=>$_POST['country'],
   'image'=>$fileName,
      );
   
   $i=DB::table('user')->insert($data);
   if($i>0)
   {
Session::flash('message','Registeration Successfully Completed');
return  redirect('logintemp');
   }
   
}
    }


    
public function myacntupdate()
    { 

   $users =Request::all();
   print_r($users);exit;
   $v=\Validator::make(Request::all(),
   [
   'name'=>'required',
   'email'=>'required',
   'password'=>'required',
   'age'=>'required',
   'country'=>'required',
   'state'=>'required',
   'city'=>'required',
    'contact'=>'required',
    'pincode'=>'required',
    'image'=>'required | mimes:jpeg,bmp,png',
   ]);
  
   if($v->fails())
   {
    //echo "hi";exit;
       return redirect()->back()->withErrors($v->errors());
   }
   else
   {
//echo "hello";exit;
if (Input::hasFile('image')) { $image=Input::file('image');
$fileName=time() . '.' . $image->getClientOriginalExtension();
//echo $s;exit;
$destinationPath='./uploads';
 Input::file('image')->move($destinationPath, $fileName); 
}
    $data=array(
    'name'=>$_POST['name'],
    'email'=>$_POST['email'],
    'password'=>md5($_POST['password']),
    'age'=>$_POST['age'],
    'country'=>$_POST['country'],
   'state'=>$_POST['state'],
   'city'=>$_POST['city'],
    'contact'=>$_POST['contact'],
    'pincode'=>$_POST['pincode'],
   'image'=>$fileName,
      );
   
   $i=DB::table('user')->insert($data);
   if($i>0)
   {
Session::flash('message','Registeration Successfully Completed');
return  redirect('logintemp');
   }
   
}
    }


}
?>