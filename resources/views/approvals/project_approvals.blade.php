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
            <div class="row ">
              <div class="col-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Approval List</h4>
                          <div class="table-responsive">
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th>
                                              <div class="form-check form-check-muted m-0">
                                                  <label class="form-check-label">
                                                      <input type="checkbox" class="form-check-input">
                                                  </label>
                                              </div>
                                          </th>
                                          <th> Id </th>
                                          <th> Name </th>
                                          <th> Sap Code </th>
                                          <th> Username </th>
                                          <th> Password </th>
                                          <th> Location </th>
                                          <th> State </th>
                                          <th> District </th>
                                          <th> Products </th>
                                          <th> Action </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($data as $value)
                                          <tr>
                                              <td>
                                                  <div class="form-check form-check-muted m-0">
                                                      <label class="form-check-label">
                                                          <input type="checkbox" class="form-check-input">
                                                      </label>
                                                  </div>
                                              </td>
                                              <td>{{ $value->distributor_id }}</td>
                                              <td>
                                                  <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}"
                                                      alt="image" />
                                                  <span class="ps-2">{{ $value->name }}</span>
                                              </td>
                                              <td>{{ $value->sap_code }}</td>
                                              <td>{{ $value->username }}</td>
                                              <td>{{ $value->password }}</td>
                                              <td>{{ $value->location }}</td>
                                              <td>{{ $value->state_id }}</td>
                                              <td>{{ $value->district_id }}</td>
                                              <td>{{ $value->product }}</td>
                                              <td>
                                                  <div class="badge badge-outline-success">Approved</div>
                                              </td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
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
