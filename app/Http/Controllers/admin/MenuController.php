<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu()
    {
        $result['data']=DB::table('menus')->get();
      
        return view('admin/menu',$result);
    }

    public function add_menu(Request $request,$id=" ")
    {
       if($id>0){
           $arr=DB::table('menus')->where('id',$id)->get();
           $result['category_id']=$arr['0']->category_id;
           $result['product_name']=$arr['0']->product_name;
           $result['weight']=$arr['0']->qty;
           $result['price']=$arr['0']->price;
           $result['id']=$arr['0']->id;
       }else{
           
          /* echo '<pre>';
           print_r($arr);
           die();*/
           $result['category_id']="";
            $result['product_name']="";
           $result['weight']="";
           $result['price']="";
            $result['id']=0;
        }
            $result['category']=DB::table('categories')->where('status',1)->get();
  
       
        return view('admin/manage_menu',$result);
    }

    
    public function manage_menu(Request $request)
    {
        if($request->post('id')>0)
        {
            $model=DB::table('menus')->where('id',$request->id)->update(array("product_name"=>$request->product,"category_id"=>$request->category_id, "qty"=>$request->weight,"price"=>$request->price));
            
            $mes="Product Update";
        }else{
            $arr=[
                "product_name"=>$request->product,
                "category_id"=>$request->category_id,
                "qty"=>$request->weight,
                "price"=>$request->price,
                "status"=>1,
                "created_at"=>date('Y-m-d h:i:s'),
                "updated_at"=>date('Y-m-d h:i:s')
            ];
            $model = DB::table('menus')->insert($arr);
            $mes="Menu Add";
        }
        $request->session()->flash('message',$mes);
        return redirect('menu');
    }

    public function status(Request $request,$status,$id)
    {
        
        $model=DB::table('menus')->where('id',$id)->update(['status'=>$status]);
        $mes="Product Status Update";
        $request->session()->flash('message',$mes);
        return redirect('menu');
    }

    public function delete(Request $request,$id)
    {
        $model=DB::table('menus')->where('id',$id)->delete();
        $mes="Product Delete";
        $request->session()->flash('message',$mes);
        return redirect('menu');
        
    }
}
