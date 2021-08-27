<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoardMember;

class BoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
     {
        $boardmember = BoardMember::all();
        return view('adminpage.boardMember')->with('boardmember',$boardmember);
     }

     public function saveBoardMember(Request $request)
     {
        dd($request->input('id'));

        $boardmember = new BoardMember();
        $boardmember->name = $request->input('name');
        $boardmember->designation = $request->input('designation');
        $boardmember->year = $request->input('year');
        $boardmember->descriptions = $request->input('descriptions');

        if($request->input('id') == null){
            $boardmember->save();
        }else{
            $data = BoardMember::find($request->input('id'));
            $data->name = $request->input('name');
            $data->designation = $request->input('designation');
            $data->year = $request->input('year');
            $data->descriptions = $request->input('descriptions');

            $data->save();
        }
        
        
        // if ($request->hasfile('fileupload')) {
        //     $file=$request->file('fileupload');
        //     $extension=$file->getClientOriginalExtension();
        //     $filename=time() . '.' . $extension;
        //     $file->move('uploads/announcement/',$filename);
        //     $announcements->files=$filename;
        // }
         
          echo 'alert("Added successfully!")'; 
          return redirect('boardMember')->with('boardmember',$boardmember);
        
     }

     public function deleteDetails($id){
        $boardMember = BoardMember::find($id);
        $boardMember->delete();
        return redirect('boardMember')->with('BoardMember',$boardMember);
     }
}
