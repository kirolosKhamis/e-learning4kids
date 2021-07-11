<?php

namespace App\Console\Commands;
use App\Models\Student;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\TomorrowDeadline;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify for all users every day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        
        // $students= Student::select('email')->get();
        $emails= Student::pluck('email')->toArray();
        $data=['title'=>'programming','courseCode'=>'123456','Reg'=>'17100652'];
        foreach($emails as $email){
            // Mail::to($request->user())->send(new MailableClass);
            Mail::To($email)->send(new TomorrowDeadline($data));
        }
    }
}
