<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCoursesRequest;
use App\Http\Requests\Admin\UpdateCoursesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CoursesController extends Controller
{
    use FileUploadTrait;    


    public function index()
    {
        $courses = Course::latest()->get();
        return view('courses', compact('course', 'datacourses', 'trails'));
    }

    public function show($id)
    {
               
        $instructors = \App\User::get()->pluck('name', 'id');       

        $lessons = \App\Lesson::get()->pluck('title', 'id');

        $categories = \App\Coursecategory::get()->pluck('title', 'id');
        $datacourses = \App\Datacourse::where('course_id', $id)->get();$trails = \App\Trail::whereHas('courses',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $course = Course::findOrFail($id);

        return view('courses', compact('course', 'datacourses', 'trails'));
    }
 
    public function start($id)
    {   

        if (! Gate::allows('course_access')) {
            return redirect('login');
        }

        $course = Course::findOrFail($id);

        $test = \App\Datacourse::create([
            'user_id' => Auth::id(),
            'course_id' => $course->id,
            'view' => '1',
            // 'progress' => '0',
        ]);

        // return redirect()->route('results.show', [$test->id]);
        return view('oncourse', compact('course', 'datacourses', 'trails'));
    }

}