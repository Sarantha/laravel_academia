<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Teacher;
use App\User;
use Illuminate\Support\Facades\Validator;
class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();
        //return view('inc.list')->with('teachers', $teachers);
        return view('students')->with('files', $files);
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'upload_file'=>'required|mimetypes:application/pdf|max:10000'
        ]);

        if($request->hasFile('upload_file')){
            // $fileImageWithExt = $request->file('upload_file')->getClientOriginalName();
            // $fileName = pathinfo($fileImageWithExt, PATHINFO_FILENAME);
            // $extention = $request->file('upload_file')->getClientOriginalExtension();
            // $fileNameToStore = $fileName.'_'.time().'.'.$extention;
            // $path = $request->file('upload_file')->storeAs('public/uploads',$fileNameToStore);

        // $uniqueFileName = uniqid() . $request->file('upload_file')->getClientOriginalName() . '.' . $request->file('upload_file')->getClientOriginalExtension();
        // $request->file('upload_file')->move(\public_path('/uploads') . $uniqueFileName);
        $filenameWithExt = $request->file('upload_file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('upload_file')->getClientOriginalExtension();
        $fileNameToStore = $filename.'-'.time().'.'.$extension;
        $path = $request->file('upload_file')->storeAs('public/uploads', $fileNameToStore);

        $file = new File;
        $file->uploader = auth()->user()->email;
        $file->upload_file = $fileNameToStore;
        $file->title = $request->input('title');
        $file->description = $request->input('body');
        $file->save();

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
        else{
            return redirect('teachers')->with('error','No File Added');
        }

       

    //return dd($request);
        return redirect('teachers')->with('success','New File Added Successfully');
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
        //
    }
}
