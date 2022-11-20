@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="row align-items-center">
                                <div class="col-4 col-sm-3 col-xl-2">
                                    <img src="{{ asset('admin/assets/images/dashboard/Group126@2x.png') }}"
                                        class="gradient-corona-img img-fluid" alt="">
                                </div>
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <h4 class="mb-1 mb-sm-0">{{ $page_title }}</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">{{ $page_description }}</p>
                                </div>
                                <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                    <span>
                                        <a href="{{ route('project.approvals.create') }}" target="_blank"
                                            class="btn btn-outline-light btn-rounded get-started-btn"><i
                                                class="fa fa-plus font-weight-bold"></i> Add {{ $page_title }}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <pre>{{ print_r($project_data->toArray()) }}</pre>
            <pre>{{ print_r($account_data) }}</pre>
            <div class="table-responsive">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $page_title }}</h4>
                            <form class="form-sample">
                                <p class="card-description"> Project info </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            {{-- Contains project id in the values that will be inserted --}}
                                            <label class="col-sm-3 col-form-label">Projects</label>
                                            <div class="col-sm-9">
                                                <select class="form-control text-white">
                                                    <option></option>
                                                    <option>Project 1</option>
                                                    <option>Project 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            {{-- Project type id --}}
                                            <label class="col-sm-3 col-form-label">Projects Type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control text-white">
                                                    <option></option>
                                                    <option>Project 1</option>
                                                    <option>Project 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            {{-- Account state --}}
                                            <label class="col-sm-3 col-form-label">Account State</label>
                                            <div class="col-sm-9">
                                                <select class="form-control">
                                                    <option>Lead</option>
                                                    <option>Account</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            {{-- Account id --}}
                                            <label class="col-sm-3 col-form-label">Account ID</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" placeholder="account id" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Account Type</label>
                                            <div class="col-sm-9">
                                                <select class="form-control">
                                                    <option>Distributor</option>
                                                    <option>Dealer</option>
                                                    <option>Sub Dealer</option>
                                                    <option>Fabricator</option>
                                                    <option>Engineer</option>
                                                    <option>Mason</option>
                                                    <option>Petty Contractor</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            {{-- is_mapped value 0/1 --}}
                                            <label class="col-sm-3 col-form-label">Is Mapped</label>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios1" value=""
                                                            checked> Free </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
                    2021</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                        template</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
