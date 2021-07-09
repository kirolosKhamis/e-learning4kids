<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Classroom;
use App\Models\Comments;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\ParentModel;
use App\Models\StudentAssignment;
use App\Models\StudentRegisteration;
use App\Models\StudentPost;
use App\Models\Teacher;
use App\Models\TeacherAssignment;
use App\Models\TeacherPost;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class ClassroomContent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $studentregs = StudentRegisteration::latest()->paginate(100);
        $classrooms = Classroom::latest()->paginate(100);
        return view('Frontend.student', compact('studentregs','classrooms',))
             ->with('i', (request()->input('page', 1) - 1) * 100);          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    
        $classrooms = Classroom::latest()->paginate(100);
        $code=$request->input('classcode');
        foreach($classrooms as $classroom){ 
            if($classroom->classroom_code==$code)
            break;
        }
        $studentreg = StudentRegisteration::create(['student_id' => $request->input('student_id'),
        'classroom_id' => $classroom->classroom_id,]);

        return redirect()->route('contents.index')
        ->with('success', 'Product created successfully.');
             
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentRegisteration  $StudentRegisteration
     * @return \Illuminate\Http\Response
     */
    public function edit(request $studentreg)
    { 
       // dd($studentreg->id);
    
       
        // return view('Frontend.editResult', compact('studentreg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentRegisteration  $StudentRegisteration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentRegisteration $studentreg)
    {

        
           
        // $request->validate([
        //     'mid_term' => 'required',
        //     'final' => 'required',
            
        // ]);
        //         $studentreg->update($request->all());
       
        // return redirect()->route('add.result',$studentreg->classroom_id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }

    // protected function open(Request $request)
    // {     
    //     $id=$request->input('classroom_id');
    //     $studentregs = StudentRegisteration::latest()->paginate(100);
    //     $classrooms = Classroom::latest()->paginate(100);
    //     $studentposts = StudentPost::latest()->paginate(100);
    //     $teacherposts = TeacherPost::latest()->paginate(100);
    //     $students=Student::latest()->paginate(100);
    //     $teachers=Teacher::latest()->paginate(100);
    //     return view('Frontend.student-classroom', compact('studentregs','classrooms','id','studentposts','students','teachers','teacherposts'))
    //          ->with('i', (request()->input('page', 1) - 1) * 100);
    // }

   protected function post(Request $request)
    {

        $request->validate([
            'post' => 'required'
        ]);
// dd($request->all());
        
if( $file=$request->file('file'))
    {


        // dd( $request->all());

        $name=$file->getClientOriginalName();

        $file->move('materials',$name);

        StudentPost::create([ 
            'post' => $request->input('post'),
            'student_id' => $request->input('student_id'),
            'teacher_id' => $request->input('teacher_id'),
            'classroom_id' => $request->input('classroom_id'),
            'content' => $name
            ]);}


            else
            StudentPost::create($request->all());

        // return asset('wwe');

        //dd($request->all());

        return redirect()->route('show.classroom', ['classroom_id' => $request->input('classroom_id')]);

    }

    public function comment(Request $request)
    {

// dd($request->all());
        $request->validate([
            'comments' => 'required'
        ]);
// dd($request->all());
        
if( $file=$request->file('file'))
    {
        // dd( $request->all());

        $name=$file->getClientOriginalName();

        $file->move('materials',$name);

        Comments::create([ 
            'comments' => $request->input('comments'),
            'post_id' => $request->input('post_id'),
            'student_id' => $request->input('student_id'),
            'teacher_id' => $request->input('teacher_id'),
            'content' => $name
            ]);  }

            else
            
            Comments::create($request->all());



        // return asset('wwe');

        //dd($request->all());

        return redirect()->route('show.classroom', ['classroom_id' => $request->input('classroom_id')]);

    }


    public function addAssignment(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required'
        ]);

        
if( $file=$request->file('file'))
    {


        // dd( $request->all());

        $name=$file->getClientOriginalName();

        $file->move('materials',$name);
        			
        TeacherAssignment::create([ 
            'title' => $request->input('title'),
            'classroom_id' => $request->input('classroom_id'),
            'teacher_id' => $request->input('teacher_id'),
            'description' => $request->input('description'),
            'points' => $request->input('points'),
            'due' => $request->input('due'),
            'topic' => $request->input('topic'),
            'content' => $name
            ]);}


            else
            TeacherAssignment::create($request->all());


        return redirect()->route('show.teacherAssignment', ['classroom_id' => $request->input('classroom_id')]);

    }

