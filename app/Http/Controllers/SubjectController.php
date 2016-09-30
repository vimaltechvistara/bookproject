<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Book;
use App\Subject;

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


class SubjectController extends Controller
{
    protected $subjectService;
//    public function __construct(UserService $userService)
    //{
    // $this->userService = $userService;
    //}


    public function Createsubject()
    {
        return view('create-subject');
    }

public function GetListofsubjects()
{
    $subject=Subject::all();
    return view('list-subject',compact('subject'));

}

    public function savesubject(Request $request)
    {
        $subject = new Subject;
        $subject->publisher_id=Auth::user()->id;
        $subject->subject_name=$request['subject_name'];
        $subject->save();
    }


public function GetListforEditsubject($id)
{
    $user_id=Auth::user()->id;
    $subject=Subject::find($id)->where('publisher_id',$user_id)->get();
    return view('edit-subject',compact('subject','id'));
}

    public function updatesubject(Request $request,$id)
    {
        $user_id=Auth::user()->id;
        $subject=Subject::find($id)->where('publisher_id',$user_id)->first();
        $subject->subject_name=$request->subject_name;
        $subject->save();
        return redirect('subjectlists');
    }



    /**
     * Dynamic Database Test (Test function)
     * @param
     * @return true
     * @author saritha
     */










}
