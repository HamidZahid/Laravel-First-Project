@include('layout.header')
<aside class="sidebar py-5">
    <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
        </a>
    </div>
    <div class="side-inner">
        <div class="profile">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid">
            <h3 class="name">Craig David</h3>
            <span class="country">Web Designer</span>
        </div>
        <div class="nav-menu">
            <ul>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne" class="collapsible">
                        <span class="icon-user mr-3"></span> Add Customer
                    </a>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>
                                <li><a href="{{ url('add-customer') }}"> Add Customer</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo" class="collapsible">
                        <span class="icon-user mr-3"></span> Add Supplier
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>
                                <li><a href="{{ url('add-supplier') }}"> Add Supplier</a></li>
                            </ul>
                        </div>
                    </div>

                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree" class="collapsible">
                        <span class="icon-user mr-3"></span> Manage
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>
                                <li><a href="{{ url('managecategories') }}"><span class="icon-users mr-3"></span>
                                        Manage Categories</a></li>
                                <li><a href="{{ url('manageaccounts') }}"><span class="icon-users mr-3"></span> Manage
                                        Accounts</a></li>
                                {{-- <li><a href="{{ url('manageexpenseinvoice') }}"><span class="icon-users mr-3"></span> Manage Expenses Invoice</a></li>
                <li><a href="{{ url('manageinvoices') }}"><span class="icon-users mr-3"></span> Manage Invoices</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour" class="collapsible">
                        <span class="icon-user mr-3"></span> Add
                    </a>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>
                                <li><a href="{{ url('addexpense') }}"><span class="icon-users mr-3"></span> Add
                                        Expense</a></li>
                                <li><a href="{{ url('addnewaccount') }}"><span class="icon-users mr-3"></span> Add New
                                        Account</a>
                                </li>
                                <li><a href="{{ url('addsupplier') }}"><span class="icon-users mr-3"></span> Add
                                        Supplier</a></li>
                                <li><a href="{{ url('addwarehouse') }}"><span class="icon-users mr-3"></span> Add
                                        Warehouse</a></li>
                            </ul>
                        </div>
                    </div>

                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                        aria-controls="collapseFive" class="collapsible">
                        <span class="icon-user mr-3"></span> Paid
                    </a>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>
                                <li><a href="{{ url('paidcustomers') }}"><span class="icon-users mr-3"></span> Paid
                                        Customers</a>
                                </li>
                                <li><a href="{{ url('paidexpenses') }}"><span class="icon-users mr-3"></span> Paid
                                        Expenses</a></li>
                                <li><a href="{{ url('PaidInvoice') }}"><span class="icon-users mr-3"></span> Paid
                                        Invoice</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                        aria-controls="collapseSix" class="collapsible">
                        <span class="icon-user mr-3"></span> UnPaid
                    </a>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>
                                <li><a href="{{ url('unpaidinvoice') }}"><span class="icon-users mr-3"></span> UnPaid
                                        Voice</a></li>
                                <li><a href="{{ url('unpaidexpenseinvoice') }}"><span class="icon-users mr-3"></span>
                                        UnPaid Expense Voice</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                        aria-controls="collapseSeven" class="collapsible">
                        <span class="icon-user mr-3"></span> New
                    </a>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>

                                <li><a href="{{ url('newquote') }}"><span class="icon-users mr-3"></span> New
                                        Quote</a></li>
                                <li><a href="{{ url('newsalesinvoice') }}"><span class="icon-users mr-3"></span> New
                                        Sales Invoice</a></li>
                                <li><a href="{{ url('newtransfer') }}"><span class="icon-users mr-3"></span> New
                                        Transfer</a></li>
                            </ul>
                        </div>
                    </div>

                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                        aria-controls="collapseEight" class="collapsible">
                        <span class="icon-user mr-3"></span> Payments
                    </a>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>
                                <li><a href="{{ url('payment-recieved') }}"><span
                                            class="icon-pie-chart mr-3"></span> Payment
                                        Recieved</a></li>
                                <li><a href="{{ url('payment') }}"><span
                                            class="icon-pie-chart mr-3"></span> Payment</a></li>
                                <li><a href="{{ url('purchase-order') }}"><span
                                            class="icon-pie-chart mr-3"></span> Purchase Order</a>
                                </li>
                                <li><a href="{{ url('supplier-list') }}"><span
                                            class="icon-pie-chart mr-3"></span> Supplier List</a>
                                </li>
                                <li><a href="{{ url('vendor-list') }}"><span
                                            class="icon-pie-chart mr-3"></span> Vendor List</a></li>
                                <li><a href="{{ url('groups') }}"><span class="icon-users mr-3"></span> Groups</a>
                                </li>
                                <li><a href="{{ url('unclearedtransaction') }}"><span class="icon-users mr-3"></span>
                                        Uncleared
                                        Transaction</a></li>
                                <li><a href="{{ url('transaction') }}"><span class="icon-users mr-3"></span>
                                        Transaction</a></li>
                                <li><a href="{{ url('salesinvoice') }}"><span class="icon-users mr-3"></span> Sales
                                        Invoice</a></li>
                                <li><a href="{{ url('recurringinvoices') }}"><span class="icon-users mr-3"></span>
                                        Recurring
                                        Invoices</a></li>
                                <li><a href="{{ url('edittransaction') }}"><span class="icon-users mr-3"></span> Edit
                                        Transaction</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false"
                        aria-controls="collapseNine" class="collapsible">
                        <span class="icon-user mr-3"></span> Expire
                    </a>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>

                                <li><a href="{{ url('deadstock') }}"><span class="icon-users mr-3"></span> Dead
                                        Stock</a></li>

                                <li><a href="{{ url('expireproductlist') }}"><span class="icon-users mr-3"></span>
                                        Expire Product
                                        list</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false"
                        aria-controls="collapseTen" class="collapsible">
                        <span class="icon-user mr-3"></span> Assets
                    </a>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>

                                <li><a href="{{ url('assets') }}"><span class="icon-users mr-3"></span> Assets</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="{{ url('bills') }}"><span class="icon-notifications mr-3"></span> Bills</a></li>
                <li><a href="{{ url('leads') }}"><span class="icon-location-arrow mr-3"></span> Leads</a></li>
                <li><a href="{{ url('new-po') }}"><span class="icon-pie-chart mr-3"></span> New PO</a></li>
                <li><a href="#"><span class="icon-sign-out mr-3"></span> Sign out</a></li>
            </ul>
        </div>
    </div>

</aside>


@include('layout.footer')
