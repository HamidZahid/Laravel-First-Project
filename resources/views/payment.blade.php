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
                                <div class="h5 p-3 pb-0">Payments</div>
                                <hr class="text-muted">
                                <div class="card-body">
                                    <div class="container-fluid overflow-auto">
                                        <table id="example" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th id="" data-id="">Invoice#</th>
                                                    <th id="" data-id="">Date</th>
                                                    <th id="" data-id="">Account</th>
                                                    <th id="" data-id="">Amount</th>
                                                    <th id="" data-id="">Transaction ID</th>
                                                    <th id="" data-id="">Cr.</th>
                                                    <th id="" data-id="">Manage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td id="" data-id="">1</td>
                                                    <td id="" data-id="">2019-09-23</td>
                                                    <td id="" data-id="">Cash</td>
                                                    <td class="fw-bold " id="" data-id="">144.00</td>
                                                    <td class="fw-bold" id="" data-id="">Invoice 1 Payment</td>
                                                    <td class="fw-bold" id="" data-id="">144.00</td>
                                                    <td id="" data-id="">Manage</td>
                                                </tr>
                                                <tr>
                                                    <td id="" data-id="">3</td>
                                                    <td id="" data-id="">2019-09-23</td>
                                                    <td id="" data-id="">JP Morgan Chase & Co</td>
                                                    <td class="fw-bold" id="" data-id="">149.00</td>
                                                    <td class="fw-bold" id="" data-id="">Invoice 3 Payment</td>
                                                    <td class="fw-bold" id="" data-id="">149.00</td>
                                                    <td id="" data-id="">Manage</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
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
            $('#example').DataTable();
        });
    </script>
@endsection
