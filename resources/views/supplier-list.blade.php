@extends('layout.main')
@section('main-section')
    @include('layout.sidebar')
    <main>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 --margin-top">
                        <div class="container-fluid">
                            <div class="card my-3">
                                <div class="row mx-2 pb-0 mt-3">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-4">
                                        <div class="h5 fw-normal" id="" data-id="">List Suppliers</div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8">
                                        <a href="" type="button"
                                            class="btn orange text-white float-end rounded-0 rounded-end border-end" id=""
                                            data-id="">Import</a>
                                        <a href="" type="button"
                                            class="btn light-green text-white float-end rounded-0 rounded-start" id=""
                                            data-id="">Add Supplier</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="input-group rounded float-right">
                                                <span class="input-group-text border-0" data-id="" id="search-addon"><i
                                                        class="fas fa-search"></i></span>
                                                <input type="search" class="form-control rounded" placeholder="Search"
                                                    data-id="" aria-label="Search" aria-describedby="search-addon"
                                                    id="myInput" />
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <a href="" type="button" onclick="" onchange=""
                                                class="btn btn-secondary float-end " id="" data-id="">Print</a>
                                            <a href="" type="button" onclick="" onchange=""
                                                class="btn btn-dark float-end mx-1 " id="" data-id="">Copy</a>
                                            <a href="" type="button" onclick="" onchange=""
                                                class="btn purple text-white float-end  " id="" data-id="">CSV</a>
                                            <a href="" type="button" onclick="" onchange=""
                                                class="btn light-green text-white float-end  mx-1" id=""
                                                data-id="">Excel</a>
                                            <a href="" type="button" onclick="" onchange=""
                                                class="btn light-red text-white float-end " id="" data-id="">PDF</a>
                                        </div>
                                    </div>
                                    <div class="container-fluid overflow-auto">
                                        <table id="example" class="display nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Manage</th>
                                                </tr>
                                            </thead>
                                            <tbody id="dataTable">

                                            </tbody>
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
                searching: false,
                bLengthChange: false,
                language: {
                    searchPanes: {

                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#dataTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
