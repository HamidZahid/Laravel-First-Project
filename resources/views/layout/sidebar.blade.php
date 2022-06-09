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
                        <span class="icon-user mr-3"></span>Add Customer
                    </a>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>
                                <li><a href="{{ url('add-customer') }}">Add Customer</a></li>
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Health</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion">
                    <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo" class="collapsible">
                        <span class="icon-user mr-3"></span>Add Supplier
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne">
                        <div>
                            <ul>
                                <li><a href="{{ url('add-supplier') }}">Add Supplier</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>
                        </div>
                    </div>

                </li>
                <li><a href="{{ url('bills') }}"><span class="icon-notifications mr-3"></span> Manage Accounts</a></li>
                <li><a href="{{ url('leads') }}"><span class="icon-location-arrow mr-3"></span> Add Expenses</a></li>
                <li><a href="{{ url('new-po') }}"><span class="icon-pie-chart mr-3"></span> Add New Account</a></li>
                <li><a href="{{ url('payment-recieved') }}"><span class="icon-pie-chart mr-3"></span> Add Products</a></li>
                <li><a href="{{ url('payment') }}"><span class="icon-pie-chart mr-3"></span> Add Supplier</a></li>
                <li><a href="{{ url('purchase-order') }}"><span class="icon-pie-chart mr-3"></span> Add Warehouse</a></li>
                <li><a href="{{ url('supplier-list') }}"><span class="icon-pie-chart mr-3"></span> Assets</a></li>
                <li><a href="{{ url('vendor-list') }}"><span class="icon-pie-chart mr-3"></span> Credit Customers</a></li>
                <li><a href="{{ url('groups') }}"><span class="icon-users mr-3"></span> Customers List</a></li>
                <li><a href="{{ url('deadstock') }}"><span class="icon-users mr-3"></span> Dead Stock List</a></li>
                <li><a href="{{ url('Edittransaction') }}"><span class="icon-users mr-3"></span> Edit Transaction</a></li>
                <li><a href="{{ url('ExpireProducts') }}"><span class="icon-users mr-3"></span> Expire Products</a></li>
                <li><a href="{{ url('managecategories') }}"><span class="icon-users mr-3"></span> Manage Categories</a></li>
                <li><a href="{{ url('manageexpenseinvoice') }}"><span class="icon-users mr-3"></span> Manage Expense Invoice</a></li>
                <li><a href="{{ url('manageinvoices') }}"><span class="icon-users mr-3"></span> Manage Invoices</a></li>
                <li><a href="{{ url('newquote') }}"><span class="icon-users mr-3"></span> New Quote</a></li>
                <li><a href="{{ url('newsalesinvoice') }}"><span class="icon-users mr-3"></span> New Sales Invoice</a></li>
                <li><a href="{{ url('newtransfer') }}"><span class="icon-users mr-3"></span> New Transfer</a></li>
                <li><a href="{{ url('paidcustomers') }}"><span class="icon-users mr-3"></span> Paid Customers</a></li>
                <li><a href="{{ url('paidexpenses') }}"><span class="icon-users mr-3"></span> Paid Expenses Invoice</a></li>
                <li><a href="{{ url('PaidInvoice') }}"><span class="icon-users mr-3"></span> Paid Invoice</a></li>
                <li><a href="{{ url('quote') }}"><span class="icon-users mr-3"></span> Quote</a></li>
                <li><a href="{{ url('recurringinvoices') }}"><span class="icon-users mr-3"></span> Recurring Invoices</a></li>
                <li><a href="{{ url('salesinvoice') }}"><span class="icon-users mr-3"></span> Sales Invoice</a></li>
                <li><a href="{{ url('supplierinvoice') }}"><span class="icon-users mr-3"></span> Supplier Invoice</a></li>
                <li><a href="{{ url('transaction') }}"><span class="icon-users mr-3"></span> Transaction</a></li>
                <li><a href="{{ url('unclearedtransaction') }}"><span class="icon-users mr-3"></span> Uncleared Transaction</a></li>
                <li><a href="{{ url('unpaidenpenseinvoice') }}"><span class="icon-users mr-3"></span> Unpaid Expense Invoice</a></li>
                <li><a href="{{ url('unpaidinvoice') }}"><span class="icon-users mr-3"></span> Unpaid Invoice</a></li>
                <li><a href="#"><span class="icon-sign-out mr-3"></span>Sign out</a></li>
            </ul>
        </div>
    </div>

</aside>


@include('layout.footer')
