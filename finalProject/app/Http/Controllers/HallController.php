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
      $request->validate($this->rules(),$this->messages());
    
            //image data for uploade
            $image = $request->image;
            $image_new_name= time().$image->getClientOriginalName(); 
            $image->move('uploads/services/',  $image_new_name); //path where the images will save*/

            $hall = Hall::create([
              'name'=>$request->name,
              'category_id'=>$request->category_id,
              'description'=>$request->description,
              'vedio_link'=>$request->vedio_link,
              "image"=> 'uploads/services/'. $image_new_name,
              'address'=>$request->address,
              'mobile'=>$request->mobile,
              'watts'=>$request->watts,
              'facebook'=>$request->facebook,
              'enestegram'=>$request->enestegram
            ]);

            $hall->save();
             return redirect()->back();
    }

private function rules($id = null){

    $rulls =[

      "category_id"=>"required",
      "description"=>"required",
      "vedio_link"=>"required",
       "address"=>"required",
       "mobile"=>"required",
      "watts"=>"required",
       "facebook"=>"required|url",
       "enestegram"=>"required|url"
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

      /*  $this->validate($request,[
          // "category_id"=>"required",
            "name"=>"required",
            "description"=>"required",
            "vedio_link"=>"required",
           // 'image'=>'required',
             "address"=>"required",
            // "mobile"=>"required|int|max:10",
           // "watts"=>"required|int|max:13",
             "facebook"=>"required",
             "enestegram"=>"required"
          ]);*/
          $request->validate($this->rules($id),$this->messages());

          if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name= time().$image->getClientOriginalName(); 
            $image->move('uploads/halls/',  $image_new_name);
            $hall ->image ='uploads/halls/'. $image_new_name;
       }

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
          
          $i =1 ;
        return view('admin.halls.index')->with('halls',Hall::all())
                                        ->with('i',$i );

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
