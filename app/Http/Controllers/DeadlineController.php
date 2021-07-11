<?php
namespace App\Http\Controllers;
use App\Mail\TomorrowDeadline;
use App\Mail\HelpEmail;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;

class DeadlineController extends Controller
{

    public function index(){
        $emails= Student::pluck('email')->toArray();
        $data=['title'=>'programming','courseCode'=>'123456','Reg'=>'17100652'];
        // Mail::To("k.k.nashed@gmail.com")->send(new NotifyEmail($data));
        Mail::To("support@e-learning4kids.com")->cc("k.k.nashed@gmail.com")->send(new TomorrowDeadline($data));
        // foreach($emails as $email){           
        //     Mail::To($email)->send(new NotifyEmail($data));
        // }
        return redirect()->back()->with('message', 'IT WORKS!');
    }
    public function helpAnyone(Request $request){
        // $emails= Student::pluck('email')->toArray();
        
        $request->input('name');
        $request->input('email');
        $request->input('subject');
        $request->input('message');
        $data=['name'=>$request->input('name'),'email'=>$request->input('email'),'subject'=>$request->input('subject'),'message'=>$request->input('message')];
        Mail::To("support@e-learning4kids.com")->cc($request->input('email'))->send(new HelpEmail($data));
        // foreach($emails as $email){           
        //     Mail::To($email)->send(new NotifyEmail($data));
        // }
        return redirect()->back()->with('message', 'IT WORKS!');
    }


    

}









// <!-- <script>
//     setInterval(function () {
//         var date = new Date();
//         if (date.getDate() === 12 && date.getHours() === 10 && date.getMinutes === 0) {
//             alert("Surprise!!"+date.getDate())
//         }
//     }, 1000)

//   </script> -->