<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use Dealers;
use Distributors;
use Engineers;
use Fabricators;
use Illuminate\Http\Request;
use Masons;
use PettyContractors;
use Subdealers;

class AccountController extends Controller
{
    // Distributor
    public function distributor(Request $request)
    {
        $data['page_title'] = 'Distributor';
        $data['page_description'] = 'All the details regarding distributors.';
        $data['data'] = Distributors::get();
        return view('accounts.distributor')->with($data);
    }

    public function createDistributor(Request $request)
    {
        $insertData = [
            'name' => 'Mangal Distributors',
            'sap_code' => '225566',
            'username' => 'mangal_sa',
            'password' => '123456',
            'location' => '24 Parganas South',
            'state_id' => '2',
            'district_id' => '224',
            'product' => '1, 5',
        ];

        $distributor_id = Distributors::create($insertData);
        return $distributor_id;
    }

    // Dealers
    public function dealer(Request $request)
    {
        $data['page_title'] = 'Dealer';
        $data['page_description'] = 'All the details regarding dealers.';
        $data['data'] = Dealers::get();
        return view('accounts.dealer')->with($data);
    }

    // Dealers
    public function subdealer(Request $request)
    {
        $data['page_title'] = 'Sub Dealer';
        $data['page_description'] = 'All the details regarding sub dealer.';
        $data['data'] = Subdealers::get();
        return view('accounts.subdealer')->with($data);
    }

    // Dealers
    public function fabricator(Request $request)
    {
        $data['page_title'] = 'Fabricator';
        $data['page_description'] = 'All the details regarding fabricator.';
        $data['data'] = Fabricators::get();
        return view('accounts.fabricator')->with($data);
    }

    // Dealers
    public function engineer(Request $request)
    {
        $data['page_title'] = 'Engineer';
        $data['page_description'] = 'All the details regarding engineers.';
        $data['data'] = Engineers::get();
        return view('accounts.engineer')->with($data);
    }

    // Dealers
    public function mason(Request $request)
    {
        $data['page_title'] = 'Mason';
        $data['page_description'] = 'All the details regarding mason.';
        $data['data'] = Masons::get();
        return view('accounts.mason')->with($data);
    }

    // Dealers
    public function petty_contractor(Request $request)
    {
        $data['page_title'] = 'Petty Contractor';
        $data['page_description'] = 'All the details regarding petty contractor.';
        $data['data'] = PettyContractors::get();
        return view('accounts.petty_contractor')->with($data);
    }

    // // Project Approvals
    // public function projectApproval(Request $request){
    //     $data['page_title'] = 'Project Approvals';
    //     $data['page_description'] = 'All information about project approvals';
    //     $data['data'] = Distributors::get();
    //     return view('approvals.project_approvals')->with($data);
    // }
}
