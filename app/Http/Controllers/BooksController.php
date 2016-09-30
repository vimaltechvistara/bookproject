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


class BooksController extends Controller
{
    protected $bookService;
//    public function __construct(UserService $userService)
    //{
    // $this->userService = $userService;
    //}


    public function CreateBooks()
    {
        $pid=Auth::user()->id;
        $classes = DB::table('class')->where('publisher_id',$pid)->get();
        $subjects = DB::table('subject')->where('publisher_id',$pid)->get();
        return view('create-book',compact('classes','subjects'));
    }

public function GetListofBooks()
{

    return view('list-book');

}
public function savebook(Request $request)
{
       $savebook=$request->all();
    $bookdetails= new Book();
    $bookdetails->book_title=$request->book_title;
    $bookdetails->ISBN=$request->isbn;
    $bookdetails->subject=$request->subject;
    $bookdetails->class=$request->class;
    $bookdetails->author=$request->author;
    $bookdetails->publisher=$request->publisher;
    $bookdetails->pages=$request->pages;
    $bookdetails->publishingdate=$request->publishing_date;
    $bookdetails->edition=$request->edition;
    $bookdetails->fileformat=$request->file_format;
    $image = $request->file('file');
    if (!is_null($image)) {
        $extension = $image->getClientOriginalExtension();
        $imageName = 'file' . time() . '.' . $extension;
        $image->move(base_path() . '/public/uploads/', $imageName);
        $imagePath = '/public/uploads/' . $imageName;
        $savebook['file']=$imagePath;
    } else {
        $savebook['file']="";
    }
    $photo = $request->file('cover_image');
    if (!is_null($photo)) {
        $extension = $photo->getClientOriginalExtension();
        $photoName = 'cover_image' . time() . '.' . $extension;
        $photo->move(base_path() . '/public/uploads/', $photoName);
        $photoPath = '/public/uploads/' . $photoName;
        $savebook['cover_image']=$photoPath;
    } else {
        $savebook['cover_image']="";
    }
    $bookdetails->book_file=$savebook['file'];
    $bookdetails->cover_image=$savebook['cover_image'];
    $bookdetails->save();
return redirect('booklists');
}

    /**
     * Dynamic Database Test (Test function)
     * @param
     * @return true
     * @author saritha
     */










}
