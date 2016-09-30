<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Exception;
use Log;
use Input;
use File;
use Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    protected $userService;
//    public function __construct(UserService $userService)
    //{
    // $this->userService = $userService;
    //}

    public function Dashboard()
    {
        return view('index');
    }
    public function dologin(Request $reglogin)
    {
        $login = $reglogin->all();
        try
        {
            $userdata = array(
                'email' => $login['email'],
                'password' => $login['password']
            );

            if(Auth::attempt($userdata)){
                if(Auth::user()->hasRole('admin'))
                {
                    $DisplayName=Session::put('DisplayName', ucfirst(Auth::user()->name));
                    $AuthDisplayName=Session::put('AuthDisplayName', ucfirst(Auth::user()->name));
                    $AuthDisplayName=Session::put('AuthDisplayPhoto', "no-image.jpg");
                    return redirect('dashboard');
                }
                else if(Auth::user()->hasRole('manager'))
                {
                    $DisplayName=Session::put('DisplayName', ucfirst(Auth::user()->name));
                    $AuthDisplayName=Session::put('AuthDisplayName', ucfirst(Auth::user()->name));
                    $AuthDisplayName=Session::put('AuthDisplayPhoto', "no-image.jpg");
                    return redirect('dashboard');
                }
                else if(Auth::user()->hasRole('publisher'))
                {
                    $DisplayName=Session::put('DisplayName', ucfirst(Auth::user()->name));
                    $AuthDisplayName=Session::put('AuthDisplayName', ucfirst(Auth::user()->name));
                    $AuthDisplayName=Session::put('AuthDisplayPhoto', "no-image.jpg");
                    return redirect('dashboard');
                }

                else if(Auth::user()->hasRole('school'))
                {
                    $DisplayName=Session::put('DisplayName', ucfirst(Auth::user()->name));
                    $AuthDisplayName=Session::put('AuthDisplayName', ucfirst(Auth::user()->name));
                    $AuthDisplayName=Session::put('AuthDisplayPhoto', "no-image.jpg");
                    return redirect('dashboard');
                }

                else
                {
                    $msg="Login Details Incorrect! Try Again.";
                    return redirect('/')->with('message',$msg);
                }
            }
            else
            {
                dd("fgh");
                $msg="Login Details Incorrect! Try Again.";
                return $msg;
            }
        }

        catch (HospitalUserException $userExc) {
           // $errorMsg = $userExc->getMessageForCode();
           // $msg = AppendMessage::appendMessage($userExc);
            //Log::error($msg);
            //return redirect('exception')->with('message',$errorMsg." ".trans('messages.SupportTeam'));
            /*return Response::json(array(
                        'success' => false,
                        'data' => $errorMsg), '200'
            );*/
        } catch (Exception $ex) {
            //throw $ex;
            //$msg = AppendMessage::appendGeneralException($ex);
           // Log::error($msg);
            //return redirect('exception')->with('message',trans('messages.SupportTeam'));
        }
        // return $login;
    }


}
