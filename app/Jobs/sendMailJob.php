<?php

namespace App\Jobs;

use App\Mail\ContactUsMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $dataDetails;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($dataDetails)
    {
        $this->dataDetails = $dataDetails;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailProcess = new ContactUsMail($this->dataDetails);
        Mail::to($this->dataDetails['to_me'])->send($mailProcess);
    }
}
