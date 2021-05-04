<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Crypt;

class AdminController extends Controller
{
    
    public function login()
    {
        return view('admin/login');
    }

    public function info()
    {
        $result['data']=DB::table('info')->get();
        return view('admin/info',$result);
    }
    public function add_info(Request $request,$id="")
    {
        if($id>0){
            $arr=DB::table('info')->where('id',$id)->get();
            $result['hotel_name']=$arr['0']->hotel_name;
            $result['gst_no']=$arr['0']->gst_no;
            $result['email']=$arr['0']->email;
            $result['phone_no']=$arr['0']->phone_no;
            $result['id']=$arr['0']->id;
        }else{
             $result['hotel_name']="";
             $result['gst_no']="";
             $result['email']="";
             $result['phone_no']="";
             $result['id']=0;
        }
         return view('admin/manage_info',$result);
    }
    public function manage_info(Request $request,$id=" ")
    {
        if($request->post('id')>0){
            $model=DB::table('info')->where('id',$request->id)->update(['hotel_name'=>$request->hotel_name,'gst_no'=>$request->gst,'email'=>$request->email,'phone_no'=>$request->phone]);
            $mes="Infomashion Update";
        }
        else{
            $arr=[
               "hotel_name"=>$request->hotel_name,
               "gst_no"=>$request->gst,
               "email"=>$request->email,
               "phone_no"=>$request->phone
            ];
            $model =DB::table('info')->insert($arr);
            $mes="Infomashion Add";
            
        }
        $request->session()->flash('message',$mes);
        return redirect('info');
    }

    public function delete(Request $request,$id){
        $model=DB::table('info')->where('id',$id)->delete();
        $mes="Informashion Delete";
        $request->session()->flash('message',$mes);
        return redirect('info');
    }
    

    public function login_manage(Request $request)
    {

       /* echo "<pre>";
        print_r($request->username);
        print_r($request->password);
        die();*/
        //return view('login');
        /*$un="admin";
        $pw="admin";
        $arr=[
            "username"=>$un,
            "password"=>Crypt::encrypt($pw),
            "created_at"=>date('Y-m-d h:i:s'),
            "updated_at"=>date('Y-m-d h:i:s')
        ];
       DB::table('admins')->insert($arr);
        echo "done1";*/
        $un=$request->username;
        $pw=$request->password;
        $result=DB::table('admins')->where(['username'=>$un])->get();
        if(isset($result[0]->id)){
            $pw1=Crypt::decrypt($result[0]->password);
           if($pw==$pw1)
           {
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result['0']->id);
                return redirect('admin');
           }else
           {
            $request->session()->flash('error','Please enter valid login details');
            return redirect('login');
           }
        }
        return redirect('login');
    }
    public function admin_bill(){
      
        $result['data']=DB::table('bill')->distinct()->select('u_id','customer_name','date')->get();
        
        return view('admin/bill',$result);
    }
    public function view_bill(Request $request,$u_id,$str){
        $result['info']=DB::table('info')->get();
        $result['data']=DB::table('bill')
        ->leftJoin('menus','menus.id','=','bill.product_id')
        ->where('customer_name',$str)
        ->where('u_id',$u_id)
        ->select('bill.weight','menus.*')
        ->get();

        /*echo '<pre>';
        print_r($result['data'][0]->price);
        die();*/
       
        return view('admin/view_bill',$result);
    }
}