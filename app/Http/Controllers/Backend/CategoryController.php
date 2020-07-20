<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->orderby('created_at','desc')->simplePaginate(5);

        return view('backend.categories.index')->with([
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.categories.create')->with([
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $name = $request->get('name');
        $slug = $request->get('slug');
        $parent_id = $request->get('parent_id');

        $parent_cateory = Category::find($parent_id);


        $depth = $parent_cateory->depth +1;


        $category->name = $name;
        $category->slug = $slug;
        $category->parent_id = $parent_id;
        $category->depth = $depth;
        $category->save();
        $save = 1;

        if($save){
            $request->session()->flash('success','Tạo mới thành công');
        }else{
            $request->session()->flash('error','Tạo mới thất bại');
        }

        return redirect()->route('backend.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        if($category->depth == 0){
          $categories = Category::where('parent_id',$category->id)->get();

          $category_condition = [];
          foreach ($categories as $category) {
            $category_condition[] = $category->id;

        }
        $products = Product::whereIn('category_id',$category_condition)->orderby('updated_at','desc')->Paginate(12);
    }else{
      $products = $category->products()->orderby('updated_at','desc')->Paginate(16);
  }

  // $products = $category->products;

        // dd($products);
  return view('backend.categories.show')->with([
    'category'=>$category,
    'products'=>$products,
]);
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::get();
        $category = Category::find($id);
        return view('backend.categories.edit')->with([
            'category'=>$category, 
            'categories'=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $name = $request->get('name');
        $slug = $request->get('slug');
        $parent_id = $request->get('parent_id');
        $parent_cateory = Category::find($parent_id);

        $depth = ($parent_cateory->depth) +1;


        $category->name = $name;
        $category->slug = $slug;
        $category->parent_id = $parent_id;
        $category->depth = $depth;
        $category->save();

        return redirect()->route('backend.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('backend.category.index');
    }
}
