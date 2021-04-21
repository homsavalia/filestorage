<?php

namespace App\Http\Controllers\Company;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\User;
use App\Models\file_uploade;
use DB;
use Auth;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class CustomerController extends Controller
{
    public function index(){
        return view('company.addcustomer');
    }

    public function customer_store(Request $request){
        
        $request->validate([
            
            'customer_name'=>'required',
            'customer_email'=>'required',
            'customer_address'=>'required',
            'customer_postcode'=>'required',
            'username'=>'required',
            'password' => 'min:6|required_with:confirm-password|same:confirm-password',
            'confirm-password' => 'min:6',
        ]);

        $last = DB::table('users')->orderBy('id','desc')->first();
        $u_id = $last->id += 1;
    
        $customer = new customer([
            'cid'=>Auth::user()->id,
            'uid'=>$u_id,
            'customer_name'=>$request->get('customer_name'),
            'customer_email'=>$request->get('customer_email'),
            'customer_number'=>$request->get('customer_number'),
            'country'=>$request->get('country'),
            'state'=>$request->get('state'),
            'city'=>$request->get('city'),
            'customer_address'=>$request->get('customer_address'),
            'customer_postcode'=>$request->get('customer_postcode'),
        ]);
        $customer->save();
       
        $User = new User([
            'role'=>'2',
            'username'=>$request->get('username'),
            'password'=>bcrypt($request->get('password')),
        ]);
        
        
        $User->save();
        
        $path = public_path().'/files/'.$u_id;
        File::makeDirectory($path,$mode = 0777, true, true);

        return redirect()->back()->with('msg', 'Customer Inserted successfully');
    }
    public function customer_list(customer $customer){
        $customer = Customer::all()->where('is_delete','0');;
        return view('company.customer_display', ['customer' => $customer]);
    }
    public function customer_view(customer $customer,$id){
        $customer = DB::table('customer')
        ->join('countries', 'customer.country', '=', 'countries.id')
        ->join('states', 'customer.state', '=', 'states.id')
        ->select('customer.id','customer.uid','customer.customer_name','customer.customer_email',
        'customer.customer_number','countries.name as country','states.name as state','customer.city','customer.customer_address','customer.customer_postcode')
        ->where('customer.id',$id)
        ->first();
        
        return view('company.customer_view', ['customer' => $customer]);
    }
    public function customer_delete(customer $customer,$id){
        $customer = Customer::find($id);
        $UpdateDetails = DB::table('customer')
              ->where('id', $id)
              ->update(['is_delete' => 1]);
              return redirect()->back()->with('msg', 'Customer Deleted successfully');
    }

    public function customer_edit(customer $customer,$id)
    {
        $customer = Customer::find($id);
        return view('company.customer_edit', ['customer' => $customer]);
    }

    public function customer_update(Request $request, customer $customer,$id)
    {
        
        $customer = Customer::find($id);
         
        $customer->customer_name = $request->get('customer_name');
        $customer->customer_email = $request->get('customer_email');
        $customer->customer_number = $request->get('customer_number');
        $customer->country = $request->get('country');
        $customer->state = $request->get('state');
        $customer->city = $request->get('city');
        $customer->customer_address = $request->get('customer_address');
        $customer->customer_postcode = $request->get('customer_postcode');
         
        $customer->update([
            'customer_name'=>$request['customer_name'],
            'customer_email'=> $request['customer_email'],
            'customer_number'=>$request['customer_number'],
            'country'=>$request['country'],
            'state'=>$request['state'],
            'city'=>$request['city'],
            'customer_address'=>$request['customer_address'],
            'customer_postcode'=>$request['customer_postcode'],
            
        ]);
    
        $customer->save();
        return redirect()->back()->with('msg', 'Customer Updated successfully');
    }
    public function view_file()
    {
        $file = DB::table('file_uploade')
        ->join('customer', 'file_uploade.uid', '=', 'customer.id')
        ->select('file_uploade.file_name','file_uploade.uid as fileuploade_uid','file_uploade.id','file_uploade.file_size','customer.uid as customer_uid')
        ->where('customer.uid',Auth::user()->id)
        ->get();

        return view('customer.file_downlode',compact('file'));
    }
    public function customer_viewfile(Request $request,file $file,$id)
    {   
        $file = DB::table('file_uploade')
        ->join('customer', 'file_uploade.uid', '=', 'customer.id')
        ->select('file_uploade.file_name','file_uploade.uid','file_uploade.id','file_uploade.file_size','customer.uid')
        ->where('file_uploade.uid',$id)
        ->get();
        
                            
        return view('company.customer_fileview',compact('file'));
    }
}
