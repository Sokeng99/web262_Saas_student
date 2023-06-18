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

class ScholarUserController extends Controller
{
    public function __construct()
    {
        // user must be logged in to access this controller
        $this->middleware('userAuth:scholarUser')->except('logout');
    }

    public function upload()
    {

    }

    public function profile($username, $userId)
    {
        // TODO: Join relationship of scholar_user and many researchPapers
        $data = ScholarUser::with('researchPapers')->where('scholar_user_id', $userId)->first();

        if (!$data) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        // return response()->json($data);

        return view('scholar_profile', [
            'userData' => $data,
        ]);
    }

    public function editProfile($username, $userId)
    {
        // TODO: query scholar_user where $userId match
        $data = ScholarUser::where('scholar_user_id', $userId)->first();

        return view('edit-scholar-profile', [
            'user' => $data,
        ]);
    }

    public function saveEditProfile()
    {
        // store the first two input field because by default we place value in the input field
        $storeInput = [
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ];

        // if the change password check is checked
        // we validate password
        if (isset($request['change_password'])) {
            // add hash password to the storeInput array
            $storeInput['password'] = bcrypt($request->input('new_password'));

            // after knowing that the user want to change the password
            // we validate the password first
            $validatePassword = Validator::make(
                $request->input(),
                [
                    // password:companyUser is for custom validation rule
                    // it checks if the password is correct
                    // https://laravel.com/docs/8.x/validation#rule-password
                    'old_password' => ['required', 'min:8', 'password:companyUser'],
                    'new_password' => ['required', 'min:8', 'confirmed'],
                    'new_password_confirmation' => ['required', 'min:8'],
                ],
                [
                    'old_password.password' => 'The old password is incorrect',
                    'old_password.required' => 'The old password is required',
                    'old_password.min' => 'The old password must be at least 8 characters',
                    'new_password.required' => 'The new password is required',
                    'new_password.min' => 'The new password must be at least 8 characters',
                    'new_password.confirmed' => 'The new password confirmation does not match',
                    'new_password_confirmation.required' => 'The new password confirmation is required',
                    'new_password_confirmation.min' => 'The new password confirmation must be at least 8 characters',
                ]
            );

            if ($validatePassword->fails()) {
                return redirect()->back()->withErrors($validatePassword)->withInput($request->all());
            }
        }

        $validator = Validator::make(
            $request->input(),
            [
                // name must be unique but can be the same as the current name
                // https://stackoverflow.com/questions/22405762/laravel-update-model-with-unique-validation-rule-for-attribute
                'name' => ['required', 'max:255', 'unique:company_user,name,' . $userId . ',company_user_id'],
                'email' => ['required', 'email', 'max:255', 'unique:company_user,email,' . $userId . ',company_user_id'],
            ],
            [
                'name.required' => 'The name is required',
                'name.max' => 'The name must not exceed 255 characters',
                'name.unique' => 'The name is already taken',
                'email.required' => 'The email is required',
                'email.email' => 'The email is invalid',
                'email.max' => 'The email must not exceed 255 characters',
                'email.unique' => 'The email is already taken',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $saveChange = CompanyUser::where('company_user_id', $userId)->update($storeInput);

        if (!$saveChange) {
            return redirect()->back()->withErrors('error', 'Failed to save changes');
        } else {
            return redirect()->route('user.company.name.id.profile.edit', [
                'name' => $storeInput['name'],
                'id' => $userId,
            ])->with('success', 'Changes saved');
        }

    }

    public function editResearchPaper()
    {
        // get company_id from query parameter
        $companyId = $request->query('company_id');

        // TODO: query company join with contacts, services, and galleries & query categories separately
        // NOTE: we make sure that the company is owned by the user
        // NOTE: I created a function called contacts in the Company model (it's used to get the contacts of the company)
        $company = Company::with('contacts', 'services', 'galleries')->where([['company_id', $companyId], ['company_user_id', $userId]])->first();

        // join with DB

        $categories = Category::get();

        // json view
        // return response()->json($company);

        return view('edit-company', [
            'company' => $company,
            'categories' => $categories,
        ]);
    }

    public function uploadResearchPaper()
    {

    }

    public function uploadResearchPaperSave()
    {

    }

    public function removeResearchPaper()
    {

    }

    public function saveEditResearchPaper()
    {

    }

}
