<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use Contacts;
use Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data['page_title'] = 'Employee Register';
        return view('employees.create', compact('data'));
    }

    public function create(Request $request)
    {
        try {

            $insertData = [
                "name" => $request->name,
                "departmentId" => $request->departmentId,
                "salary" => $request->salary,
                "area_type" => $request->area_type,
                "state_id" => $request->state_id,
                "district_id" => $request->district_id,
                "created_by" => $request->created_by,
            ];

            $last_employee_id = Employee::create($insertData);

            $data['status'] = 1;
            $data['message'] = 'Employee added successfully.';
            $data['data'] = $last_employee_id;

            return response($data, 200);
        } catch (\Exception$error) {
            $data['status'] = 0;
            $data['message'] = 'Internal server error : ' . $error->getMessage();
            $data['data'] = [];

            return response($data, 500);
        }
    }

    function list(Request $request, $id = null) {
        try {
            $employee_list = Employee::get();

            $data['status'] = 1;
            $data['message'] = 'List loaded successfully.';
            $data['total_count'] = $employee_list->count();
            $data['data'] = $employee_list;

            return response($data, 200);
        } catch (\Exception$error) {
            $data['status'] = 0;
            $data['message'] = 'Internal server error : ' . $error->getMessage();
            $data['data'] = [];

            return response($data, 500);
        }
    }

    public function update(Request $request)
    {}

    public function delete(Request $request, $id = null)
    {
        try {

            $employee_list = new Employee();

            if ($id != null) {
                $employee_list = $employee_list->where('id', $id)->delete();
            } else {
                $employee_list = $employee_list->delete();
            }

            $data['status'] = 1;
            $data['message'] = 'List deleted successfully.';
            $data['data'] = $employee_list;

            return response($data, 200);
        } catch (\Exception$error) {
            $data['status'] = 0;
            $data['message'] = 'Internal server error : ' . $error->getMessage();
            $data['data'] = [];

            return response($data, 500);
        }
    }

    public function updateContacts(Request $request)
    {
        try {

            $id = $request->id;
            $area_details = $request->area_details;

            $result = Contacts::where('id', $id)->update(['area_details' => $area_details]);

            $getLatest = Contacts::when($id != 0, function ($Q) use ($id) {
                $Q->where('id', $id);
            })->get();

            $data['status'] = 200;
            $data['message'] = 'Updated successfully';
            $data['data'] = $result; //request->all();
            $data['latest_data'] = $getLatest; //request->all();
            $data['district'] = $getLatest[0]->area_details; //json_decode($getLatest[0]->area_details, true);

            return response($data, 200);
        } catch (\Exception$error) {
            $data['status'] = 500;
            $data['message'] = 'Internal server error : ' . $error->getMessage();
            $data['data'] = [];

            return response($data, 500);
        }
    }
}
