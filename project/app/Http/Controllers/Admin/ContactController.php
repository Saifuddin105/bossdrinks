<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Datatables;

class ContactController extends Controller
{
    public function cotactsDatatables(){
        $datas = Contact::orderBy('id')->get();
        //var_dump($datas);die;
        //--- Integrating This Collection Into Datatables
        foreach($datas as $index => $data){
            $decode = json_decode($data->persional_info);
            $datas[$index]['first_name'] = isset($decode->first_name) ? $decode->first_name:null;
            $datas[$index]['last_name'] = isset($decode->last_name) ? $decode->last_name:null;
            $datas[$index]['email'] = isset($decode->email) ? $decode->email:null;
         }
        return Datatables::of($datas)
                           ->addColumn('action', function(Contact $data) {
                               $class = $data->ban == 0 ? 'drop-success' : 'drop-danger';
                               return '<div class="action-list"><a href="' . route('admin-contact-show',$data->id) . '" > <i class="fas fa-eye"></i> Details</a><a href="javascript:;" class="send" data-email="'. $data->email .'" data-toggle="modal" data-target="#vendorform"><i class="fas fa-envelope"></i> Send</a><a href="javascript:;" data-href="' . route('admin-user-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="delete"><i class="fas fa-trash-alt"></i></a></div>';
                           }) 
                           ->rawColumns(['action'])
                           ->toJson(); 
     }


     public function contacts(){
        return view('admin.contact.index');
    }

    public function contactDetails($id){
        if(!Contact::where('id',$id)->exists())
        {
          
            return redirect()->route('admin.dashboard')->with('unsuccess',__('Sorry the page does not exist.'));
        }
        $data = Contact::findOrFail($id);
  
       
        return view('admin.contact.contact-details',compact('data'));
     }
}
