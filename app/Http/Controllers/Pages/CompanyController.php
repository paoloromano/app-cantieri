<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function uploadLogo(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        if ($company->company_logo
            && $company->company_logo !== 'public/image/0/icon-light-mode.png'){
            Storage::delete($company->company_logo);
        }

        $image = $request->file('company_logo');
        $imageName = time() . '_' . uniqid() . '_' . $image->getClientOriginalName();
        $path = $image->storeAs("public/company/{$id}/company-logo", $imageName);

        $updated = $company->update(['company_logo' => $path]);

        return response()->json([
            'success' => true,
            'message' => 'Logo updated successfully',
            'image' => $path,
        ], 200);
    }

    public function deleteLogo($company_id)
    {
        $company = Company::findOrFail($company_id);

        if ($company->company_logo !== 'public/image/0/icon-light-mode.png'){
            Storage::delete($company->company_logo);
        }

        $company->update(['company_logo' => 'public/image/0/icon-light-mode.png']);

        return response()->json([
            'success' => true,
            'message' => 'Logo deleted successfully'
        ], 200);
    }
}
