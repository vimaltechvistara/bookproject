<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\User;
use App\Student;
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


class StudentController extends Controller
{
    protected $subjectService;
//    public function __construct(UserService $userService)
    //{
    // $this->userService = $userService;
    //}


    public function createstudent()
    {
        return view('create-student');
    }


public function savestudent(Request $request)
{
    $user = new User;
    $user->name=$request['user_name'];
    $user->email=$request['user_name'];
    $user->password=Hash::make($request['password']);
    $user->save();
    $userRole = Role::find(5);
    if (!is_null($userRole))
    {
        $user->attachRole($userRole);
    }
    $student = new Student;
    $student->parent_id=Auth::user()->id;
    $student->student_name=$request['name_of_student'];
    $student->save();
    return redirect('studentlists');
}


public function GetListofstudents()
{
    $student=Student::all();
    return view('list-student',compact('student'));
}
public function GetViewforstudent($id)
{
    $user_id=Auth::user()->id;
    $student=Student::find($id)->where('parent_id',$user_id)->get();
    return view('student-view',compact('student','id'));

}

    public function GetListforeditstudent($id)
    {
        $user_id=Auth::user()->id;
        $student=Student::find($id)->where('parent_id',$user_id)->get();
        return view('edit-student',compact('student','id'));
    }

    public function updatestudent(Request $request,$id)
    {
        $user_id=Auth::user()->id;
        $student=Student::find($id)->where('parent_id',$user_id)->first();
        $student->student_name=$request['student_name'];
        $student->save();
        return redirect('studentlists');
    }


    /**
     * Dynamic Database Test (Test function)
     * @param
     * @return true
     * @author saritha
     */










}
