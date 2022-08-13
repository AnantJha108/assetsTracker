<?php

namespace App\Http\Controllers;

use App\Models\AssetsType;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AssetsTypeController extends Controller
{
    
    public function index()
    {
        return view ("pages/manageAssetType",['assetsType' => AssetsType::all()]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'assets_type_name' => 'required',
            'assets_type_description' => 'required',
        ]);
        AssetsType::create($data);
        return redirect()->route("assetsType.index"); 
    }

    
    public function show(AssetsType $assetsType)
    {
        //
    }

    
    public function edit(AssetsType $assetsType)
    {
        //
    }

    
    public function update(Request $request, AssetsType $assetsType)
    {
        //
    }

    
    public function destroy(AssetsType $assetsType)
    {
        $assetsType->delete();
        return redirect()->route("assetsType.index");
    }
}
