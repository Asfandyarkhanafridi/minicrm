<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\Mail;

use function Illuminate\Mail\Mailables\subject;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::paginate(10);
        return view('company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        $company =  Company::create($request->all());
        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $filename = time(). '.' .$logo->getClientOriginalExtension();
            $request->file('logo')->storeAs('public' , $filename);
            $company->logo = $filename;
        }
        $company->save();

        Mail::send('emails.companyRegistered',$company->toArray(),function ($message){
            $message->to('masfandy9@gmail.com', 'Asfand Afridi')->subject('Company Registered');
        });

        return redirect()->back()->with('message','Company Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($language, Company $company)
    {
        return view('company.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($language, Company $company)
    {
        return view('company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, $language, Company $company)
    {
        $company->update($request->all());

        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $filename = time(). '.' .$logo->getClientOriginalExtension();
            $request->file('logo')->storeAs('public' , $filename);
            $company->logo = $filename;
        }
        $company->save();

        return redirect()->back()->with('message','Company Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($language, Company $company)
    {
        $company->employees()->delete();
        $company->delete();
        return redirect()->route('company.index', app()->getLocale())->with('errorMessage','Company Deleted');
    }
}
