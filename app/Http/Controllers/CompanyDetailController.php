<?php

namespace App\Http\Controllers;

use App\Models\CompanyDetail;
use Illuminate\Http\Request;

class CompanyDetailController extends Controller
{
    public function index(){
        $company = CompanyDetail::first();
        return view('admin.setup', compact('company'));
    }

    public function update(Request $request){

        $id = $request->id;

        $company = CompanyDetail::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
            'email' => 'required|email|max:30',
            'phone' => 'required|string|max:16',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update the account with the validated data
        try{
            $company->update($validatedData);
        }catch(\Exception $e){
            return redirect()->back()->with('success', $e->getMessage());
        }

        // Handle logo upload if a new logo was provided
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logo', 'public');
            $company->logo = $logoPath;
            $company->save();
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Company information updated successfully.');

    }
}
