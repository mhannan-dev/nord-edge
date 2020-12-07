<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Validator;
use App\Models\Slider;
use App\Traits\UploadTrait;



class SlidersController extends Controller
{
    use UploadTrait;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.slider.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Slider";
        return view('backend.pages.slider.create',$data); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Slider $slider){
        {
            request()->validate([
                'title' => 'required',
                'title2' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'status' => 'required'
            ]);
            
            if ($request->has('image')) {
                $image = $request->file('image');
                $fileName = time() . '.' . $request->image->getClientOriginalExtension();
                $folder = '/upload_img/';
                $filePath = $folder . $fileName;
                $this->uploadOne($image, $folder, 'public', $fileName);
                $slider->image = $filePath; 
            }

            $slider = new Slider();
            $slider->title = $request->title;
            $slider->title2 = $request->title2;
            $slider->status = $request->status;
            $slider->image = $fileName;
            $slider->save();
            toast('Your Post as been submited!', 'success');
            return back();



        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $Slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $Slider)
    {
        //
    }
}
