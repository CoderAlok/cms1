<?php

namespace App\Http\Controllers\ProjectApprovals;

use App\Http\Controllers\Controller;
use Dealers;
use Distributors;
use Engineers;
use Fabricators;
use Illuminate\Http\Request;
use Masons;
use PettyContractors;
use ProjectApprovals;
use Projects;
use Subdealers;

class ProjectApprovalController extends Controller
{
    // To display the approval listing page
    public function index()
    {
        $data['page_title'] = 'Project Approvals';
        $data['page_description'] = 'All information about project approvals';
        $data['data'] = ProjectApprovals::get();
        return view('approvals.project_approvals')->with($data);
    }

    // To fetch all the listing from approval table
    public function fetch(Request $request)
    {
        try {
            $data['status'] = 200;
            $data['message'] = 'Data loaded successfully.';
            $data['data'] = ProjectApprovals::get();
            return response($data, 200);
        } catch (\Exception$error) {
            $data['status'] = 500;
            $data['message'] = 'Internal server error ... ';
            $data['data'] = $error->getMessage();
            return response($data, 500);
        }
    }

    // To create an approval
    public function create(Request $request)
    {
        try {

            $projects = Projects::get();
            $distributors = Distributors::get();

            $dealers = Dealers::with('getState:state_id,name')->with('getDistrict')->with('getDistributor')->get();

            $subdealers = Subdealers::get();
            $fabricators = Fabricators::get();
            $engineers = Engineers::get();
            $masons = Masons::get();
            $pettyContractors = PettyContractors::get();

            $data['page_title'] = 'Create Project Approvals';
            $data['page_description'] = 'All information about project approvals will be added here.';
            $data['project_data'] = Projects::get();
            $data['account_data'] = [
                // $projects->toArray(),
                // $distributors->toArray(),
                // $dealers->toArray(),
                // $subdealers->toArray(),
                // $fabricators->toArray(),
                // $engineers->toArray(),
                // $masons->toArray(),
                // $pettyContractors->toArray(),
            ];

            return ($dealers);

            // return view('approvals.create_project_approvals')->with($data);
        } catch (\Exception$error) {
            $data['status'] = 500;
            $data['message'] = 'Internal server error ... ';
            $data['data'] = $error->getMessage();
            return response($data, 500);
        }
    }

    /**
     * @param
     * @return
     */
    public function store(Request $request)
    {
        try {

            $data['status'] = 200;
            $data['message'] = 'Data added successfully.';
            $data['data'] = [];
            return response($data, 200);
        } catch (\Exception$error) {
            $data['status'] = 500;
            $data['message'] = 'Internal server error ... ';
            $data['data'] = $error->getMessage();
            return response($data, 500);
        }
    }
}
