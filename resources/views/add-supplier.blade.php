@extends('layout.main')
@section('main-section')
    @include('layout.sidebar')
    <main>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 --margin-top">
                        <div class="container-fluid">
                            <div class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="h6" id="" data-id="">Add Contact</div>
                                        </div>
                                        <div class="col-4">
                                            <a href="" type="button" class="btn btn-primary btn-sm float-end"><i
                                                    class="fa fa-download m-1"></i>Import Contacts</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <form action="post" method="">
                                        <div class="row">
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="fullname" class="col-form-label fw-semibold" id=""
                                                            data-id="">Full Name <span
                                                                class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="fullname" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="email" class="col-form-label fw-semibold" id=""
                                                            data-id="">Email</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="email" id="email" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="code" class="col-form-label fw-semibold">Code</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="code" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="secondaryemail" class="col-form-label fw-semibold" id=""
                                                            data-id="">Secondary Email</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="email" id="secondaryemail" class="form-control"
                                                            aria-describedby="" id="" data-id="" placeholder="CUS-2001" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="displayname" class="col-form-label fw-semibold" id=""
                                                            data-id="">Display Name</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="displayname" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="phone" class="col-form-label fw-semibold" id=""
                                                            data-id="">Phone</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="phone" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="company" class="col-form-label fw-semibold" id=""
                                                            data-id="">Company</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <select class="form-select" aria-label="Default select example"
                                                            id="company" data-id="">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1" id="" data-id="">One</option>
                                                            <option value="2" id="" data-id="">Two</option>
                                                            <option value="3" id="" data-id="">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="currency"
                                                            class="col-form-label fw-semibold">Currency</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="currency" class="form-control"
                                                            aria-describedby="" id="" data-id="" placeholder="UAD-" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="bussinessnumber" class="col-form-label fw-semibold"
                                                            id="" data-id="">Business Number</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="businessnumber" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center" id="inputFormRow">
                                                    <div class="col-4">
                                                        <label for="group" class="col-form-label fw-semibold" id=""
                                                            data-id="">Group</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="group" name="title[]" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                        <a id="addRow" type="button" class="text-decoration-none"><i
                                                                class="fa fa-plus m-1"></i> Add New Group</a>
                                                    </div>
                                                    <div id="newRow"></div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="type" class="col-form-label fw-semibold">Type</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="customer" data-id="" />
                                                            <label class="form-check-label" for="customer" id=""
                                                                data-id="">Customer</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="supplier" data-id="" checked>
                                                            <label class="form-check-label" for="supplier" id=""
                                                                data-id="">Supplier </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="owner" class="col-form-label fw-semibold" id=""
                                                            data-id="">Owner</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="owner" class="form-control"
                                                            aria-describedby="" id="" data-id="" placeholder="Richard" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="address" class="col-form-label fw-semibold" id=""
                                                            data-id="">Address</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="address" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="username" class="col-form-label fw-semibold" id=""
                                                            data-id="">Username</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="username" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="city" class="col-form-label fw-semibold" id=""
                                                            data-id="">City</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="city" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="password" class="col-form-label fw-semibold" id=""
                                                            data-id="">Password</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="password" id="password" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="state" class="col-form-label fw-semibold" id=""
                                                            data-id="">State/Region</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="state" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="confirmpassword" class="col-form-label fw-semibold"
                                                            id="" data-id="">Confirm Password</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="password" id="confirmpassword" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="zipcode" class="col-form-label fw-semibold" id=""
                                                            data-id="">Zip/Postal Code</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="zipcode" class="form-control"
                                                            aria-describedby="" id="" data-id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-7">
                                                        <div class="form-check float-end">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label fw-semibold"
                                                                for="flexCheckDefault">Wellcome Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-4">
                                                        <label for="country" class="col-form-label fw-semibold" id=""
                                                            data-id="">Country</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <select class="form-select" aria-label="Default select example"
                                                            id="country" data-id="">
                                                            <option selected>United States</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="Save" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        // add row
        $("#addRow").click(function() {
            var html = '';
            html += '<div class="row g-3 align-items-center" id="inputFormRow">';
            html += '<div class="col-4">';
            html += '<label for="group" class="col-form-label fw-semibold" id="" data-id="">Group</label>';
            html += '</div>';
            html += '<div class="col-8">';
            html +=
                '<input type="text" id="group" name="title[]"  class="form-control" aria-describedby="" id="" data-id=""/>';
            html += '</div>';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });
    </script>
@endsection
