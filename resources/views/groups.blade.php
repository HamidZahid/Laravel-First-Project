@extends('layout.main')
@section('main-section')
    @include('layout.sidebar')
    <main>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 --margin-top">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="h5" id="" data-id="">Groups</div>
                                        </div>
                                        <div class="col-4">
                                            <div class="clearfix">
                                                <a href="" type="button"
                                                    class="btn btn-sm purple float-end text-light rounded-0 rounded-end"
                                                    id="" data-id=""><i class="fa-solid fa-download m-1"></i>Reorder</a>
                                                <a href="" type="button"
                                                    class="btn btn-sm light-green float-end text-light rounded-0 rounded-start"
                                                    id="" data-id=""><i class="fa fa-plus m-1"></i>Add New Group</a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row group-bg mx-1 py-1">
                                        <div class="col-3">
                                            <div class="h6 fw-bold" id="" data-id="">Group</div>
                                        </div>
                                        <div class="col-3">
                                            <div class="h6 fw-bold" id="" data-id="">Manage</div>
                                        </div>
                                    </div>
                                    <div class="row mx-1 py-3">
                                        <div class="col-7">
                                            <div class="h6 fw-bold" id="" data-id="">Default</div>
                                        </div>
                                        <div class="col-5">
                                            <div class="clearfix">
                                                <a href="" type="button"
                                                    class="btn btn-sm light-red float-end  text-light rounded-0 rounded-end"
                                                    id="" data-id="">Delete</a>
                                                <a href="" type="button"
                                                    class="btn btn-sm orange float-end text-light rounded-0" id=""
                                                    data-id="">Edit</a>
                                                <a href="" type="button"
                                                    class="btn btn-sm purple float-end text-light rounded-0 rounded-start"
                                                    id="" data-id="">List Contacts</a>
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
@endsection
