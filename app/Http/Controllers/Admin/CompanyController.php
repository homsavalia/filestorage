<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 
use App\Models\company;
use App\Models\file_uploade;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index(){
        return view('admin.addcompany');
    }

    public function company_store(Request $request)
    {
         $request->validate([
            'company_name' => 'required',
            'company_email' => 'required',
            'company_address' => 'required',
            'company_postcode' => 'required',
            'username' => 'required',
            'password' => 'min:6|required_with:confirm-password|same:confirm-password',
            'confirm-password' => 'min:6',
            
        ]);
         $last = DB::table('users')->orderBy('id','desc')->first();
        $u_id = $last->id += 1;

        if($request->hasfile('customFile')){
            $file = $request->file('customFile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uplode/companylogo/',$filename);
            $request -> customFile = $filename;
        }   
        else{
            $filename='';
        }
        
            $company= new company([
            'uid'=>$u_id,
            'company_name' => $request->get('company_name'),
            'customFile' => $filename,
            'company_email' => $request->get('company_email'),
            'company_number' => $request->get('company_number'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'city' => $request->get('city'),
            'company_address' => $request->get('company_address'),
            'company_postcode' => $request->get('company_postcode'),
            'is_delete' => 0,
            
        ]);
        $company->save();
        $User = new User([
            'role'=>'1',
            'username'=>$request->get('username'),
            'password'=>bcrypt($request->get('password')),
            'confirmpassword'=>($request->get('same:password')),
        ]);
        $User->save();
        
        return redirect()->back()->with('msg', 'Company Inserted successfully');

    }

    public function company_list(company $company){
        $company = Company::all()->where('is_delete','0');
        return view('admin.company_display', ['company' => $company]);
    }

    public function company_delete(Company $company,$id){//company_delete
        $company = Company::find($id);
        $UpdateDetails = DB::table('company')
              ->where('id', $id)
              ->update(['is_delete' => 1]);
              return redirect()->back()->with('msg', 'Company Deleted successfully');
    }

    public function company_view(Company $company,$id){//company_view
        // $company = DB::table('company')
        // ->join('countries', 'company.country', '=', 'countries.id')
        // ->join('states', 'company.state', '=', 'states.id')
        // ->select('company.id','company.uid','company.company_name','company.customFile','company.company_email','company.company_number','countries.name as country','states.name as state','company.city','company.company_address','company.company_postcode')
        // ->where('company.id',$id)
        // ->first();
        
        $company=DB::table('company')
        ->join('file_uploade','company.uid','=','file_uploade.cid')
        ->join('countries', 'company.country', '=', 'countries.id')
        ->join('states', 'company.state', '=', 'states.id')
        ->select('company.id','company.uid','company.company_name','company.customFile','company.company_email','company.company_number','countries.name as country','states.name as state','company.city','company.company_address','company.company_postcode','file_uploade.file_name')
        ->where('company.id',$id)
        ->first();

        $last = DB::table('file_uploade')
        ->join('company','company.uid','=','file_uploade.cid')
        ->where('company.id',$id)
        ->sum('file_size');
        $last=$last/1024;
        $last=(int)$last;
    

        return view('admin.company_view',compact('company','last'));
    }
    
    public function company_edit(Company $company,$id)//company_edit
    {
        $company = Company::find($id);
        return view('admin.company_edit', ['company' => $company]);
    }

    public function company_update(Request $request, company $company,$id)//company_update
    {
        
        $company = Company::find($id);
        if($request->hasfile('customFile')){
            $file = $request->file('customFile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uplode/companylogo/',$filename);
            $request -> customFile = $filename;
           
            $company->company_name = $request->get('company_name');
        $company->company_email = $request->get('company_email');
        $company->company_number = $request->get('company_number');
        $company->country = $request->input('country');
        $company->state = $request->input('state');
        $company->city = $request->get('city');
        $company->company_address = $request->get('company_address');
        $company->company_postcode = $request->get('company_postcode');
        $company->customFile = $filename;
        } 
        else{
        
        
        $company->company_name = $request->get('company_name');
        $company->company_email = $request->get('company_email');
        $company->company_number = $request->get('company_number');
        $company->country = $request->input('country');
        $company->state = $request->input('state');
        $company->city = $request->get('city');
        $company->company_address = $request->get('company_address');
        $company->company_postcode = $request->get('company_postcode');
        
        }
        $company->update([
            'company_name'=>$request['company_name'],
            'company_email'=> $request['company_email'],
            'company_number'=>$request['company_number'],
            'country'=>$request['country'],
            'state'=>$request['state'],
            'city'=>$request['city'],
            'company_address'=>$request['company_address'],
            'company_postcode'=>$request['company_postcode'],
            
        ]);
    
        $company->save();
        return redirect()->back()->with('msg', 'Company Updated successfully');
    }
    public function company_customerid(){
        $customer_id = Auth::user()->id;
        $customer = DB::table('customer')->where('cid', $customer_id)->where('is_delete', '0')->get(); 
        
        // $last = DB::table('file_uploade')->sum('file_size'); 
        //     $last=$last/1024;
        //     $last=(int)$last;
            $last = DB::table('file_uploade')->where('cid',$customer_id)->sum('file_size');
            $last=$last/1024;
            $last=(int)$last;
            
            
        return view('company.file_uploade',compact('customer','last'));
    }

    public function company_fileuploade(Request $request){

        $last = DB::table('customer')->where('id',$request->get('uid'))->first();
        $u_id = $last->uid ;
        

            if($request->hasfile('file_name'))
                    {
                        foreach($request->file('file_name') as $file)
                        {
                            $size = $file->getSize();
                            
                            $name = $file->getClientOriginalName();
                            // $decrypted = decrypt($decryptedContent);
                            $extension = $file->getClientOriginalExtension();
                            
                            $name=strtolower($name);
                            
                            $str = str_replace(array( '\'', '"',
                            ',' , ';', '<', '>','-',' '), '_', $name);
                            // $str=encrypt($str);
                            // decrypt($str),
                            $file->move(public_path().'/files/'.$u_id, $str); 

                            $last = DB::table('file_uploade')->where('cid',Auth::user()->id)->sum('file_size'); 
                             $kb=$size/1024;

                             $file_size  = DB::table('customer')->where('cid',Auth::user()->id)->sum('file_size');
                             
                             if($kb>$file_size){
                                return redirect()->back()->with('error', 'your file size is to long');               
                             }
                             else{
                            
                                 $file_uploade = new file_uploade([
                                'cid'=> Auth::user()->id,
                                'uid'=> $request->get('uid'),
                                'file_name'=>$str,
                                'file_size'=>$size,
                            ]);
                                 
                              $file_uploade->save();   
                                 }
                            
                        }
                        
                    }
         return redirect()->back()->with('msg', 'File Uploade successfully');               
   }
}