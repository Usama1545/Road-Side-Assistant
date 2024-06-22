<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categories extends Controller
{
    // //
    public function index()
    {
      //
      $categories = app('firebase.firestore')->database()->collection('categories')->documents();
      return view('admin/category',compact('categories'));
      // return dd($students);
    }
    public function get(Request $request, $id)
    {
      //
      $categories =app('firebase.firestore')->database()->collection('categories')->document($id)->snapshot();
     $com_data=$categories->data();
    //  dd($com_data);
     return view('admin/update')->with('com_data', $com_data);
    }
    public function destroy($id)
  {
    //
    app('firebase.firestore')->database()->collection('categories')->document($id)->delete();
    return back();
  }
  public function update(Request $request, $id)
  {
    //
    $categoty = app('firebase.firestore')->database()->collection('categories')->document($id)
   ->update([
    ['path' => 'categoryName', 'value' => $request->name],
    ['path' => 'categoryDes', 'value' => $request->description],
   ]);
  }
   public function make_popular(Request $request, $id)
   {
     //
        $categories =app('firebase.firestore')->database()->collection('categories')->document($id)->snapshot();
        $com_data=$categories->data();
         $popular = app('firebase.firestore')->database()->collection('pCategories')->newDocument();
         $popular->set([
          'categoryId' => $com_data['categoryId'],
          'categoryIcon' =>  $com_data['categoryIcon'],
          'categoryImage'    =>  $com_data['categoryImage'],
          'categoryName' => $com_data['categoryName'],
          'categoryDes' =>  $com_data['categoryDes'],
        ]);
        return back()->withInput();
       // return view('admin/update')->with('com_data', $com_data);
  }
  public function p_category()
    {
      //
      $categories = app('firebase.firestore')->database()->collection('pCategories')->documents();
      return view('admin/p_category',compact('categories'));
      // return dd($students);
    }
    public function p_destroy($id)
    {
      //
      app('firebase.firestore')->database()->collection('pCategories')->document($id)->delete();
      return back();
    }
}
