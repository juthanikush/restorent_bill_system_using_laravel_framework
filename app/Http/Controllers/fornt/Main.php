<?php

namespace App\Http\Controllers\fornt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function user(){
        $result['data']=DB::table('menus')->get();
        return view('user/bill',$result);
    }
    public function billing_detalis(Request $request){

        $u_id=$request->post('u_id');
        $cn=$request->post('customer_name');
        $pn=$request->post('name');
        $we=$request->post('weight');
        $request->session()->put('USER_NAME',$cn);
        $request->session()->put('USER_ID',$u_id);
        foreach($we as $key=>$val){
            $producyAttrArr=[];
            $producyAttrArr['u_id']=$u_id;
            $producyAttrArr['customer_name']=$cn;
            $producyAttrArr['product_id']=$pn[$key];
            $producyAttrArr['weight']=$we[$key];
            $producyAttrArr['date']=date('Y-m-d');

            $model=DB::table('bill')->insert($producyAttrArr);
        }
        
        return redirect('finsh');
    }
    public function finsh(Request $request){

        $name=$request->session()->get('USER_NAME');
        $u_id=$request->session()->get('USER_ID');
        $result['info']=DB::table('info')->get();
        /*$result['pro']=DB::table('bill')->select('product_id','weight')->where('customer_name',$name)->get();
        //$result['weight']=DB::table('bill')->select('weight')->where('customer_name',$name)->get();
//$result1=DB::table('menus')->where('customer_name',$name)->get();*/


        $result['data']=DB::table('bill')
        ->leftJoin('menus','menus.id','=','bill.product_id')
        ->where('customer_name',$name)
        ->where('u_id',$u_id)
        ->where('date',date('Y-m-d'))
        ->select('bill.weight','menus.*')
        ->get();

        /*echo '<pre>';
        print_r($result['data'][0]->price);
        die();*/
       
        return view('user/finsh',$result);
    }
}
