<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ScheduleForm;
use App\Contactform;
use Session;
use Validator;

class ContactformController extends Controller
{

    public function post(Request $request) {

        // Validation
        $validator = Validator::make($request->all(), [
            'schedule_email' => 'required|email',
            'schedule_phone' => 'required|numeric|phone',
            'schedule_name' => 'required',
            'schedule_title' => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->with('info', ['message' => 'failed']);
        }

        if ($request->schedule_email && $request->schedule_name && $request->schedule_phone && $request->schedule_title) {
            $cf = new Contactform;
            $cf->email = $request->schedule_email;
            $cf->name = $request->schedule_name;
            $cf->phone = $request->schedule_phone;
            $typeArr = explode("|", $request->schedule_title);
            if (is_numeric($typeArr[0])) {
                $type = (int)$typeArr[0];
                $title = $typeArr[1];
            } else {
                $type = 0;
                $title = $request->schedule_title;
            }
            $cf->type = $type;
            $cf->title = $title;
            $cf->message = $request->message;
            $cf->save();
            // Send email
            Mail::to(env('RECIPIENT_EMAIL'))->send(new ScheduleForm($cf->name, $cf->email, $cf->phone, $cf->title));
        } else  {
            return redirect()->back()->with('info', ['message' => 'failed']);
        }

        $info = [
            'contact-form' => isset($cf) && $cf->id ? $cf : null,
            'message' => isset($cf) && $cf->id ? 'contact-done' : 'failed'
        ];
        return redirect()->back()->with('info', $info);
    }
}
