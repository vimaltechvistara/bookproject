<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Book;

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
use App\ClassInfo;

class ClassController extends Controller
{
    protected $classService;
//    public function __construct(UserService $userService)
    //{
    // $this->userService = $userService;
    //}


    public function Createclass()
    {
        return view('create-class');
    }

public function GetListofclasses()
{
    $class=ClassInfo::all();
    return view('list-class',compact('class'));
}

    public function saveclass(Request $request)
    {
        $class = new ClassInfo;
        $class->publisher_id=Auth::user()->id;
        $class->class_name=$request['class_name'];
        $class->save();
        return redirect('classlists');

    }



public function GetListforEditclass($id)
{
    $user_id=Auth::user()->id;
    $class=ClassInfo::find($id)->where('publisher_id','=',$user_id)->get();
    return view('edit-class',compact('class','id'));
}
    /**
     * Dynamic Database Test (Test function)
     * @param
     * @return true
     * @author saritha
     */



    public function updateclass(Request $request,$id)
    {
        $user_id=Auth::user()->id;
        $class=ClassInfo::find($id)->where('publisher_id',$user_id)->first();
        $class->class_name=$request->class_name;
        $class->save();
        return redirect('classlists');

    }







}
