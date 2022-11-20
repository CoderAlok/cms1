<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Customers;
use District;
use Illuminate\Http\Request;
use State;
use Subdealers;

class TestController extends Controller
{
    //
    public function __construct()
    {}

    /**
     * Get all the states
     * @return state array
     */
    public function getState(Request $request)
    {
        try {
            $state = State::get();
            $data['message'] = 'States fetched successfully.';
            $data['data'] = $state;
            return response($data, 200);
        } catch (\Exception$e) {
            $data['status'] = 500;
            $data['message'] = $e->getMessage();
            return response($data, 500);
        }
    }

    /**
     * Insert States
     * @param
     * @return json
     *
     */
    public function createState(Request $request)
    {
        try {

            // Apply form vazlidation first then insert

            $stateName = $request->name;
            $createdBy = $request->createdby;

            $insertArray = [
                'name' => $stateName,
                'created_by' => $createdBy,
            ];

            $stateId = State::create($insertArray);
            $data['status'] = 200;
            $data['data'] = $stateId;
            return response($data, 200);
        } catch (\Exception$e) {
            $data['status'] = 500;
            $data['message'] = $e->getMessage();
            return response($data, 500);
        }
    }

    /**
     * Insert States
     * @param
     * @return json
     *
     */
    public function updateState(Request $request)
    {
        try {} catch (\Exception$e) {
            $data['status'] = 500;
            $data['message'] = $e->getMessage();
            return response($data, 500);
        }
    }

    /**
     * Insert States
     * @param
     * @return json
     *
     */
    public function deleteState(Request $request)
    {
        try {} catch (\Exception$e) {
            $data['status'] = 500;
            $data['message'] = $e->getMessage();
            return response($data, 500);
        }
    }

    /**
     * Get all the states
     * @return District array
     */
    public function getDistrict(Request $request)
    {
        try {
            $state = District::get();
            $data['message'] = 'District fetched successfully.';
            $data['data'] = $state;
            return response($data, 200);
        } catch (\Exception$e) {
            $data['status'] = 500;
            $data['message'] = $e->getMessage();
            return response($data, 500);
        }
    }

    /**
     * Insert States
     * @param
     * @return json
     *
     */
    public function createDistrict(Request $request)
    {
        try {

            // Apply form vazlidation first then insert

            $districtName = $request->name;
            $stateId = $request->state_id;
            $createdBy = $request->createdby;

            $insertArray = [
                'name' => $districtName,
                'state_id' => $stateId,
                'created_by' => $createdBy,
            ];

            $districtId = District::create($insertArray);
            $data['status'] = 200;
            $data['data'] = $districtId;
            return response($data, 200);
        } catch (\Exception$e) {
            $data['status'] = 500;
            $data['message'] = $e->getMessage();
            return response($data, 500);
        }
    }

    public function test(Request $request)
    {
        try {
            $id = $request->id;
            $customer = Customers::whereHas('users_data', function ($Q) {
                $Q->where('id', '=', 2);
            });
            //     when($id != 0, function ($Q) use ($id) {
            //     $Q->with('users_data');
            // });



            $subDealers = Subdealers::select('subdealer_id', 'distributor_id', 'dealer_id', 'name', 'sap_code', 'username');

            $data['status'] = 200;
            $data['total'] = $subDealers->count();
            $data['data'] = $subDealers->get();
            return response($data, 200);
        } catch (\Exception$e) {
            $data['status'] = 500;
            $data['message'] = $e->getMessage();
            return response($data, 500);
        }
    }
}
