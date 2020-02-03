<?php

namespace App\Http\Controllers;

use App\Application;
use App\leave;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function viewEmployee(){
        $employees = User::get();
        return view('admin.viewEmployee',compact('employees'));
    }
    public function leaveEmployee($id){
        $employees = User::findOrFail($id);
        return view('admin.amount_leave',compact('employees'));
    }
    public function leaveinsert(Request $request, $id = null){
        $leaveamount = User::where(['id'=>$id])->first();
        if($request->isMethod('post')){
            $data = $request->all();
            if(empty($data['id'])){
                return redirect()->back()->with('flash_message_error','Leave Amount sucessfull');
            }
            $leaveamount = new leave;
            $leaveamount->employee_id = ['id'];
            $leaveamount->leaveamount = $data['leaveamount'];
            $leaveamount->save();
            return redirect()->back();
        }
        return view('admin.amount_leave',compact('leaveamount'));
    }
    public function store(Request $request, $id = null){
       if($request->isMethod('post')){
           $data = $request->all();
           $application = new Application;
           $application->leave = $data['leave'];
           $application->reason = $data['reason'];
           $application->save();
       }
       return redirect()->back();
    }
    public function viewMessage(){
        $messages = Application::get();
        $employees = User::get();
        return view('admin.message',compact('messages','employees'));
    }
}
