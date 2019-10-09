<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ButyCenter;
use App\Category;

class butyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i =1 ;
        return view('admin.buty.index')->with('centers',ButyCenter::all())
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

        return view('admin.buty.create')->with('categories',$categories);
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
        $request->validate($this->rules(),$this->messages());
         //image data for uploade
         $image = $request->image;
         $image_new_name= time().$image->getClientOriginalName(); 
         $image->move('uploads/services/',  $image_new_name); //path where the images will save*/
            
         
         $center = ButyCenter::create([
            "category_id"=> $request->category_id,
            "name"=> $request->name,
            "description"=> $request->description,
            "image"=> 'uploads/services/'. $image_new_name,
            "address"=> $request->address,
            "mobile"=> $request->mobile,
            "watts"=> $request->watts,
            "facebook"=> $request->facebook,
            "enestegram"=> $request->enestegram,
            'snapChat'=>$request->snapChat
           
           ]);
           $center ->save();
           return redirect()->back()->with('success','center is saved successfully');
    }



    private function rules($id = null){
        $rulls =[

            "category_id"=>"required",
            "description"=>"required",
             "address"=>"required",
             "mobile"=>"required",
            "watts"=>"required",
             "facebook"=>"required|url",
             "enestegram"=>"required|url",
             'snapChat'=>"required|url"
        ];

        if($id){
            $rulls['name']= "required|unique:storages,name," . $id;  //for update
            }

            else{
                $rulls['name']= "required|unique:storages,name";  //for store
                $rulls['image']="required|image|mimes:jpg,png,jpeg";
            }

        return $rulls;
    }


    private function messages(){
        return [
           'name.required' =>'Please Enter the name of storage',
           'name.unique' =>'Please Enter the name of storage must be unique',
           'description.required' =>'Please Enter the description of storage',
           'mobile.required' =>'Please Enter the mobile number of storage',
           'watts.required' =>'Please Enter the watts app number of storage',
           'facebook.required' =>'Please Enter the faceboke link',
           'facebook.url' =>'the input must be link ',
           'enestegram.required' =>'Please Enter the faceboke link',
           'enestegram.url' =>'the input must be link ',


        ];
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
