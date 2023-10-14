<?php
namespace App\Http\Controllers;
use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Companies::paginate(10);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'logo_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:100',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $companyImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $companyImage);
            $input['logo_path'] = "$companyImage";
        }
        Companies::create($input);
        return redirect()->route('companies.index')
            ->with('success','Company created successfully.');
    }

    public function show(Companies $company)
    {
        return view('companies.show', compact('company'));
    }

    public function edit(Companies $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Companies $company)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $companyImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $companyImage);
            $input['logo_path'] = "$companyImage";
        } else {
            unset($input['logo_path']);
        }

        $company->update($input);
        return redirect()->route('companies.index')
            ->with('success','Company updated successfully.');
    }

    public function destroy(Companies $company)
    {
        $company->delete();
        return redirect()->route('companies.index')
            ->with('success','Company deleted successfully');
    }
}