<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
class AnnouncementController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
     public function store(Request $request)
     {
     	$announcements = new Announcement();
     	$announcements->title = $request->input('title');
     	$announcements->descriptions = $request->input('descriptions');
          $announcements->type = $request->input('type');
     	
     	if ($request->hasfile('fileupload')) {
     		$file=$request->file('fileupload');
     		$extension=$file->getClientOriginalExtension();
     		$filename=time() . '.' . $extension;
     		$file->move('uploads/announcement/',$filename);
     		$announcements->files=$filename;
     	}
          $announcements->save();
          echo '<script>alert("Added successfully!")</script>'; 
          return redirect('announcements')->with('announcements',$announcements);
     	
     }
     public function display()
     {
     	$announcements = Announcement::all();
     	return view('adminpage.announcement')->with('announcements',$announcements);
     }
     public function edit($id)
     {
     	$announcement = Announcement::find($id);
     	return view('adminpage.editAnnouncement')->with('announcement',$announcement);
     }
     public function showAnnouncement()
     {
          $announcement = Announcement::all();
          return view('showAnnouncement')->with('announcement',$announcement);
     }
     public function update(Request $request,$id)
     {
     	$Announcement = Announcement::find($id);
     	$Announcement->title = $request->input('title');
     	$Announcement->descriptions = $request->input('descriptions');
     	$Announcement->price = $request->input('price');

     	if ($request->hasfile('image')) {
     		$file=$request->file('image');
     		$extension=$file->getClientOriginalExtension();
     		$filename=time() . '.' . $extension;
     		$file->move('uploads/announcement/',$filename);
     		$Announcement->image=$filename;
     	}

     	$Announcement->save();
     	echo '<script>alert("updated successfully!")</script>'; 
     	return redirect('fetchAnnouncement')->with('Announcement',$Announcement);
     }
     public function delete($id)
     {
     	$Announcement = Announcement::find($id);
     	$Announcement->delete();
     	return redirect('fetchAnnouncement')->with('Announcement',$Announcement);
     }
}
