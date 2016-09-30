<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Book;
use App\User;
use App\Role;
use App\Institution;
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


class InstituteController extends Controller
{
    protected $subjectService;
//    public function __construct(UserService $userService)
    //{
    // $this->userService = $userService;
    //}


    public function CreateInstitute()
    {
        return view('create-institute');
    }


public function saveinstitution(Request $request)
{
    $user = new User;
    $user->name=$request['user_name'];
    $user->email=$request['email'];
    $user->password=Hash::make($request['password']);
    $user->save();
    $userRole = Role::find(4);
    if (!is_null($userRole))
    {
        $user->attachRole($userRole);
    }
    $institution = new Institution;
    $institution->publisher_id=Auth::user()->id;
    $institution->name_of_insitutions=$request['name_of_insitutions'];
    $institution->address=$request['address'];
    $institution->state=$request['state'];
    $institution->city=$request['city'];
    $institution->phone=$request['phone'];
    $institution->pin=$request['pin'];
    $institution->mobile=$request['mobile'];
    $institution->email=$request['email'];
    $institution->number_of_students=$request['number_of_students'];
    $institution->user_name=$request['user_name'];
    $institution->password=Hash::make($request['password']);
    $institution->save();
    return redirect('institutelists');
}


public function GetListofInstitutes()
{
    $institute=Institution::all();
    return view('list-institute',compact('institute'));
}

public function GetListforeditinstitution($id)
{
    $user_id=Auth::user()->id;
    $institute=Institution::find($id)->where('publisher_id',$user_id)->get();
    return view('edit-institution',compact('institute','id'));
}


    public function updateinstitution(Request $request,$id)
    {
        $user_id=Auth::user()->id;
        $institution=Institution::find($id)->where('publisher_id',$user_id)->first();
        $institution->name_of_insitutions=$request['name_of_insitutions'];
        $institution->address=$request['address'];
        $institution->state=$request['state'];
        $institution->city=$request['city'];
        $institution->phone=$request['phone'];
        $institution->pin=$request['pin'];
        $institution->mobile=$request['mobile'];
        $institution->email=$request['email'];
        $institution->number_of_students=$request['number_of_students'];
        $institution->user_name=$request['user_name'];
        $institution->save();
        return redirect('institutelists');

    }
public function GetViewforinstitution($id)
{
    $user_id=Auth::user()->id;
    $institute=Institution::find($id)->where('publisher_id',$user_id)->get();
    return view('institute-view',compact('institute','id'));


}


    public function AssignInstituteBook()
    {
        return view('assign-institute-books');
    }

    public function GetListofAssignedInstituteBooklists()
    {

        return view('list-assigned-institute-books');

    }


    /**
     * Dynamic Database Test (Test function)
     * @param
     * @return true
     * @author saritha
     */










}
