<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\category;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    
    public function category(Request $request)
    {
        if($request->session()->has('ADMIN_LOGIN')){
           
        }else{
            $request->session()->flash('error','Access Denied');
            return redirect('login');
        }
        $result['data']=DB::table('categories')->get();
        /*echo '<pre>';
        print_r($result);
        die();*/
        return view('admin/category',$result);
    }
    public function add_category(Request $request,$id=" ")
    {
       if($id>0){
           $arr=DB::table('categories')->where('id',$id)->get();
           $result['category_name']=$arr['0']->category_name;
           $result['id']=$arr['0']->id;
       }else{
            $result['category_name']="";
            $result['id']=0;
       }
        return view('admin/manage_category',$result);
    }

    public function manage_category(Request $request)
    {
        $request->validate([
            'category'=>'required|unique:categories,category_name',
        ]);

        if($request->post('id')>0){
            $model=DB::table('categories')->where('id',$request->id)->update(['category_name'=>$request->category]);
            $mes="Category Update";
        }else{
            $arr=[
                "category_name"=>$request->category,
                "status"=>1,
                "created_at"=>date('Y-m-d h:i:s'),
                "updated_at"=>date('Y-m-d h:i:s')
            ];
            $model =DB::table('categories')->insert($arr);
            $mes="Category Add";
        }
        $request->session()->flash('message',$mes);
        return redirect('admin');
    }

  
    public function status(Request $request,$status,$id)
    {
        
        $model=DB::table('categories')->where('id',$id)->update(['status'=>$status]);
        $mes="Category Status Update";
        $request->session()->flash('message',$mes);
        return redirect('admin');
    }

    public function delete(Request $request,$id)
    {
        $model=DB::table('categories')->where('id',$id)->delete();
        $mes="Category Delete";
        $request->session()->flash('message',$mes);
        return redirect('admin');
        
    }
  



}
