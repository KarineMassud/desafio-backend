<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subjects;
class SubjectsController extends Controller
{
    public function index ()
    {
        $subjects = Subjects::all();
        return response()->json($subjects);
    }

    public function store(Request $request)
    {
        $subjects = new Subjects;
        $subjects->title = $request->title;
        $subjects->save();
        return response()->json([
            "message" => "Subjects Added."], 201);
    }

    public function show ($id)
    {
        $subjects = Subjects::find($id);
        if(!empty($subjects))
        {
            return response()->json($subjects);
        }
        else
        {
            return response()-json([
                "message" => "Subjects not found"
            ], 404);
        }
    }
    public function update(Request $request, $id)
{
    if (Subjects::where('id', $id)->exists()) {
        $subjects = Subjects::find($id);
        $subjects->title = is_null($request->title) ? $subjects->title : $request->title;
        $subjects->save();
        return response()->json([
            "message" => "Subjects Updated.",
        ], 200);
    } else {
        return response()->json([
            "message" => "Subjects Not Found.",
        ], 404);
    }

}

public function destroy($id)
{
    if (Subjects::where('id', $id)->exists()) {
        $subjects = Subjects::find($id);
        $subjects->delete();
        return response()->json([
            "message" => "Subjects Deleted.",
        ], 200);
    } else {
        return response()->json([
            "message" => "Subjects Not Found.",
        ], 404);
    }

}
}




