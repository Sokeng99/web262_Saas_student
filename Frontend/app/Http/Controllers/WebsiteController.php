<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Download;
use App\Models\ResearchPaper;
use App\Models\ScholarUser;
use App\Models\ScholarUserProfile;
use App\Models\StudentUser;
use App\Models\StudentUserProfile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function researchPaperDetail($researchPaperName)
    {
        // TODO: query company by company name join with contacts, rates, feedbacks service rates
        // https://laravel.com/docs/8.x/eloquent-relationships#average-aggregate
        
        $company = Company::with('contacts', 'rates', 'feedbacks.normalUser', 'services', 'rates')
            ->withAvg('rates as avg_star_rate', 'star_number')
            ->where('name', $companyName)->first();
        $currentUserRateNumber = null;

        if (Auth::guard('normalUser')->check()) {
            $currentUserRateNumber = Rate::where([
                ['normal_user_id', '=', Auth::guard('normalUser')->user()->normal_user_id],
                ['company_id', '=', $company->company_id],
            ])->first();
        }

        // return response()->json($company);

        return view('company-detail', [
            'company' => $company,
            'categoryName' => $categoryName,
            'companyName' => $companyName,
            'currentUserRateNumber' => $currentUserRateNumber ? $currentUserRateNumber->star_number : null,
        ]);
    }

    public function search(Request $request)
    {
        $search_by = $request->input('search_by');
        $search_query = $request->input('search_query');
        $result = [];

        // if ($search_query) {
        if ($search_by == 'company') {
            $result = Company::with('contacts', 'rates', 'category')
                ->withAvg('rates as avg_star_rate', 'star_number')
                ->where('name', 'like', '%' . $search_query . '%')->get();
        } else if ($search_by == 'category') {
            $result = Category::where('name', 'like', '%' . $search_query . '%')->get();
        }
        // }

        // return response()->json($result);

        return view('search-results', [
            'search_query' => $search_query,
            'search_by' => $search_by,
            'result' => $result,
        ]);
    }

    public function downloadResearchPaper(Request $request, $categoryName, $companyName)
    {
        if (!Auth::guard('normalUser')->check()) {
            return redirect()->back()->with('error', 'You must login as a normal user to save company');
        }


        $company_id = $request->input('company_id');
        $currentUserId = Auth::guard('normalUser')->user()->normal_user_id;

        $checkSavedCompanyHistory = SavedCompany::where([
            ['normal_user_id', '=', $currentUserId],
            ['company_id', '=', $company_id],
        ])->first();

        if ($checkSavedCompanyHistory) {
            return redirect()->back()->with('error', 'Company has already been saved in your list');
        }

        $saveCompany = SavedCompany::create([
            'normal_user_id' => $currentUserId,
            'company_id' => $company_id,
        ]);

        if ($saveCompany) {
            return redirect()->back()->with('success', 'Company has been saved in your list');
        } else {
            return redirect()->back()->with('error', 'Failed to save company in your list');
        }
    }
}
