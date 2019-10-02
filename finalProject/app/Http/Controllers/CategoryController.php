<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $category = new Category;
        return view('admin.category.index')->with('categories',category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //dd($request->all());
        $request->validate($this->rules(),$this->messages());

              //image data for uploade
              $image = $request->image;
              $image_new_name= time().$image->getClientOriginalName(); 
              $image->move('uploads/category/',  $image_new_name); //path where the images will save*/


                $category = Category::create([
                    "name"=> $request->name,
                    "description"=> $request->description,
                    "image"=> 'uploads/category/'. $image_new_name

                ]);
      
       $category->save();
       return redirect()->back()->with('success','Category saved successfuly');
    }

    private function rules($id = null){
      $rulls= [
           
            "description"=>"required",
         
        ];

        if($id){
        $rulls['name']= "required|unique:categories,name," . $id;  //for update
        }
        else{
            $rulls['name']= "required|unique:categories ,name,";  //for store
            $rulls['image']="required|image|mimes:jpg,png,jpeg";
        }
        return  $rulls;
      
    }

    private function messages(){
        return [
        'name.required' => 'please enter the name of service category',
        'name.unique'=>'!! the name f category must be unique',
        'description.required'=>'please enter the description of service category',
        'image.required'=>'Please Select the image category',
        'image.mimes'=>'the type of image alloewd are jpg , png , jpeg'
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
    {    $categories = Category::all();
        $category = Category ::find($id);
        return view('admin.category.edit')->with('category' ,$category )
                                          ->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    { //   dd($request->all()); 
        $category = Category ::find($id);
        //VAlidation
    $request->validate($this->rules($id),$this->messages());

                    //في حال بدو المستخدم يعدل الصورة
        if($request->hasFile('image')){
              $image = $request->image;
              $image_new_name= time().$image->getClientOriginalName(); 
              $image->move('uploads/category/',  $image_new_name);
              $category->image ='uploads/category/'. $image_new_name;
         }
       //  dd( $category);

         $category->name = $request->name;
         $category->description= $request->description;
         $category->save();
         return view('admin.category.index')->with('categories',category::all())
                                             ->with('success','Category updated successfuly');
        //dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $category = Category ::find($id);
        $category->delete();
        return redirect()->route('index_category');
    }


    public function trashed(){
        $categories = Category ::onlyTrashed()->get();
        //dd($post);
      
        return view('admin.category.trashed')->with('categories',$categories);
    }

    public function restore($id){
        $categories = Category ::withTrashed()->where('id',$id)->first();
        $categories ->restore();
        return redirect()->back();
    }
    public function hdelete($id){
        $categories = Category::withTrashed()->where('id',$id)->first();
        $categories->forceDelete();
        return redirect()->back();

    }
}
