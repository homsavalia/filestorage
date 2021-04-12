<?php

namespace App\Http\Controllers\Company;
use App\Http\Controllers\Controller; 
use App\Models\company;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

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
        
        return back()->with(['msg', 'inserted']);

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
              return back();
    }

    public function company_view(Company $company,$id){//company_view
        $company = DB::table('company')
        ->join('countries', 'company.country', '=', 'countries.id')
        ->join('states', 'company.state', '=', 'states.id')
        ->select('company.id','company.uid','company.company_name','company.customFile','company.company_email','company.company_number','countries.name as country','states.name as state','company.city','company.company_address','company.company_postcode')
        ->first();
        return view('admin.company_view',['company' => $company]);
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
            // 'customFile'=>$filename,
            'company_email'=> $request['company_email'],
            'company_number'=>$request['company_number'],
            'country'=>$request['country'],
            'state'=>$request['state'],
            'city'=>$request['city'],
            'company_address'=>$request['company_address'],
            'company_postcode'=>$request['company_postcode'],
            
        ]);
    
        $company->save();
        return back()->with(['msg', 'inserted']);
    }

   }
