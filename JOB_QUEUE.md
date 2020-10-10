#https://dev.to/skipperhoa/send-email-using-queue-in-laravel-5-8-48o9

Setup database queue in laravel

so first change your env file queue connection to database like following

QUEUE_CONNECTION=database

//then run the following command

php artisan queue:table


//then migrate the table

php artisan migrate:fresh




//Now create mail using php artisan

php artisan make:mail ContactUsMail

then create your mail view and atttach data to the view like following

class ContactUsMail extends Mailable
{
     protected $messageData;


    public function __construct($messageData)
    {
        $this->messageData = $messageData;
    }


    public function build()
    {
        return $this->view('mail.contactus')->with("messageData", $this->messageData);
    }
}




//Now we need to make a job using php artisan 

php artisan make:job sendMailJob


//Now change your job file like the following

class sendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $dataDetails;

    public function __construct($dataDetails)
    {
        $this->dataDetails = $dataDetails;
    }

    public function handle()
    {
        $mailProcess = new ContactUsMail($this->dataDetails);
        Mail::to($this->dataDetails['to_me'])->send($mailProcess);
    }
}


//Now dispatch job from controller like the following

dispatch(new sendMailJob($details));

//Open two terminal and run this two command

command 1: php artisan queue:listen
command 2: php artisan serve

For production we need to run the following command from either cronjob or command from a scheduler in laraver

php artisan queue:work


//



