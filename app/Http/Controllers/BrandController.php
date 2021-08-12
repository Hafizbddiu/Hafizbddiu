<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
   
   
    public function addBrandInfo(){
        return view('admin.brand.add-brand');
      }
   
      public function sveBrandInfo( Request $request){

        $this->validate($request,[
            'brand_name'=>'required|regex:/^[\pL\s\-]+$/u|max:15|min:5',
        
          'brand_description'=>'required',
          'publication_status'=>'required'

          ]);

         $brand = new brand();
         $brand->brand_name = $request->brand_name;
         $brand->brand_description = $request->brand_description;
         $brand->publication_status = $request->publication_status;
          $brand->save();
          return redirect('/add/brand')->with('message','Brand Info save Successfully');

      } 
      public function manageBrandInfo(){
        $brands=Brand::all();
          return view('admin.brand.manage-brand',['brands'=>$brands]);
  
      } 
      public function unpublishedBrandInfo($id){
        $brand=Brand::find($id);
      
        $brand->publication_status =0;
        $brand->save();
        return redirect('/manage/brand')->with('message','Brand info Unpublished');
      }
      public function publishedBrandInfo($id){
        $brand=Brand::find($id);
      
        $brand->publication_status =1;
        $brand->save();
        return redirect('/manage/brand')->with('message','Brand info published');
      }

      public function editBrandInfo($id){
        $brand=Brand::find($id);
        return view('admin.brand.edit-brand',['brand'=>$brand]);
    
      }
      public function updateBrandInfo(Request $request){

        
        $this->validate($request,[
          'brand_name'=>'required|regex:/^[\pL\s\-]+$/u|max:15|min:5',
      
        'brand_description'=>'required',
        'publication_status'=>'required'

        ]);


        


        $brand=Brand::find($request->brand_id);
        $brand->brand_name=$request->brand_name;
        $brand->brand_description=$request->brand_description;
        $brand->publication_status=$request->publication_status;
        $brand->save();
        return redirect('/manage/brand')->with('message','Brand info update');
      }
      public function deleteBrandInfo($id){
        $brand=Brand::find($id);
        $brand->delete();
        return redirect('/manage/brand')->with('message','Brand info Delete');
    
    
      }
    
}
