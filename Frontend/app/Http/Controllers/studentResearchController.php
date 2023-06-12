<?php

namespace App\Http\Controllers;

use App\Models\StudentResearch; // call model
use Illuminate\Http\Request; // call form/get/post
use Illuminate\Support\Facades\DB; // include DB Class

class studentResearchController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function upload(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $fileName = time(). "-ws.". $request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('public/uploads', $fileName);
    }
        // //fn show form
        // public function saverecord(Request $req){
    
        //     $db = new Members(); // call model 
    
        //     // Forming the field
    
        //     // $db->mem_id = "";
        //     // $db->created_at = "";
        //     // $db->updated_at = "";
            
        //        $db->mem_lname = $req->lname;
        //        $db->mem_fname = $req->fname;
    
        //        $db->mem_email = $req->buz_email;
        //        $db->mem_buz_name = $req->buz_name;
        //        $db->mem_website = $req->buz_website;
    
    
        //        $db->social_net = implode(',',$req->sm);  // convert array into string
        //        $db->mem_plan = $req->plan;
    
        //        $db->inspired_acc_ig = $req->tx_intestering;
    
        //     // Saving
        //     $db->save();
    
        //     // redirect to homepage or same page
        //     //return view("members.register");
        //     return redirect('/member-list')->with('msg', 'Data Has Been inserted');
    
        // }
        // //fn show form
        // public function memberlist(){
    
        //     /*
        //    $db_member = DB::table('tbl_members')->get();
        //    return view("members.memberlist",[ "v_member"=> $db_member ] );
    
        //    */
    
        //    $db_member = DB::table('tbl_members')
        //         ->join('tbl_mem_pan', 'tbl_mem_pan.plan_id', '=', 'tbl_members.mem_plan')
        //         ->select('tbl_members.*', 'tbl_mem_pan.plan_name')
        //         ->get();
            
        //     //Query the table social network
        //     $db_social = DB::select('select * from tbl_socialnet');
    
        //     return view("members.memberlist",[ 
        //         "v_member"=> $db_member,
        //         "v_social"=> $db_social
        //         ] );
    
        // }
    
        // //fn delete
        // public function memberdelete(Request $req){
    
        //      $r_id = $req->id;
        //     //die();
    
        //     //Option #1
        //     //$deleted = Members::where('mem_id', $r_id)->delete();
    
        //     //Option #2
        //     $deleted = DB::table('tbl_members')->where('mem_id', '=', $r_id)->delete();
    
        //     //redirect
        //     return redirect('/member-list')->with('msg', 'Data deleted');
    
            
        // }
    
    
        // //fn form for editing
        // public function showformedit(Request $req){
    
        //     // Get from form
        //     $r_id = $req->id;
    
        //     //Query
        //      $db_member = DB::select('select * from tbl_members where mem_id = ?', [$r_id ]);
    
        //      //Query the table social network
        //     $db_social = DB::select('select * from tbl_socialnet');
    
        //     //Query the table social network
        //     $db_plan = DB::select('select * from tbl_mem_pan');
    
        //     return view("members.memberedit",
            
        //     [ 
        //         "v_social" => $db_social,
        //         "v_plan" => $db_plan,
        //         "v_member"=> $db_member 
                
        //     ] 
        
        // );
        // }
    
        // //fn form updating
        // public function showformupdate(Request $req){
    
        //     //Option #3 Okay by find id
        //     // Get from form
        //     $r_id = $req->mem_id;
    
    
        //     $db = Members::find($r_id);
    
        //     // $db->mem_id = "";
        //     // $db->created_at = "";
        //     // $db->updated_at = "";
            
        //     $db->mem_lname = $req->lname;
        //     $db->mem_fname = $req->fname;
    
        //     $db->mem_email = $req->buz_email;
        //     $db->mem_buz_name = $req->buz_name;
        //     $db->mem_website = $req->buz_website;
    
    
        //     $db->social_net = implode(',',$req->sm);  // convert array into string
        //     $db->mem_plan = $req->plan;
    
    
        //     $db->inspired_acc_ig = $req->tx_intestering;
    
        //     // Saving
        //      $db->save();
    
        //     return redirect('/member-list')->with('msg', 'Data has been updated');
    
        // }
}
