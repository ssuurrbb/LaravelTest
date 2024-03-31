<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AnswerRequest;
use App\Models\Form;

class FormController extends Controller
{
    public function submit(AnswerRequest $request)
    {
        $form=new Form();
        $form->name=$request->input('name');
        $form->email=$request->input('email');
        $form->phone=$request->input('phone');
        
        $form->save();
        return redirect()->route("form-nam")->with('success', 'Your message has been sent');
    }

    public function allData()
    {
        return view('admin',['data'=>Form::all()]);
    }
}
