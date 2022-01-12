<?php
namespace App\Http\Controllers;
use App\Models\Metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploadImageController extends Controller
{
   public function index(){
      return view('index');
   }
   public function uploadFile(Request $request)
   {
      $data = array();
      $validator = Validator::make($request->all(), [
         'file' => 'required|mimes:png,jpg,jpeg,csv,txt|max:2048'
      ]);
      if ($validator->fails()) {
         $data['success'] = 0;
         $data['error'] = $validator->errors()->first('file');
      }else{
         if($request->hasFile('file')) {
             $file = $request->file('file');
             $filename = time().'_'.$file->getClientOriginalName(); //File Name
             $extension = $file->getClientOriginalExtension();     // File extension
             $filesize = $request->file('file')->getSize();       // File Size
             $location = 'storage/imageupload';    // File upload location
             $file->move($location,$filename);     // Upload file on it's location with filename
             $filepath = url('files/'.$filename);  // File path

             $upload = Metadata::create([
                'name' => $filename,
                'size' => $filesize,
                'mimetype' => $extension,
             ]);
             if($upload){
                // Success Response
             $data['success'] = 1;
             $data['message'] = 'Uploaded Successfully!';
             $data['filepath'] = $filepath;
             $data['extension'] = $extension;
             }
             else{
                // Error Response
                $data['success'] = 2;
                $data['message'] = 'File not uploaded.';
            }
         }
      }
      return response()->json($data);
   }
}

