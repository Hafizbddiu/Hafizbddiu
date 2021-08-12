<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
// use DB;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');

    }
    public function saveCategory(request $request){

        
     $category=new Category();
      $category->category_name        =$request->category_name;
      $category->category_description =$request->category_description;
      $category->publication_status   =$request->publication_status;
    // Category::create($request->all());
      $category->save();
    // DB::table('categories')->insert([
    //     'category_name'=>$request->category_name,
    //     'category_description' => $request->category_description,
    //     'publication_status'  =>$request->publication_status,

    // ]);

      return redirect('/add-category')->with('message','Category info save successfully');
      

    }

    public function manageCategoryInfo(){
      $categories=Category::all();
      // return $categories;
        return view('admin.category.manage-category',['categories'=>$categories]);

    }
  public function unpublishedCategoryInfo($id,$a){
    $category=Category::find($id);
  
    $category->publication_status =0;
    $category->save();
    return redirect('/manage-category')->with('message','Category info Unpublished');
  }
  public function publishedCategoryInfo($id){
    $category=Category::find($id);
  
    $category->publication_status =1;
    $category->save();
    return redirect('/manage-category')->with('message','Category info published');
  }
  public function editCategoryInfo($id){
    $category=Category::find($id);
    return view('admin.category.edit-category',['category'=>$category]);

  }
  public function updateCategoryInfo(request $request){
    $category=Category::find($request->category_id);
    $category->category_name=$request->category_name;
    $category->category_description=$request->category_description;
    $category->publication_status=$request->publication_status;
    $category->save();
    return redirect('/manage-category')->with('message','Category info update');
  }
  public function deleteCategoryInfo($id){
    $category=Category::find($id);
    $category->delete();
    return redirect('/manage-category')->with('message','Category info Delete');


  }

}
