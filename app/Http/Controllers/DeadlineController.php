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
        Mail::To("k.k.nashed@gmail.com")->send(new NotifyEmail($data));
        // foreach($emails as $email){           
        //     Mail::To($email)->send(new NotifyEmail($data));
        // }
        return redirect()->back()->with('message', 'IT WORKS!');
    }


    public function sendEmailReminder(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
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