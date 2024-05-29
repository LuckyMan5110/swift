<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        
        $file = $request->file('upload_file');
        if ($file){
            $file_extension = $file->getClientOriginalExtension();
            $allowed_extensions = array("jpg", "png", "jpeg", "gif", "svg", "pdf");
            if (!in_array($file_extension, $allowed_extensions)){
                return back()->with('upload_error', 'Not Supported File - only support jpg, png, jpeg, gif, svg, pdf');
            }

            // Validate the file
            $request->validate([
                'upload_file' => 'required|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
            ]);

            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            
            // Store file information in the database if needed
            // Example: File::create([...])

            return back()
                ->with('upload_success', 'File uploaded successfully.')
                ->with('file', $fileName);

        } else{
            return back()->with('upload_error', 'Select a file to Upload');
        }
        return back()->with('upload_error', 'File upload failed.');
    }

    public function show()
    {
        return view('upload');
    }
}
