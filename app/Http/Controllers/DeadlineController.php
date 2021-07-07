<?php
namespace App\Http\Controllers;
use App\Mail\NotifyEmail;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;

class DeadlineController extends Controller
{

    public function index(){
        $emails= Student::pluck('email')->toArray();
        $data=['title'=>'programming','courseCode'=>'123456','Reg'=>'17100652'];
        foreach($emails as $email){           
            Mail::To($email)->send(new NotifyEmail($data));
        }
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