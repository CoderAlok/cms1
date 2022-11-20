<?php

namespace App\Http\Controllers\Alok;

use App\Http\Controllers\Controller;
use Auth;
use Employee;
use Illuminate\Http\Request;
use Notes;

class MainCon extends Controller
{
    //

    public function __construct()
    {
        // echo '';

    }

    public function get()
    {
        // echo 'Hello....'.Auth::get()->id;
        // echo 'asasa';

        return view('table');

        /**
         * @return Alok das
         */
        // Some new string helper functions
        // $string = str('Alok')->append(' Das');

        /**
         * @return snake_case
         */
        // Str::snake($value);
        // $str()->snake($value);

        // to_route
        // return to_route('users.show', ['user', 1]);
    }

    /**
     * Returns a page
     * @param Request $request
     * @return view
     */
    public function show_page1(Request $request)
    {
        try {
            $page_title = 'Test Page';
            return view('rcp_request', ['page_title' => $page_title]);
            // return response(['data' => 'fafa'], 200);
        } catch (\Exception$e) {
            return response(['error' => $e->getMessage()], 500);
        }
    }

    public function test_page_101(Request $request)
    {
        try {
            $page_title = 'test_page_101';
            $city = ['Delhi', 'Amritsar', 'Mumbai', 'Jaipur', 'Lucknow', 'Kolkata', 'Patna', 'Guawahati'];
            return view('test.test1', ['city' => $city]);
        } catch (\Exception$e) {
            return response(['error' => $e->getMessage()], 500);
        }
    }

    public function test_page_101_add(Request $request)
    {
        try {
            return response(['data'], 200);
            // return response(['data' => $request->all()], 200);
        } catch (\Exception$error) {
            return response(['error' => $error], 500);
        }
    }

    public static function testAlok($a)
    {
        return $a;
    }

    public function test_page_102()
    {
        $notes = new Notes();

        $insert = $notes->updateOrCreate(['id' => 1], [
            'date' => '',
            'notes' => 'Some mmore contents ',
            'is_new_todo' => '1',
            'todo_type_id' => 10,
            'todo_desc_id' => 20,
            'todo_due_date' => '',
            'contact' => '8968965262',
            'task_status' => 1,
            'task_update' => 1,
            'sales_rep' => 4856,
            'created_by' => 859,
        ]);

        $data = $notes->get();
        return response($data, 200);
    }

    public function getContacts(Request $request)
    {
        $users = Auth::user();
        $notes = Notes::get();

        return response(['data' => $notes, 'users' => $users, 'total' => $notes->count()], 200);
    }

    /** */
    public function test_api_103()
    {
        try {

            // $ins_data = [
            //     'name' => 'Assistant Manager',
            //     'guard_name' => 'web',
            //     'created_by' => '1',
            //     'updated_by' => '1',
            // ];
            // $r = Roles::create($ins_data);

            $employee = new Employee();
            $employee = $employee->get();

            $data['status'] = 1;
            $data['message'] = 'Roles retrieved successfully.';
            $data['data'] = $employee; //Roles::select(['name', 'guard_name', 'created_by', 'updated_by'])->get();
            return response($data, 200);
        } catch (\Exception$error) {
            return response([
                'status' => 0,
                'message' => 'Internal server error : ' . $error->getMessage(),
                'data' => [],
            ], 500);
        }
    }

    /* Jsut a test class to practice all the collection commands */
    public function test_collection()
    {
        $collect1 = collect([
            [
                'lead_id' => 14488,
                'name' => 'Alok Das',
                'location' => 'North 24 Paraganas',
                'district_id' => 224,
                'state_id' => 2,
                'account_state' => 1,
            ],
            [
                'lead_id' => 99488,
                'name' => 'Jagan Patel',
                'location' => 'Payradanga',
                'district_id' => 226,
                'state_id' => 2,
                'account_state' => 1,
            ],
            [
                'lead_id' => 15488,
                'name' => 'Shubham Goyak',
                'location' => 'Kolkata',
                'district_id' => 115,
                'state_id' => 2,
                'account_state' => 0,
            ],
            [
                'lead_id' => 14488,
                'name' => 'Jaiyesh Patel',
                'location' => 'Bankura',
                'district_id' => 221,
                'state_id' => 2,
                'account_state' => 0,
            ],
        ]);

        echo '<pre>';
        // $c = $collect1->map(function($key, $value){
        //     return $value->name;
        // });

        // print_r($c);

        $collect2 = $collect1->contains(function($value, $key){
            return $value['account_state'] === 1;
        });

        print_r($collect2);

    }

}
