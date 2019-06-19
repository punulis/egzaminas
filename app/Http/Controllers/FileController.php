<?php

namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
   public function showUploadForm()
   {
       return view('upload');
   }

   public function storeFile(request $request)
   {
       if ($request->hasFile('file')) {
           $filename = $request->file->getClientOriginalName();
           $request->file->storeAs('public/upload',$filename);
           $file = new File;
           $file->name = $filename;
           $file->save();
           return 'yes';
       }
       return $request->all();
   }
}
