<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hall;
use App\Category;

class HallController extends Controller
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
        return view('admin.halls.index')->with('halls',Hall::all())
                                        ->with('i',$i );
       // return view('admin.halls.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories =Category::all();
        if( $categories->count()==0){
            return redirect()->route('create_category');
        }
        return view('admin.halls.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            "category_id"=>"required",
            "name"=>"required",
            "description"=>"required",
            "vedio_link"=>"required",
             "address"=>"required",
             "mobile"=>"required",
            "watts"=>"required",
             "facebook"=>"required",
             "enestegram"=>"required"
          ]);

          $hall =Hall::create([
            "category_id"=> $request->category_id,
            "name"=> $request->name,
            "description"=> $request->description,
            "vedio_link"=> $request->vedio_link,
            "address"=> $request->address,
            "mobile"=> $request->mobile,
            "watts"=> $request->watts,
            "facebook"=> $request->facebook,
            "enestegram"=> $request->enestegram,
           
           ]);
           $hall->save();
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
        $hall = Hall::find($id);
        return view('admin.halls.edit')->with('categories',Category::all())
                                        ->with('hall', $hall);
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
        //
        $hall = Hall::find($id);

        $this->validate($request,[
            "category_id"=>"required",
            "name"=>"required",
            "description"=>"required",
            "vedio_link"=>"required",
             "address"=>"required",
             "mobile"=>"required|int|max:10",
            "watts"=>"required|int|max:13",
             "facebook"=>"required",
             "enestegram"=>"required"
          ]);

          $hall->category_id= $request->category_id;
          $hall->name= $request->name;
          $hall->description= $request->description;
          $hall->vedio_link= $request->vedio_link;
          $hall->address= $request->address;
          $hall->mobile= $request->mobile;
          $hall->watts= $request->watts;
          $hall->facebook= $request->facebook;
          $hall->enestegram= $request->enestegram;

          $hall->save();
          return view('admin.halls.index')->with('halls',Hall::all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hall = Hall::find($id);
        $hall->delete();
        $i =1 ;
        return view('admin.halls.index')->with('halls',Hall::all())
                                        ->with('i',$i );
    }
}
