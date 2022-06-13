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
                                <div class="col-4">
                                    <div class="card">
                                        <div class="h5 p-3 pb-0">Add Deposit</div>
                                        <hr class="text-muted">
                                        <div class="card-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="account" class="form-label fw-bold" id=""
                                                        data-id="">Account</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="account" data-id="">
                                                        <option selected>Choose an account</option>
                                                        <option value="1" id="" data-id="">One</option>
                                                        <option value="2" id="" data-id="">Two</option>
                                                        <option value="3" id="" data-id="">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="code" class="form-label fw-bold" id=""
                                                        data-id="">Code</label>
                                                    <input type="text" class="form-control" id="code" data-id=""
                                                        placeholder="INC-00008" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date" class="form-label fw-bold" id=""
                                                        data-id="">Date</label>
                                                    <input type="date" class="form-control" id="date" data-id="" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="description" class="form-label fw-bold" id=""
                                                        data-id="">Description</label>
                                                    <input type="text" class="form-control" id="description" data-id="" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="currency" class="form-label fw-bold" id=""
                                                        data-id="">Currency</label>
                                                    <input type="text" class="form-control" id="currency" data-id=""
                                                        placeholder="USD" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="category" class="form-label fw-bold" id=""
                                                        data-id="">Category</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="category" data-id="">
                                                        <option selected>Choose a category</option>
                                                        <option value="1" id="" data-id="">One</option>
                                                        <option value="2" id="" data-id="">Two</option>
                                                        <option value="3" id="" data-id="">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tags" class="form-label fw-bold" id=""
                                                        data-id="">Tags</label>
                                                    <input type="password" class="form-control" id="tags" data-id="" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="company" class="form-label fw-bold" id=""
                                                        data-id="">Company</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="company" data-id="">
                                                        <option selected>None</option>
                                                        <option value="1" id="" data-id="">One</option>
                                                        <option value="2" id="" data-id="">Two</option>
                                                        <option value="3" id="" data-id="">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="payer" class="form-label fw-bold" id=""
                                                        data-id="">Payer</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="payer" data-id="">
                                                        <option selected>Choose a category</option>
                                                        <option value="1" id="" data-id="">One</option>
                                                        <option value="2" id="" data-id="">Two</option>
                                                        <option value="3" id="" data-id="">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="staff" class="form-label fw-bold" id=""
                                                        data-id="">Staff</label>
                                                    <input type="text" class="form-control" id="staff" data-id=""
                                                        placeholder="None" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="method" class="form-label fw-bold" id=""
                                                        data-id="">Method</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="method" data-id="">
                                                        <option selected>Select payment method</option>
                                                        <option value="1" id="" data-id="">One</option>
                                                        <option value="2" id="" data-id="">Two</option>
                                                        <option value="3" id="" data-id="">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="status" class="form-label fw-bold" id=""
                                                        data-id="">Status</label>
                                                    <input type="text" class="form-control" id="status" data-id="" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="code" class="form-label fw-bold" id=""
                                                        data-id="">Code</label>
                                                    <input type="text" class="form-control" id="code" data-id=""
                                                        placeholder="cleared" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ref" class="form-label fw-bold" id=""
                                                        data-id="">Ref#</label>
                                                    <input type="text" class="form-control" id="ref" data-id="" />
                                                </div>
                                                <button type="submit" class="btn purple text-light">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card">
                                        <div class="h5 p-3 pb-0">Recent Deposit</div>
                                        <hr class="text-muted">
                                        <div class="card-body">
                                            <table class="table table-striped">
                                                <thead class="">
                                                    <tr>
                                                        <th scope="col" id="" data-id="">Account</th>
                                                        <th scope="col" id="" data-id="">Description</th>
                                                        <th scope="col" id="" data-id="">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-bold" id="" data-id="">JP Morgan Chase & Co
                                                        </td>
                                                        <td class="fw-bold purple-text" id="" data-id="">Invoice 3 Payments
                                                        </td>
                                                        <td class="fw-bold" id="" data-id="">149.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold" id="" data-id="">Cash</td>
                                                        <td class="fw-bold purple-text" id="" data-id="">Invoice 1 Payments
                                                        </td>
                                                        <td class="fw-bold green-text" id="" data-id="">144.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold" id="" data-id="">Cash</td>
                                                        <td class="fw-bold purple-text" id="" data-id="">Interest</td>
                                                        <td class="fw-bold" id="" data-id="">700.00</td>
                                                    </tr>
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
        </div>
    </main>
@endsection
