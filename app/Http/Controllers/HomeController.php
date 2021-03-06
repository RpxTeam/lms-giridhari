<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreDatacoursesRequest;
use App\Http\Requests\Admin\StoreDatatrailsRequest;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Datacourse;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = \App\User::latest()->limit(5)->get(); 
        $courses = \App\Course::latest()->limit(5)->get(); 
        $trails = \App\Trail::latest()->limit(5)->get(); 
        $faqquestions = \App\FaqQuestion::latest()->limit(5)->get();

        $generals = \App\General::get();

        return view('index', compact( 'users', 'courses', 'trails', 'faqquestions', 'generals' ));
    }

    public function speech()
    {

        return view('speech');
    }

    public function home()
    {
        
        $user = Auth::id();
        $users = \App\User::latest()->limit(5)->get(); 
        $courses = \App\Course::latest()->limit(5)->get(); 
        $trails = \App\Trail::latest()->limit(5)->get();

        $faqquestions = \App\FaqQuestion::latest()->limit(5)->get(); 
        $certificates = \App\Coursescertificate::latest()->get();
        $datacourses = \App\Datacourse::latest()->get(); 

        $mycourses = DB::table('courses')
            ->leftJoin('datacourses', 'courses.id', '=', 'datacourses.course_id')
            ->leftJoin('users', 'datacourses.user_id', '=', 'users.id')
         ->where('datacourses.user_id', '=',  $user)
         ->where('datacourses.view', '=',  '1')
        ->get();

        $mycertificates = DB::table('coursescertificates')
            ->leftJoin('datacourses', 'coursescertificates.id', '=', 'datacourses.certificate_id')
            ->whereNotNull('datacourses.certificate_id')
        ->get();

        // Testimonal

        $mycoursetestimonals = DB::table('datacourses')
            ->leftJoin('courses', 'datacourses.course_id', '=', 'courses.id')
        ->where('datacourses.user_id', '=', $user)
        ->where('datacourses.progress', '=', 100)
        ->where('datacourses.testimonal', '=', NULL)
        // ->whereNotNull('datacourses.certificate_id')
       ->get();

       $mytrailtestimonals = DB::table('datatrails')
            ->leftJoin('trails', 'datatrails.trail_id', '=', 'trails.id')
        ->where('datatrails.user_id', '=', $user)
        ->where('datatrails.progress', '=', 100)
        ->where('datatrails.testimonal', '=', NULL)
        // ->whereNotNull('datacourses.certificate_id')
       ->get();

       //dd($mycoursetestimonals);
        $generals = \App\General::get();

        return view('home', compact( 'users', 'courses', 'mycourses', 'trails', 'faqquestions', 'certificates', 'mycertificates', 'mycoursetestimonals','mytrailtestimonals', 'generals' ));
    }

    public function testimonal()
    {
        return redirect('admin/home');
    }

    public function savecoursefeedback(StoreDatacoursesRequest $request)
    {         
        DB::table('datacourses')
        ->where('datacourses.user_id','=', $request->user_id)
        ->where('datacourses.course_id','=', $request->course_id)
        ->update([
            'rating' => $request->rating,
            'testimonal' => $request->testimonal,
        ]);        
        
        return redirect('admin/home');
    }

    public function savetrailfeedback(StoreDatatrailsRequest $request)
    {         
        DB::table('datatrails')
        ->where('datatrails.user_id','=', $request->user_id)
        ->where('datatrails.trail_id','=', $request->trail_id)
        ->update([
            'rating' => $request->rating,
            'testimonal' => $request->testimonal,
        ]);        
        
        return redirect('admin/home');
    }
}