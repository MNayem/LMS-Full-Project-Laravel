<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Carbon\Carbon;

class FileUploadController extends Controller
{
    //
    public function showUploadForm()
    {
      $files=File::get();

        return view('fileupload',compact('files'));
    }

    public function storeUploads(Request $request)
    {
      $fileModel = new File;
      $files=$request->file('image');
      $name=$request->file('image')->getClientOriginalName();
      //return $name;


      if($request->hasFile('image')) {
        $name=$request->file('image')->getClientOriginalName();
    $request->file('image')->storeAs('images/',$name);
      // $path = $file->storeAs('public/', $originalname);


  }
  $fileModel->name=$name;
  $fileModel->file_path="images/".$name;
  $fileModel->save();




    //  return back()
          //  ->with('success', 'File uploaded successfully');



//foreach ($request->file('image') as  $image){

      // $file = $request->file('image');
      // $request->file('image')->store('uplodads/', 'public');
      //$fileName = time().'_'.$image->getClientOriginalName();
      // $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');

            //$fileModel->name =   time().'_'.$image->getClientOriginalName();
           //$fileModel->file_path =  "abcd";//'/storage/public/' . $filePath;
          //$fileModel->save();



//}


   }
}
