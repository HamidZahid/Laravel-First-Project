@extends('layout.main')
@section('main-section')
    @include('layout.sidebar')
    <main>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 --margin-top">
                        <div class="card mb-4">
                            <div class="row">
                                <div class="col-10">
                                    <div class="h5 p-3">Bills</div>
                                </div>
                                <div class="col-2 p-3">
                                    <button class="btn btn-circle btn-circle-sm float-end m-1"
                                        style="background-color: #E3C37D;"></button>
                                    <button class="btn btn-circle btn-circle-sm float-end m-1"
                                        style="background-color: #85C2BC;"></button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-start px-3">
                                            <div class="nav flex-column nav-pills  me-3" id="v-pills-tab" role="tablist"
                                                aria-orientation="vertical">
                                                <button class="nav-link active" id="v-pills-summary-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-summary" type="button"
                                                    role="tab" aria-controls="v-pills-summary" aria-selected="true"><i
                                                        class="fa-solid fa-house-chimney-window p-1"></i>Summary</button>
                                                <button class="nav-link " id="v-pills-all-tab" data-bs-toggle="pill"
                                                    data-bs-target="#v-pills-all" type="button" role="tab"
                                                    aria-controls="v-pills-all" aria-selected="false"><i
                                                        class="fa-solid fa-table-cells-large p-1 float-start"></i>All</button>
                                                <button class="nav-link" id="v-pills-add-bill-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-add-bill" type="button"
                                                    role="tab" aria-controls="v-pills-add-bill" aria-selected="false"
                                                    add-bill><i class="fa-solid fa-plus p-1"></i>Add a bill</button>
                                            </div>
                                            <div class="col-10">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-summary"
                                                        role="tabpanel" aria-labelledby="v-pills-summary-tab" tabindex="0">
                                                        <div class="container-fluid">
                                                            <div class="row mt-3">
                                                                <div class="col-12">
                                                                    <div class="h5 fw-bold" data-id="" id="">
                                                                        Upcoming Bills</div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6 mb-3">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-8 ">
                                                                                    <p id="" data-id=""
                                                                                        class="text-muted">Sat May
                                                                                        28,2022</p>
                                                                                </div>
                                                                                <div class="col-4 clearfix">
                                                                                    <a href="" type="button"
                                                                                        class="btn btn-sm float-end px-2 "
                                                                                        style="background-color: #2BC986;"
                                                                                        id="" data-id=""><i
                                                                                            class="fa fa-check"></i></a>
                                                                                    <a href="" type="button"
                                                                                        class="btn btn-sm float-end px-2 mx-1"
                                                                                        style="background-color: #F13559;"
                                                                                        id="" data-id=""><i
                                                                                            class="fa fa-trash"></i></a>
                                                                                    <a href="" type="button"
                                                                                        class="btn btn-sm float-end px-2 "
                                                                                        id="" data-id=""
                                                                                        style="background-color: #5E72E4;"><i
                                                                                            class="fa fa-edit"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <h6 class="card-subtitle mb-2 fw-bold" id=""
                                                                                data-id="">Office Rent</h6>
                                                                            <h2 class="card-text" id="" data-id="">
                                                                                $1,250.00</h2>
                                                                            <p class="text-danger" id="" data-id="">
                                                                                Due</p>
                                                                            <p class="text-muted" id="" data-id="">
                                                                                Monthly</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 mb-3">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-8 ">
                                                                                    <p id="" data-id=""
                                                                                        class="text-muted">Wed June
                                                                                        01,2022</p>
                                                                                </div>
                                                                                <div class="col-4 clearfix">
                                                                                    <a href="" type="button"
                                                                                        class="btn btn-sm float-end px-2 "
                                                                                        style="background-color: #2BC986;"
                                                                                        id="" data-id=""><i
                                                                                            class="fa fa-check"></i></a>
                                                                                    <a href="" type="button"
                                                                                        class="btn btn-sm float-end px-2 mx-1"
                                                                                        style="background-color: #F13559;"
                                                                                        id="" data-id=""><i
                                                                                            class="fa fa-trash"></i></a>
                                                                                    <a href="" type="button"
                                                                                        class="btn btn-sm float-end px-2 "
                                                                                        id="" data-id=""
                                                                                        style="background-color: #5E72E4;"><i
                                                                                            class="fa fa-edit"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <h6 class="card-subtitle mb-2 fw-bold" id=""
                                                                                data-id="">T-Mobile Unlimited</h6>
                                                                            <h2 class="card-text" id="" data-id="">
                                                                                $70.00</h2>
                                                                            <p class="text-danger" id="" data-id="">
                                                                                Due</p>
                                                                            <p class="text-muted" id="" data-id="">
                                                                                Monthly</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 mb-3">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-8 ">
                                                                                    <p id="" data-id=""
                                                                                        class="text-muted">Sat June
                                                                                        04,2022</p>
                                                                                </div>
                                                                                <div class="col-4 clearfix">
                                                                                    <a href="" type="button"
                                                                                        class="btn btn-sm float-end px-2 "
                                                                                        style="background-color: #2BC986;"
                                                                                        id="" data-id=""><i
                                                                                            class="fa fa-check"></i></a>
                                                                                    <a href="" type="button"
                                                                                        class="btn btn-sm float-end px-2 mx-1"
                                                                                        style="background-color: #F13559;"
                                                                                        id="" data-id=""><i
                                                                                            class="fa fa-trash"></i></a>
                                                                                    <a href="" type="button"
                                                                                        class="btn btn-sm float-end px-2 "
                                                                                        id="" data-id=""
                                                                                        style="background-color: #5E72E4;"><i
                                                                                            class="fa fa-edit"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <h6 class="card-subtitle mb-2 fw-bold" id=""
                                                                                data-id="">Facebook Ad</h6>
                                                                            <h2 class="card-text" id="" data-id="">
                                                                                $600.00</h2>
                                                                            <p class="text-danger" id="" data-id="">
                                                                                Due</p>
                                                                            <p class="text-muted" id="" data-id="">
                                                                                Monthly</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-all" role="tabpanel"
                                                        aria-labelledby="v-pills-all-tab" tabindex="0">
                                                        <div class="container-fluid overflow-auto">
                                                            <table id="example" class="display" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Title</th>
                                                                        <th>Amount</th>
                                                                        <th>Next Due Date</th>
                                                                        <th>Manage</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="fw-bold fs-6" style="color: #5E72E4;">
                                                                            Digital Ocean
                                                                            Droplet</td>
                                                                        <td>
                                                                            <div class="h6">$10.00</div>
                                                                            <div class="h6 mt-5">Monthly</div>
                                                                        </td>
                                                                        <td class="">Mon May 09,2022</td>
                                                                        <td class="">
                                                                            <div class="clearfix d-flex align-items-start">
                                                                                <a href="" type="button"
                                                                                    class="btn btn-sm  float-start rounded-0 rounded-start"
                                                                                    id="" data-id=""
                                                                                    style="background-color: #F13559;"><i
                                                                                        class="fa fa-trash"></i></a>
                                                                                <a href="" type="button"
                                                                                    class="btn btn-sm  float-start rounded-0 rounded-end"
                                                                                    id="" data-id=""
                                                                                    style="background-color:#0FBBD9;"><i
                                                                                        class="fa fa-edit"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-add-bill" role="tabpanel"
                                                        aria-labelledby="v-pills-add-bill-tab" tabindex="0">
                                                        <div class="container-fluid">
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <label for="title"
                                                                                class="form-label fw-bold">Title</label>
                                                                            <input type="text" class="form-control"
                                                                                id="title" aria-describedby="emailHelp"
                                                                                id="" data-id="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div
                                                                        class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                                        <div class="mb-3">
                                                                            <label for="date"
                                                                                class="form-label fw-bold">Next Due
                                                                                Date</label>
                                                                            <input type="text" class="form-control"
                                                                                id="date" aria-describedby="emailHelp" id=""
                                                                                data-id="">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                                        <div class="mb-3">
                                                                            <label for="repeat"
                                                                                class="form-label fw-bold">Repeat
                                                                                Every</label>
                                                                            <input type="month" class="form-control"
                                                                                id="repeat" aria-describedby="emailHelp"
                                                                                id="" data-id="">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                                        <div class="mb-3">
                                                                            <label for="currency"
                                                                                class="form-label fw-bold">Currency</label>
                                                                            <input type="text" class="form-control"
                                                                                id="title" aria-describedby="emailHelp"
                                                                                id="" data-id="" placeholder="USD">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                                        <div class="mb-3">
                                                                            <label for="amount"
                                                                                class="form-label fw-bold">Amount</label>
                                                                            <input type="text" class="form-control"
                                                                                id="amount" aria-describedby="emailHelp"
                                                                                id="" data-id="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div
                                                                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                        <div class="mb-3">
                                                                            <label for="account"
                                                                                class="form-label fw-bold">From
                                                                                Account</label>
                                                                            <input type="text" class="form-control"
                                                                                id="account" aria-describedby="emailHelp"
                                                                                id="" data-id="">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                        <div class="mb-3">
                                                                            <label for="payee"
                                                                                class="form-label fw-bold">Payee</label>
                                                                            <select class="form-select"
                                                                                aria-label="Default select example"
                                                                                id="payee">
                                                                                <option selected>None</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="category"
                                                                            class="form-label fw-bold">Category</label>
                                                                        <select class="form-select"
                                                                            aria-label="Default select example"
                                                                            id="category">
                                                                            <option selected>None</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <label for="website"
                                                                                class="form-label fw-bold">Website</label>
                                                                            <input type="text" class="form-control"
                                                                                id="website" aria-describedby="emailHelp"
                                                                                id="" data-id="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn mb-3 text-light"
                                                                    style="background-color: #5E72E4;">Save</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
