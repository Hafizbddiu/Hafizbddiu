<?php

namespace App\Http\Controllers;
use App\Product;
use App\Brand;
use App\Category;
use Image;
use DB;
use Illuminate\Http\Request;


class productController extends Controller
{
    public function index(){
        $categories=Category::where('publication_status',1)->get();
        $brands=Brand::where('publication_status',1)->get();

        return view('admin.product.add-product',[
          'categories'=> $categories,
          'brands'=> $brands,

        ]);
    }

    public function manageProductInfo(){
      return view('admin.product.manage-product');

    }

    protected function productInfovalidate($request){
      $this->validate($request,[
        'product_name'=>'required'
      ]);

    }
    protected function productImageUpload($request){

      $fileType=$productImage->getClientoriginalName();
        $imageName=$request->product_name.'.'.$fileType;

        
      $imageName = $productImage->getClientoriginalName();
      $directory='product-images/'; 
      $imageUrl=$directory.$imageName;
      // $productImage->move($directory,$imageName);
      Image::make($productImage)->resize(200,200)->save($imageUrl);
      return $imageUrl;
    }

    protected function saveProductBasicInfo($request,$imageUrl){
      $product=new Product();
      $product->category_id= $request->category_id;
      $product->brand_id= $request->brand_id;
      $product->product_name= $request->product_name;
      $product->product_price= $request->product_price;
      $product->product_quantity= $request->product_quantity;
      $product->short_description= $request->short_description;
      $product->long_description= $request->long_description;
      $product->product_image = $imageUrl;
      $product->publication_status= $request->publication_status;
      $product->save();

    }

    public function saveProduct(Request $request){

    $this->productInfovalidate($request);
    $imageUrl = $this->productImageUpload($request);
      $this->saveProductBasicInfo($request,$imageUrl);
       
        return redirect('/add/product')->with('message','Product info save successfully');
    }
    public function manageProduct(){
      
    
      $products = DB::table('products')
                   ->join('categories','products.category_id','=','categories.id')
                   ->join('brands','products.brand_id','=','brands.id')
                   ->select('products.*','categories.category_name','brands.brand_name')
                   ->get();
      // return $products;
      return view('admin.product.manage-product',['products'=>$products]);
    }


    public function unpublishedProductInfo($id){
      $product=Product::find($id);
    
      $product->publication_status =0;
      $product->save();
      return redirect('/product/manage')->with('message','Product info Unpublished');
    }
    public function publishedProductInfo($id){
      $product=product::find($id);
    
      $product->publication_status =1;
      $product->save();
      return redirect('/product/manage')->with('message','Product info published');
    }

    public function editProductInfo($id){
      $product=Product::find($id);
      $categories=Category::where('publication_status',1)->get();
      $brands=Brand::where('publication_status',1)->get();
      return view('admin.product.edit-product',[
        'product'=>$product,
        'categories'=>$categories,
        'brands'=>$brands
      ]);
      
     
    }

   

    public function productBasicInfoUpdate($request,$product,$imageUrl=null){
      $product->category_id= $request->category_id;
      $product->brand_id= $request->brand_id;
      $product->product_name= $request->product_name;
      $product->product_price= $request->product_price;
      $product->product_quantity= $request->product_quantity;
      $product->short_description= $request->short_description;
      $product->long_description= $request->long_description;
      if($imageUrl){
        $product->product_image = $imageUrl;
       }
  
      $product->publication_status= $request->publication_status;

    
      $product->save();

     }


    public function updateProductInfo(Request $request){


      // $productImage=$request->file('product_image');
      // echo $productImage->getClientOrginalExtension();
      // $product = Product::findOrFail($id);

      $product =Product::find($request->product_id);

      $productImage = $request->file('product_image');
     


      if($productImage){
        
        unlink($product->product_image);
      
        $imageUrl=$this->productImageUpload($request);

      
        $this->productBasicInfoUpdate($request,$product,$imageUrl);
        
       

      }else{
       
        $this->productBasicInfoUpdate($request,$product);
      

      }
      return redirect('/product/manage')->with('message','product info updated');


      // $this->validate($request,[
      //   'product_name'=>'required|regex:/^[\pL\s\-]+$/u|max:15|min:5',
    
      // 'product_description'=>'required',
      // 'publication_status'=>'required'

      // ]);


      
    }
    public function deleteProductInfo($id){
      $product=Product::find($id);
      $product->delete();
      return redirect('/product/manage')->with('message','Product info Delete');
  
  
    }
}
