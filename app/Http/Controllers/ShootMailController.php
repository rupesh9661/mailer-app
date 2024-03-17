<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShootMailController extends Controller
{
    public function shootMail(Request $request)
    {
        $file = $request->file('mail_list');
        if ($file->getClientOriginalExtension() === 'csv') {
            $content = file_get_contents($file->getRealPath());
            $content = mb_convert_encoding($content, 'UTF-8', 'UTF-16');
            $data = array_map('str_getcsv', explode("\n", trim($content)));
        } 
        // for sending mail 
        foreach($data as $i=>$d){
            if($i==0){
                continue;
            }
            $edata['email'] = $d[1];
            $edata['message'] = "this is very important message";
            $edata['subject'] = "Important Notice- Tapsolutions";
            $edata['name'] = $d[0];
            $edata['message'] = view('emailTemplate', ['data' => $edata])->render();
            $mail=$this->Mail($edata);
        }
     
        //end
        return redirect()->back()->with('success', 'Mail Sent successfully');
    }

    public function Mail($data)
    {
        try {
            $result = Mail::raw($data['message'], function ($message) use ($data) {
                $message->from(env('MAIL_FROM_ADDRESS'), 'Tap Solutions');
                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->setSubject = $data['subject'];
                $message->getHeaders()->addTextHeader('Content-Type', 'text/html');
                if (!empty($data['file'])) {
                    $message->attach($data['file']);
                }
            });
            $response['status'] = 1;
            $response['message'] = "email sent successfully";
        } catch (\Exception $e) {
            $response['status'] = 0;
            $response['message'] = $e->getMessage();
        }
        return $response;
    }
}
