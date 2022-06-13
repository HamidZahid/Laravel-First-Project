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
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-4">
                                            <div class="h5 fw-normal" id="" data-id="">PO 00007</div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8">
                                            <a href="" type="button"
                                                class="btn cyan text-light float-end rounded-0 rounded-end" id=""
                                                data-id="">Save & Close</a>
                                            <a href="" type="button"
                                                class="btn purple text-light  float-end rounded-0 rounded-start" id=""
                                                data-id="">Save</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <form action="" method="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="subject" class="form-label fw-light">Subject</label>
                                                    <input type="text" class="form-control" id="subject"
                                                        aria-describedby="" />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3">
                                                    <label for="supplier" class="form-label fw-light" data-id=""
                                                        id="">Supplier</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="supplier" data-id="">
                                                        <option selected>Select Contact..</option>
                                                        <option value="1" id="" data-id="">One</option>
                                                        <option value="2" id="" data-id="">Two</option>
                                                        <option value="3" id="" data-id="">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3">
                                                    <label for="status" class="form-label fw-light" id=""
                                                        data-id="">Status</label>
                                                    <input type="text" class="form-control" id="status" data-id=""
                                                        aria-describedby="" placeholder="Published" />
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3">
                                                    <label for="currency" class="form-label fw-light" id=""
                                                        data-id="">Currency</label>
                                                    <input type="text" class="form-control" id="currency"
                                                        aria-describedby="" placeholder="USD" data-id="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3">
                                                    <label for="address" class="form-label fw-light" id=""
                                                        data-id="">Address</label>
                                                    <textarea class="form-control" placeholder="" id="address" style="" data-id="" disabled></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3">
                                                    <label for="invoice" class="form-label fw-light" id=""
                                                        data-id="">Invoice Prefix</label>
                                                    <input type="text" class="form-control" id="invoice"
                                                        aria-describedby="" placeholder="PO-" data-id="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3">
                                                    <label for="quantity" class="form-label fw-light" id="" data-id="">Show
                                                        quantity as</label>
                                                    <input type="text" class="form-control" id="quantity"
                                                        aria-describedby="" placeholder="Qty-" data-id="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3 ">
                                                    <label for="invoiceno" class="form-label fw-light" id=""
                                                        data-id="">Invoice #</label>
                                                    <input type="text" class="form-control" id="invoiceno"
                                                        aria-describedby="" placeholder="00007" data-id="" />
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3 ">
                                                    <a type="button" class="btn cyan btn-sm text-light" id="setdiscount"
                                                        aria-describedby="" placeholder="00007" data-id=""><i
                                                            class="fa-solid fa-minus m-1"></i>Set Discount</a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3 ">
                                                    <label for="issued" class="form-label fw-light" id="" data-id="">Issued
                                                        at</label>
                                                    <input type="date" class="form-control" id="issued"
                                                        aria-describedby="" placeholder="00007" data-id="" />
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="search" class="form-control" id="search" data-id=""
                                                    placeholder="search.." />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn purple text-light">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
