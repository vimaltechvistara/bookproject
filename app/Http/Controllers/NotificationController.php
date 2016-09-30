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


class NotificationController extends Controller
{
    protected $notificationService;
//    public function __construct(UserService $userService)
    //{
    // $this->userService = $userService;
    //}


    public function Createnotifications()
    {
        return view('create-notification');
    }

    public function GetListofnotifications()
    {

        return view('list-notification');

    }
    /**
     * Dynamic Database Test (Test function)
     * @param
     * @return true
     * @author saritha
     */










}
