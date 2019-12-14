<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        //return view('inc.list')->with('teachers', $teachers);
        return view('admin')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'subject' => 'required',
            'nic_no' => 'required',
            'phone' => 'required',
            'qualification' => 'required',
            'district' => 'required',
            'email' => 'required'
        ]);

        $teacher = new Teacher([
            'name' => $request->get('name'),
            'subject' => $request->get('subject'),
            'qualification' => $request->get('qualification'),
            'nic_no' => $request->get('nic_no'),
            'phone' => $request->get('phone'),
            'district' => $request->get('district'),
            'email' => $request->get('email')
        ]);
        $teacher->save();

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make('12345678'),
            'user_role' => 'teacher'
        ]);
        $user->save();
        return redirect('admin')->with('success','New Teacher Registerd Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $user = User::find($id);
        $teacher->delete();
        $user->delete();
        return redirect('admin')->with('success', 'Teacher Removed');
    }
}
