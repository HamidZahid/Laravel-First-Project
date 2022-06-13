@extends('layout.main')
@section('main-section')
    @include('layout.sidebar')
    <main>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 --margin-top">
                        <div class="container-fluid">
                            <div class="row my-4">
                                <div class="col-6">
                                    <p class="h3"><i class="fa-solid fa-user fa-lg m-2  text-muted"></i>Leads</p>
                                </div>
                                <div class="col-6 clearfix">
                                    <a href="" type="button" class="btn purple text-light float-end"><i
                                            class="fa-solid fa-plus fa-lg m-2 text-light"></i>New Lead</a>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="card my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="firstname" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="firstname"
                                                        aria-describedby="" id="" data-id="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="middlename" class="form-label">Middle Name</label>
                                                    <input type="text" class="form-control" id="middlename"
                                                        aria-describedby="" id="" data-id="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="lastname" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="lastname"
                                                        aria-describedby="" id="" data-id="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="situation" class="form-label">Situation</label>
                                                    <input type="text" class="form-control" id="situation"
                                                        aria-describedby="" id="" data-id="" id="" data-id="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="company" class="form-label">Company</label>
                                                    <input type="text" class="form-control" id="company" id="" data-id="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="text" class="form-control" id="phone" id="" data-id="">
                                                </div>
                                                <button type="submit" class="btn purple text-light">Submit</button>
                                            </form>
                                        </div>
                                        <div class="col-9">
                                            <div class="container-fluid overflow-auto">
                                                <table id="example" class="display responsive nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Title</th>
                                                            <th>Company</th>
                                                            <th>Phone</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th>Owner</th>
                                                            <th>Manage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>327</td>
                                                            <td>Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>1-234-234-2321</td>
                                                            <td>nixon@emsofinc.com</td>
                                                            <td>Nurturing</td>
                                                            <td>Alex</td>
                                                            <td>
                                                                <a href="" type="button"
                                                                    class="btn btn-sm light-red float-end w-40 rounded-0 rounded-end"
                                                                    id="" data-id=""><i class="fa fa-trash"></i></a>
                                                                <a href="" type="button"
                                                                    class="btn btn-sm orange float-end w-40 rounded-0" id=""
                                                                    data-id=""><i class="fa fa-edit"></i></a>
                                                                <a href="" type="button"
                                                                    class="btn btn-sm purple float-end w-40 rounded-0 rounded-start"
                                                                    id="" data-id=""><i class="fa fa-search"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>327</td>
                                                            <td>Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>1-234-234-2321</td>
                                                            <td>nixon@emsofinc.com</td>
                                                            <td>Nurturing</td>
                                                            <td>Alex</td>
                                                            <td>
                                                                <a href="" type="button"
                                                                    class="btn btn-sm light-red float-end w-40 rounded-0 rounded-end"
                                                                    id="" data-id=""><i class="fa fa-trash"></i></a>
                                                                <a href="" type="button"
                                                                    class="btn btn-sm orange float-end w-40 rounded-0" id=""
                                                                    data-id=""><i class="fa fa-edit"></i></a>
                                                                <a href="" type="button"
                                                                    class="btn btn-sm purple float-end w-40 rounded-0 rounded-start"
                                                                    id="" data-id=""><i class="fa fa-search"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>327</td>
                                                            <td>Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>1-234-234-2321</td>
                                                            <td>nixon@emsofinc.com</td>
                                                            <td>Nurturing</td>
                                                            <td>Alex</td>
                                                            <td>
                                                                <a href="" type="button"
                                                                    class="btn btn-sm light-red float-end w-40 rounded-0 rounded-end"
                                                                    id="" data-id=""><i class="fa fa-trash"></i></a>
                                                                <a href="" type="button"
                                                                    class="btn btn-sm orange float-end w-40 rounded-0" id=""
                                                                    data-id=""><i class="fa fa-edit"></i></a>
                                                                <a href="" type="button"
                                                                    class="btn btn-sm purple float-end w-40 rounded-0 rounded-start"
                                                                    id="" data-id=""><i class="fa fa-search"></i></a>
                                                            </td>
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
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
