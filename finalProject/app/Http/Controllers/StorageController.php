<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storage;
use App\Category;


class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $i =1 ;
        return view('admin.storage.index')->with('storages',Storage::all())
                                          ->with('i',$i );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::all();
        if( $categories->count()==0){
            return redirect()->route('create_category');
        }

        return view('admin.storage.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate($request,[
            "category_id"=>"required",
            "name"=>"required",
            "description"=>"required",
            "image"=>"required",
             "address"=>"required",
             "mobile"=>"required",
            "watts"=>"required",
             "facebook"=>"required",
             "enestegram"=>"required"
          ]);

            //image data for uploade
            $image = $request->image;
            $image_new_name= time().$image->getClientOriginalName(); 
            $image->move('uploads/services/',  $image_new_name); //path where the images will save*/



            $storage =Storage::create([
                "category_id"=> $request->category_id,
                "name"=> $request->name,
                "description"=> $request->description,
                "image"=> 'uploads/services/'. $image_new_name,
                "address"=> $request->address,
                "mobile"=> $request->mobile,
                "watts"=> $request->watts,
                "facebook"=> $request->facebook,
                "enestegram"=> $request->enestegram,
               
               ]);

               $storage->save();
               return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $storage =Storage::find($id);
       return view('admin.storage.edit')->with('categories',Category::all())
                                          ->with('storage', $storage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $storage =Storage::find($id);
        dd( $storage);
       /* $this->validate($request,[
           "category_id"=>"required",
            "name"=>"required",
            "description"=>"required",
             "address"=>"required",
             "mobile"=>"required",
            "watts"=>"required",
             "facebook"=>"required",
             "enestegram"=>"required"
          ]);
         if($request->hasFile('featured')){
            $image = $request->image;
            $image_new_name= time().$image->getClientOriginalName(); 
            $image->move('uploads/services/',  $image_new_name);
            $storag-> $image =    $features_new_name;
         }

        $storag->category_id= $request->category_id;
        $storag->name= $request->name;
        $storag->description= $request->description;
        $storag->address= $request->address;
        $storag->mobile= $request->mobile;
        $storag->watts= $request->watts;
        $storag->facebook= $request->facebook;
        $storag->enestegram= $request->enestegram;
        $storag->save();
       return view('admin.storage.index');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
