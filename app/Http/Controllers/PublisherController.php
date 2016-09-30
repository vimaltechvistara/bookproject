<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Publisher;
use App\User;
use App\Role;

use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Treatin\Services\UserService;
use Auth;
use Mail;
use Exception;
use Log;
use Input;
use File;
use Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Config;
use Toastr;
use Illuminate\Support\Facades\Redirect;


class PublisherController extends Controller
{
    protected $publisherService;
//    public function __construct(UserService $userService)
    //{
    // $this->userService = $userService;
    //}


    public function CreatePublisher()
    {
        return view('create-publisher');
    }

    public function GetListofPublisher()
    {
        $pub=Publisher::all();
        return view('list-publisher',compact('pub'));
    }
public function getPublisher($id)
{
    $pub=Publisher::find($id);
    return view('edit-publisher',compact('pub','id'));

}

    public function getupdatePublisher(Request $request,$id)
    {
        $user_id=Auth::user()->id;
        $publisher=Publisher::find($id)->where('parent_id',$user_id)->first();
        $publisher->publisher_name = $request['publisher_name'];
        $publisher->address = $request['address'];
        $publisher->state = $request['state'];
        $publisher->city = $request['city'];
        $publisher->pincode = $request['pincode'];
        $publisher->phone = $request['phone'];
        $publisher->mobile = $request['mobile'];
        $publisher->email = $request['email'];
        $publisher->no_of_institution = $request['no_of_institution'];
        $publisher->save();
        return redirect('publisherlists');
    }


public function ShowPublisher($id)
{
    $pub=Publisher::find($id);
    return view('view-publisher',compact('pub'));

}


public function savepublisher(Request $request)
{
    $user = new User;
    $user->name=$request['publisher_name'];
    $user->email=$request['email'];
    $user->password=Hash::make($request['password']);
    $user->save();
    $request['publisher_id']=$user->id;
    $userRole = Role::find(3);
    if (!is_null($userRole))
    {
        $user->attachRole($userRole);
    }
    $publisher = new Publisher;
    $publisher->user_id=$request['publisher_id'];
    $publisher->parent_id=Auth::user()->id;
    $publisher->publisher_name = $request['publisher_name'];
    $publisher->address = $request['address'];
    $publisher->state = $request['state'];
    $publisher->city = $request['city'];
    $publisher->pincode = $request['pincode'];
    $publisher->phone = $request['phone'];
    $publisher->mobile = $request['mobile'];
    $publisher->email = $request['email'];
    $publisher->no_of_institution = $request['no_of_institution'];
   // $publisher->user_name = $request['user_name'];
    $publisher->password = $request['password'];
    $publisher->save();
    return redirect('publisherlists');
}

    /**
     * Dynamic Database Test (Test function)
     * @param
     * @return true
     * @author saritha
     */










}
