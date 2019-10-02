<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\offer;

class offerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.offers.index')->with('offers',Offer::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offers.create');
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
        $image->move('uploads/offers/',  $image_new_name); //path where the images will save*/



        $offer =offer::create([
            "name"=> $request->name,
            "description"=> $request->description,
            "image"=> 'uploads/offers/'. $image_new_name,
            "address"=> $request->address,
            "mobile"=> $request->mobile,
            "watts"=> $request->watts,
            "facebook"=> $request->facebook,
            "enestegram"=> $request->enestegram,
           
           ]);

           $offer->save();
           return redirect()->back();
    }



    /*rules */
    private function rules($id = null){
        $rulls= [
             
              "description"=>"required",
              "address"=>"required",
              "mobile"=>"required",
             "watts"=>"required",
              "facebook"=>"required|url",
              "enestegram"=>"required|url"
           
          ];
  
          if($id){
          $rulls['name']= "required|unique:offers,name," . $id;  //for update
          }
          else{
              $rulls['name']= "required|unique:offers,name,";  //for store
              $rulls['image']="required|image|mimes:jpg,png,jpeg";
          }
          return  $rulls;
        
      }

      /*Messages */

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
    {
        $offer =offer::find($id);
       return view('admin.offers.edit')->with('offer', $offer);
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
        $offer =offer::find($id);
   
        $request->validate($this->rules($id),$this->messages());

        if($request->hasFile('image')){
          $image = $request->image;
          $image_new_name= time().$image->getClientOriginalName(); 
          $image->move('uploads/offers/',  $image_new_name);
          $offer->image ='uploads/offers/'. $image_new_name;
     }

      
            $offer->name= $request->name;
            $offer->description= $request->description;
            $offer->address= $request->address;
            $offer->mobile= $request->mobile;
            $offer->watts= $request->watts;
            $offer->facebook= $request->facebook;
            $offer->enestegram= $request->enestegram;

     $offer->save();
        
     return view('admin.offers.index')->with('offers',Offer::all())
                                      ->with('success','the offer updated Successfyly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer =offer::find($id);
        $offer->delete();
        return redirect()->back()->with('success','the offer Deleted Successfyly');
    }

    public function trashed(){
        $offers = offer::onlyTrashed()->get();
        //dd($post);
      
        return view('admin.offers.trachedOffer')->with('offers',$offers);
    }

       public function restore($id){
        $offer = offer::withTrashed()->where('id',$id)->first();
        $offer->restore();
        return redirect()->back()->with('success','the offer restoreed Successfyly');
    }

    public function hdelete($id){
        $offer= offer::withTrashed()->where('id',$id)->first();
        $offer->forceDelete();
        return redirect()->back();

    }
}
