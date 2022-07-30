<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\ContactMail;
use App\Mail\ContactMailUser;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validation = Validator::make($data, [
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'phone_number' => 'required|max:100',
            'event_date' => 'required|max:100',
            'description' => 'required',
        ],[
            'name' => trans('error.name'),
            'email' => trans('error.name'),
            'phone_number' => trans('error.name'),
            'event_date' => trans('error.name'),
            'description' => trans('error.name'),
        ]);
        if($validation->fails()){
            return redirect()->back()->withInput()->with([
                'errors' => $validation->errors()
            ]);
        }
        $contactData = Contact::create($data);

        $details = [
            'title' => 'Mail from NetWare Data Systems',
            'name' => $contactData->name,
            'email' => $contactData->email,
            'phone_number' => $contactData->phone_number,
            'event_date' => $contactData->event_date,
            'description' => $contactData->description,
        ];
        Mail::to('info@NetWaredata.com')->send(new ContactMail($details));
        Mail::to($contactData->email)->send(new ContactMailUser($details));
        return redirect()->route('contact')->with([
            'success' => trans('Message Send successfully')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
