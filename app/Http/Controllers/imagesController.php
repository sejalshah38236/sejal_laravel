<?php

namespace App\Http\Controllers;
use App\Models\image;
use Illuminate\Http\Request;
use Alert;



class imagesController extends Controller
{
    //
    public function add_images()
    {
        $data=image::all();
        return view('backend.add_images',['data'=>$data]);

    
    }

    public function index()
    {
       
    }

    public function store(Request $request)
    {
        $data= new image;
        $data->name=$request->name;
        $multiple_arr=[];

        if($request->hasfile('file'))
        {
            foreach($request->file('file' ) as $multi_file)
            {
                $file = time().rand(1000,9999).'_img.'.$multi_file->extension();
                $multi_file->move('upload/images/',$file);
                $multiple_arr[] = $file;
            }

            $data->file=implode(',',$multiple_arr);
            
        }

        $data->save();
        Alert::success('success', 'Successfully photos uploades');

        return redirect('adminindex');

    }

    public function alldata()
    {        
	   $data=image::all();	 
       return view('frontend.index',['data'=>$data]);
    }

}

