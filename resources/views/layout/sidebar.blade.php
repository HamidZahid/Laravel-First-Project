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
                <li><a href="{{ url('bills') }}"><span class="icon-notifications mr-3"></span>Bills</a></li>
                <li><a href="{{ url('leads') }}"><span class="icon-location-arrow mr-3"></span>Leads</a></li>
                <li><a href="{{ url('new-po') }}"><span class="icon-pie-chart mr-3"></span>New PO</a></li>
                <li><a href="{{ url('payment-recieved') }}"><span class="icon-pie-chart mr-3"></span>Payment Recieved</a></li>
                <li><a href="{{ url('payment') }}"><span class="icon-pie-chart mr-3"></span>Payment</a></li>
                <li><a href="{{ url('purchase-order') }}"><span class="icon-pie-chart mr-3"></span>Purchase Order</a></li>
                <li><a href="{{ url('supplier-list') }}"><span class="icon-pie-chart mr-3"></span>Supplier List</a></li>
                <li><a href="{{ url('vendor-list') }}"><span class="icon-pie-chart mr-3"></span>Vendor List</a></li>
                <li><a href="{{ url('groups') }}"><span class="icon-users mr-3"></span>Groups</a></li>
                <li><a href="{{ url('unpaidinvoice') }}"><span class="icon-users mr-3"></span> UnPaid Voice</a></li>
                <li><a href="{{ url('unpaidexpenseinvoice') }}"><span class="icon-users mr-3"></span> UnPaid Expense Voice</a></li>
                <li><a href="{{ url('unclearedtransaction') }}"><span class="icon-users mr-3"></span> Uncleared Transaction</a></li>
                <li><a href="{{ url('transaction') }}"><span class="icon-users mr-3"></span> Transaction</a></li>
                <li><a href="{{ url('salesinvoice') }}"><span class="icon-users mr-3"></span> Sales Invoice</a></li>
                <li><a href="{{ url('recurringinvoices') }}"><span class="icon-users mr-3"></span> Recurring Invoices</a></li>
                <li><a href="#"><span class="icon-sign-out mr-3"></span>Sign out</a></li>
            </ul>
        </div>
    </div>

</aside>


@include('layout.footer')