// student submit assignment to database 
    public function submitAssignment(Request $request)
    {
        // $filee=$request->file('content');
        // $namee=$filee->getClientOriginalName();
        // dd($namee);

        // $request->validate([
        //     "content"=$namee => 'required|exists:student_assignment';

        // ]);
  
        $classroom_id=$request->input('classroom_id');
        $assignment_id=$request->input('assignment_id');


        
if( $file=$request->file('content'))
    {


        // dd( $request->all());

        $name=$file->getClientOriginalName();

        $file->move('materials',$name);
        			
        StudentAssignment::create([ 
            'assignment_id' => $request->input('assignment_id'),
            'student_id' => $request->input('student_id'),
            'classroom_id' => $request->input('classroom_id'),
            'content' => $name
            ]);}


            else
            StudentAssignment::create($request->all());

        return redirect()->route('show.Assignment', compact('classroom_id','assignment_id'));

    }





    

    public function showClassroom(Request $request) {
        $classroom_id=$request->input('classroom_id');
        $studentregs = StudentRegisteration::latest()->paginate(100);
        $classrooms = Classroom::latest()->paginate(100);
        $studentposts = StudentPost::latest()->paginate(100);
        $comments=Comments::latest()->paginate(100);
        return view('Frontend.student-classroom', compact('studentregs','classrooms','classroom_id','studentposts','comments'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    public function showTeacherAssignment(Request $request) {
        // dd($request->input('classroom_id'));
        $classroom_id=$request->input('classroom_id');
        $teacherassignments=TeacherAssignment::latest()->paginate(100);
        $studentassignments=StudentAssignment::latest()->paginate(100);

        return view('Frontend.viewTeacherassignments', compact('teacherassignments', 'studentassignments','classroom_id'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    public function showStudentAssignment(Request $request) {
        // dd($request->input('classroom_id'));
        $classroom_id=$request->input('classroom_id');
        $studentassignments=StudentAssignment::latest()->paginate(100);
        return view('Frontend.gradeassignment', compact('studentassignments','classroom_id'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }
// student can show the assignment to submit 
    public function showAssignment(Request $request) {
        $classroom_id=$request->input('classroom_id');
        $assignment_id=$request->input('assignment_id');
        // dd( $assignment_id);
        $flag=0;
        $teacherassignments=TeacherAssignment::latest()->paginate(100);
        $studentassignments=StudentAssignment::latest()->paginate(100);
        return view('Frontend.submitassignment', compact('assignment_id','classroom_id','studentassignments','teacherassignments', 'flag'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    public function viewAddassignment(Request $request) {
        $classroom_id=$request->input('classroom_id');
        $teacherassignments=TeacherAssignment::latest()->paginate(100);
        return view('Frontend.createassignment', compact('classroom_id'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    public function showResult() {
   
        $studentregs = StudentRegisteration::latest()->paginate(100);
        return view('Frontend.studentResult', compact('studentregs'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    public function addResult(Request $request) {
        $classroom_id=$request->input('classroom_id');
        $studentregs = StudentRegisteration::latest()->paginate(100);
        return view('Frontend.addResult', compact('studentregs','classroom_id'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    public function editResult(Request $request) {
        // dd($request->input('result_id'));
        $result_id=$request->input('result_id');
        $studentregs = StudentRegisteration::latest()->paginate(100);
        return view('Frontend.editResult', compact('studentregs','result_id'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }


    
    public function editGrade(Request $request) {
        // dd($request->input('result_id'));
        $assignment_id=$request->input('assignment_id');
        $studentassignments= StudentAssignment::latest()->paginate(100);
        return view('Frontend.addgrade', compact('studentassignments','assignment_id'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    public function updateResult(Request $request) {
        // dd($request->input('result_id'));
        //boulanessim
       $studentregs = StudentRegisteration::latest()->paginate(100);
       foreach( $studentregs as  $studentreg)
       if($studentreg->id==$request->input('result_id'))
       {
       $classroom_id=$studentreg->classroom_id;
       $studentreg->update([  

        'mid_term' => $request->input('mid_term'),
        'final' => $request->input('final'),

       ]);

    return redirect()->route('add.result',['classroom_id' => $classroom_id]);
    
    }     
    }


    public function updategrade(Request $request) {
        // dd($request->input('result_id'));
        //boulanessim
       $studentassignments = StudentAssignment::latest()->paginate(100);
       foreach( $studentassignments as $studentassignment)
       if($studentassignment->id==$request->input('assignment_id'))
       {
       $classroom_id=$studentassignment->assignment->classroom_id;
       $studentassignment->update([  

        'grade' => $request->input('grade'),
       

       ]);

    return redirect()->route('show.studentAssignment',['classroom_id' => $classroom_id]);
    
    }     
    }

    public function deletecontent(Request $request) {
      
        // dd($request->input('studentassignment_id'));

        if($request->input('studentassignment_id')!==null)
        {     
            $studentassignments = StudentAssignment::latest()->paginate(100);
            foreach( $studentassignments as $studentassignment)
            if($studentassignment->id==$request->input('studentassignment_id'))
            {
                
            $classroom_id=$studentassignment->assignment->classroom_id;
            $studentassignment->delete();
     
         return redirect()->route('show.teacherAssignment',['classroom_id' => $classroom_id]);
         
         } }

       else  if($request->input('teacherassignment_id')!==null)
         {     
            // dd($request->input('teacherassignment_id'));
             $teacherassignments = TeacherAssignment::latest()->paginate(100);
             foreach( $teacherassignments as $teacherassignment)
             if($teacherassignment->id==$request->input('teacherassignment_id'))
             {
               
             $classroom_id=$teacherassignment->classroom_id;
             $teacherassignment->delete();
      
          return redirect()->route('show.teacherAssignment',['classroom_id' => $classroom_id]);
          
          } }
             
         elseif ($request->input('post_id')!==null)
         {       $studentposts = StudentPost::latest()->paginate(100);
             foreach( $studentposts as $studentpost)
             if($studentpost->id==$request->input('post_id'))
             {
             $classroom_id=$studentpost->classroom_id;
             $studentpost->delete();
      
          return redirect()->route('show.classroom',['classroom_id' => $classroom_id]);
          
          } }

          else if ($request->input('comment_id')!==null)
          {       $comments = Comments::latest()->paginate(100);
              foreach(  $comments as  $comment)
              if($comment->id==$request->input('assignment_id'))
              {
              $classroom_id=$comment->post->classroom_id;

              $comment->delete();
       
           return redirect()->route('show.classroom',['classroom_id' => $classroom_id]);
           
           } }

           else 
           {     
          
               $classrooms = Classroom::latest()->paginate(100);
               foreach(  $classrooms as  $classroom)
               if($classroom->classroom_id==$request->input('classroom_id'))
               {
                
                $classroom->delete();
              
              
                return redirect()->route('teacher');
            
            } }
    
    }

    public function downloadStudentAssignment(Request $request) {


        $studentassignments = StudentAssignment::latest()->paginate(100);
       foreach(  $studentassignments as   $studentassignment)
       if($studentassignment->id==$request->input('assignment_id'))
       {

       $pathToFile ='materials/' . $studentassignment->content;
    //    $studentassignment->update([  

    //     'mid_term' => $request->input('mid_term'),
    //     'final' => $request->input('final'),

    //    ]);

    return response()->download($pathToFile);
    
    }     
    }

    public function downloadPost(Request $request) {

        if($request->input('post_id')!==null)
       {
           
       $studentposts = StudentPost::latest()->paginate(100);
       foreach(   $studentposts as    $studentpost )
       if( $studentpost->id==$request->input('post_id'))
       {

       $pathToFile ='materials/' . $studentpost->content;
    //    $studentassignment->update([  

    //     'mid_term' => $request->input('mid_term'),
    //     'final' => $request->input('final'),

    //    ]);
       }}

    else

    {
        // dd($request->input('comment_id'));
        $comments = Comments::latest()->paginate(100);
       foreach(   $comments as    $comment )
       if( $comment->comment_id==$request->input('comment_id'))
       {

       $pathToFile ='materials/' . $comment->content;
    //    $studentassignment->update([  

    //     'mid_term' => $request->input('mid_term'),
    //     'final' => $request->input('final'),

    //    ]);
    
    }  



    }


    return response()->download($pathToFile);
    
         
    }


    public function commentDownload (Request $request) {


        $comments = Comments::latest()->paginate(100);
       foreach(   $comments as    $comment )
       if( $comment->id==$request->input('comment_id'))
       {

       $pathToFile ='materials/' . $comment->content;
    //    $studentassignment->update([  

    //     'mid_term' => $request->input('mid_term'),
    //     'final' => $request->input('final'),

    //    ]);

    return response()->download($pathToFile);
    
    }     
    }


    public function showCourseDetails(Request $request) {
        $student_id=$request->input('student_id');
        $courseTitle=$request->input('courseTitle');
        $teacherName=$request->input('teacherName');
        $classroom_id=$request->input('classroom_id');
        $studentregs = StudentRegisteration::latest()->paginate(100);
        $classrooms = Classroom::latest()->paginate(100);
        $courses= Course::all();
        $teachers= Teacher::all();
        $students=Student::latest()->paginate(100);
        return view('Frontend.studentcoursedetails', compact('courses','teachers','studentregs','students','classrooms','student_id','courseTitle','teacherName','classroom_id'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
    }

    
    public function showProfileDetails(Request $request) {
        
        if (Auth::guard('student')->user()){
            $studentregs = StudentRegisteration::latest()->paginate(100);
            $classrooms =Classroom::all();
            return view('Frontend.profile',compact('studentregs','classrooms'));
            

        }
     
        return view('Frontend.profile');   
    }


    public function showaccountsetting(Request $request) {
        

        return view('Frontend.profileEdit');
          
    }

//     public function download($uuid)
// {
//     $book = StudentAssignment::where('uuid', $uuid)->firstOrFail();
//     $pathToFile = storage_path('app/books/' . $book->cover);
//     return response()->download($pathToFile);
// }

    public function updateInfo(Request $request)
    {
        // $request->all();
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required'
        ]);
        $modelType=null;

        $file=$request->file('file');
        $name=$file->getClientOriginalName();

        $file->move('materials',$name);
        
        if (Auth::guard('student')->user()){
            $modelType=Student::where('user_id',Auth::user()->user_id)->First();
            
        }
        elseif(Auth::guard('parent')->user()){
            
            $modelType=ParentModel::where('user_id',Auth::user()->user_id)->First();
           
        }
        elseif(Auth::guard('teacher')->user()){
            $modelType=Teacher::where('user_id',Auth::user()->user_id)->First();
        }
        $modelType->update([
        'fname'=>$request->input('fname'),
        'lname'=>$request->input('lname'),
        'phone'=>$request->input('phone'),
        'address'=>$request->input('address'),
        'password' => Hash::make($request['password']),
        'photo' => $name
        ]);
        // $fname=$request->input('fname');
        // $lname=$request->input('lname');
        // $email=Auth::user()->email;
        // $phone=$request->input('phone');
        // $address=$request->input('address');
    //     return redirect()->route('show.profileDetails');
    // }
    // $date=['fname'=>$fname]
    return redirect()->route('show.profileDetails');
    // ->with('i', (request()->input('page', 1) - 1) * 100);
}

    public function showcertificate (Request $request) {
        $student_id=$request->input('student_id');
        $classroom_id=$request->input('classroom_id');
    
        $data=['student_id'=>$student_id,'classroom_id'=>$classroom_id];
        // dd($request->input('data'));
        $studentregs = StudentRegisteration::latest()->paginate(100);
        $classrooms =Classroom::all();
        $students= Student::all();
        $courses= Course::all();
    
        return view('Frontend.certificateform',compact('data','studentregs','classrooms','students','courses'));
        }



}
