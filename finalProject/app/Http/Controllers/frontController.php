<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\mail;
use App \Mail\CountactUs;
use App\Category;
use App\offer;
use App\Hall;
use App\Storage;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        
       //Display Home page
       $offers = offer::paginate(3);
       $categories = Category::all();
       
        return view('users.index')->with('offers', $offers)
                                  ->with('categories',Category::all());
    }

    //Display Halls page
    public function halls()
    {
        return view ('users.halls'); 
    }

    /*Contact Us FORM*/
    public function dosend(Request $request){
           //VAlidation
       $this->validate($request,[
        "name"=>"required",
        "email"=>"required|email",
       "mobile"=>'required',
        "content"=>"required"
       ]);
       $name = $request->input('name');
       $email =$request->input('email');
       $mobile= $request->input('mobile');
       $content =$request->input('content');

       Mail::to('daliatariq95@gmail.com')->send(new CountactUs($name ,$email,$mobile ,$content));
       return redirect()->back()->with('success','I got your message and we will reply in short time');

     


    }


    public function servicePage($id){
        $category = Category::find($id);
        $hall = Hall::paginate(6);
        $storage = Storage::paginate(6);
        return view('users.servises')->with('category',  $category)
                                    ->with('hall', $hall)
                                    ->with('storage',  $storage);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
