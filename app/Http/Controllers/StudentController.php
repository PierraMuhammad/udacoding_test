<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        //
        $students = DB::table('students')->get();
        return view('data.index_siswa', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('data.create_siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|unique:students',
            'age' => 'required',
            'NISN' => 'required',
            'sex' => 'required',
            'number_phone' => 'required',
            'class' => 'required',
            'math' => 'required',
            'science' => 'required',
            'social' => 'required',
            'pe' => 'required',
            'art' => 'required',
        ]);
        //$user = Auth::user();
        $query = DB::table('students')->insert([
            'name' => $request["name"],
            'age' => $request["age"],
            'NISN' => $request["NISN"],
            'sex' => $request["sex"],
            'number_phone' => $request["number_phone"],
            'class' => $request["class"],
            'math' => $request["math"],
            'science' => $request["science"],
            'social' => $request["social"],
            'pe' => $request["pe"],
            'art' => $request["art"],
            'user_id' => "1",
        ]);
        return redirect('/students')->with('success', 'new student has been create');
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
        $student = DB::table('students')->where('id', $id)->first();
        return view('data.show_siswa', compact('student'));
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
        $student = DB::table('students')->where('id', $id)->first();
        return view('data.edit_siswa', compact('student'));
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
        $request = $request->all();
        //$user = Auth::user();
        $query = DB::table('students')->where('id', $id)->update([
            'name' => $request["name"],
            'age' => $request["age"],
            'NISN' => $request["NISN"],
            'sex' => $request["sex"],
            'number_phone' => $request["number_phone"],
            'math' => $request["math"],
            'science' => $request["science"],
            'social' => $request["social"],
            'pe' => $request["pe"],
            'art' => $request["art"],
            'user_id' => "1"
        ]);
        return redirect('/students')->with('succes', 'Students has been updated');
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
        $query = DB::table('students')->where('id', $id)->delete();
        return redirect('/students')->with('success', 'Students has been deleted');
    }
}
