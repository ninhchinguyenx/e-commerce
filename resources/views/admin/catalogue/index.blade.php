@extends('admin.layouts.master')


@section('content')

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">List Catalogue</h5>
      </div>
      <div class="card-body">
        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="form-select form-select-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select> entries</label></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info">
                <thead>
                  <tr>
                    <th scope="col" style="width: 16.8px;" class="sorting sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="
                                                    
                                                        
                                                    
                                                : activate to sort column ascending" aria-sort="descending">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                      </div>
                    </th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 41.6px;" aria-label="SR No.: activate to sort column ascending">SR No.</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 32.6px;" aria-label="ID: activate to sort column ascending">ID</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 79.6px;" aria-label="Purchase ID: activate to sort column ascending">Purchase ID</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 263.6px;" aria-label="Title: activate to sort column ascending">Title</th>
                    <th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 72.6px;" aria-label="User: activate to sort column ascending">User</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 81.6px;" aria-label="Assigned To: activate to sort column ascending">Assigned To</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 74.6px;" aria-label="Created By: activate to sort column ascending">Created By</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 80.6px;" aria-label="Create Date: activate to sort column ascending">Create Date</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 46.6px;" aria-label="Status: activate to sort column ascending">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Priority: activate to sort column ascending">Priority</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Action: activate to sort column ascending">Action</th>
                  </tr>
                </thead>
                <tbody>














                  <tr class="odd">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>01</td>
                    <td>VLZ-452</td>
                    <td>VLZ1400087402</td>
                    <td><a href="#!">Post launch reminder/ post list</a></td>
                    <td>Joseph Parker</td>
                    <td>Alexis Clarke</td>
                    <td>Joseph Parker</td>
                    <td>03 Oct, 2021</td>
                    <td><span class="badge bg-info-subtle text-info">Re-open</span></td>
                    <td style="display: none;"><span class="badge bg-danger">High</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="even">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>02</td>
                    <td>VLZ-453</td>
                    <td>VLZ1400087425</td>
                    <td><a href="#!">Additional Calendar</a></td>
                    <td>Diana Kohler</td>
                    <td>Admin</td>
                    <td>Mary Rucker</td>
                    <td>05 Oct, 2021</td>
                    <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                    <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="odd">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>03</td>
                    <td>VLZ-454</td>
                    <td>VLZ1400087438</td>
                    <td><a href="#!">Make a creating an account profile</a></td>
                    <td>Tonya Noble</td>
                    <td>Admin</td>
                    <td>Tonya Noble</td>
                    <td>27 April, 2022</td>
                    <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                    <td style="display: none;"><span class="badge bg-success">Low</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="even">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>04</td>
                    <td>VLZ-455</td>
                    <td>VLZ1400087748</td>
                    <td><a href="#!">Apologize for shopping Error!</a></td>
                    <td>Joseph Parker</td>
                    <td>Alexis Clarke</td>
                    <td>Joseph Parker</td>
                    <td>14 June, 2021</td>
                    <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                    <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="odd">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>05</td>
                    <td>VLZ-456</td>
                    <td>VLZ1400087547</td>
                    <td><a href="#!">Support for theme</a></td>
                    <td>Donald Palmer</td>
                    <td>Admin</td>
                    <td>Donald Palmer</td>
                    <td>25 June, 2021</td>
                    <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                    <td style="display: none;"><span class="badge bg-success">Low</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="even">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>06</td>
                    <td>VLZ-457</td>
                    <td>VLZ1400087245</td>
                    <td><a href="#!">Benner design for FB &amp; Twitter</a></td>
                    <td>Mary Rucker</td>
                    <td>Jennifer Carter</td>
                    <td>Mary Rucker</td>
                    <td>14 Aug, 2021</td>
                    <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                    <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="odd">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>07</td>
                    <td>VLZ-458</td>
                    <td>VLZ1400087785</td>
                    <td><a href="#!">Change email option process</a></td>
                    <td>James Morris</td>
                    <td>Admin</td>
                    <td>James Morris</td>
                    <td>12 March, 2022</td>
                    <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                    <td style="display: none;"><span class="badge bg-danger">High</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="even">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>08</td>
                    <td>VLZ-460</td>
                    <td>VLZ1400087745</td>
                    <td><a href="#!">Support for theme</a></td>
                    <td>Nathan Cole</td>
                    <td>Nancy Martino</td>
                    <td>Nathan Cole</td>
                    <td>28 Feb, 2022</td>
                    <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                    <td style="display: none;"><span class="badge bg-success">Low</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="odd">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>09</td>
                    <td>VLZ-461</td>
                    <td>VLZ1400087179</td>
                    <td><a href="#!">Form submit issue</a></td>
                    <td>Grace Coles</td>
                    <td>Admin</td>
                    <td>Grace Coles</td>
                    <td>07 Jan, 2022</td>
                    <td><span class="badge bg-success-subtle text-success">New</span></td>
                    <td style="display: none;"><span class="badge bg-danger">High</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr class="even">
                    <th scope="row" class="dtr-control sorting_1" tabindex="0">
                      <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                      </div>
                    </th>
                    <td>10</td>
                    <td>VLZ-462</td>
                    <td>VLZ140008856</td>
                    <td><a href="#!">Edit customer testimonial</a></td>
                    <td>Freda</td>
                    <td>Alexis Clarke</td>
                    <td>Freda</td>
                    <td>16 Aug, 2021</td>
                    <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                    <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                    <td style="display: none;">
                      <div class="dropdown d-inline-block">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                          <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                          <li>
                            <a class="dropdown-item remove-item-btn">
                              <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                  <li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                  <li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--end col-->
</div>

@endsection