@extends('layout.main')
@section('main-section')
    @include('layout.sidebar')
    <main>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 --margin-top">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="card mb-3">
                                        <div class="card-body pb-0">
                                            <h5 class="card-title display-6 fw-normal" id="" data-id="">0</h5>
                                            <p class="fs-6 text-muted" id="" data-id="">PAID</p>
                                            <div class="row">
                                                <div class="col-5">
                                                    <p class="fs-6 text-muted" id="" data-id="">Percentage</p>
                                                </div>
                                                <div class="col-7">
                                                    <p class="py-1 fs-6 text-muted float-end" id="" data-id="">0%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="card mb-3">
                                        <div class="card-body pb-0">
                                            <h5 class="card-title display-6 fw-normal" id="" data-id="">0</h5>
                                            <p class="fs-6 text-muted" id="" data-id="">UNPAID</p>
                                            <div class="row">
                                                <div class="col-5">
                                                    <p class="fs-6 text-muted" id="" data-id="">Percentage</p>
                                                </div>
                                                <div class="col-7">
                                                    <p class="py-1 fs-6 text-muted float-end" id="" data-id="">0%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="card mb-3">
                                        <div class="card-body pb-0">
                                            <h5 class="card-title display-6 fw-normal" id="" data-id="">0</h5>
                                            <p class="fs-6 text-muted" id="" data-id="">PARTIALLY PAID</p>
                                            <div class="row">
                                                <div class="col-5">
                                                    <p class="fs-6 text-muted" id="" data-id="">Percentage</p>
                                                </div>
                                                <div class="col-7">
                                                    <p class="py-1 fs-6 text-muted float-end" id="" data-id="">0%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                    <div class="card mb-3">
                                        <div class="card-body pb-0">
                                            <h5 class="card-title display-6 fw-normal" id="" data-id="">0</h5>
                                            <p class="fs-6 text-muted" id="" data-id="">CANCELLED</p>
                                            <div class="row">
                                                <div class="col-5">
                                                    <p class="fs-6 text-muted" id="" data-id="">Percentage</p>
                                                </div>
                                                <div class="col-7">
                                                    <p class="py-1 fs-6 text-muted float-end" id="" data-id="">0%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card my-3">
                                <div class="row mx-2 pb-0 mt-3">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-4">
                                        <div class="h5 fw-normal" id="" data-id="">Purchase Orders</div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8">
                                        <a href="" type="button"
                                            class="btn purple text-white float-end rounded-0 rounded-end border-end" id=""
                                            data-id="">New Purchaser Order</a>
                                        <a href="" type="button"
                                            class="btn purple text-white float-end rounded-0 rounded-start" id=""
                                            data-id="">View Reports</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="container-fluid overflow-auto">
                                        <table id="example" class="display nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Account</th>
                                                    <th>Amount</th>
                                                    <th>Issued at</th>
                                                    <th>Status</th>
                                                    <th>Type</th>
                                                    <th>Manage</th>
                                                </tr>
                                            </thead>
                                        </table>
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
            $('#example').DataTable({
                dom: 'Plfrtip',
                language: {
                    searchPanes: {

                    }
                }
            });
        });
    </script>
@endsection
