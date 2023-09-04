<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return response()->json($students);
    }

    public function store(Request $request)
    {
        $payload = $request->all();
        //dd($payload['name']);
        //echo $request;
        $students = new Students;
        $students->name = $payload['name'];
        $students->father = $payload['father'];
        $students->mother = $payload['mother'];
        $students->save();
        return response()->json([
            "message" => "Students Added."], 201);

    }



    public function show ($id)
    {
        $students = Students::find($id);
        if(!empty($students))
        {
            return response()->json($students);
        }
        else
        {
            return response()-json([
                "message" => "Students not found"
            ], 404);
        }
    }
    public function update(Request $request, $id)
{
    if (Students::where('id', $id)->exists()) {
        $student = Student::find($id);
        $student->name = is_null($request->name) ? $student->name : $request->name;
        $student->father = is_null($request->father) ? $student->father : $request->father;
        $student->mother = is_null($request->mother) ? $student->mother : $request->mother;
        $student->save();
        return response()->json([
            "message" => "Student Updated.",
        ], 200);
    } else {
        return response()->json([
            "message" => "Student Not Found.",
        ], 404);
    }

}

public function destroy($id)
{
    if (Students::where('id', $id)->exists()) {
        $student = Student::find($id);
        $student->delete();
        return response()->json([
            "message" => "Student Deleted.",
        ], 200);
    } else {
        return response()->json([
            "message" => "Student Not Found.",
        ], 404);
    }

}
}


