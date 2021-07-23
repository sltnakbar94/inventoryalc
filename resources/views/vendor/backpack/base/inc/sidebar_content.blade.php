<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="las la-tachometer-alt"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@if(backpack_user()->hasRole('sales'))
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('warehouseout') }}'><i class="lar la-file"></i> Delivery Order</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('stackholder') }}'><i class="las la-list-ol"></i> Stackholders</a></li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-folder"></i> Report</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportdeliveryorder') }}'><i class="lar la-file-alt"></i> Delivery Orders</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportdeliverynote') }}'><i class="lar la-file-alt"></i> Delivery Notes</a></li>
        </ul>
    </li>
@endif
@if(backpack_user()->hasRole('operator-gudang'))
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('goodreceive') }}'><i class='las la-industry'></i> Terima Barang</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('deliverynote') }}'><i class="lar la-file"></i> Surat Jalan</a></li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-folder"></i> Report</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportgoodreceive') }}'><i class='lar la-file-alt'></i> Terima Barang</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportdeliverynote') }}'><i class='lar la-file-alt'></i> Surat Jalan</a></li>
        </ul>
    </li>
@endif
@if(backpack_user()->hasRole('purchasing'))
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('warehouseout') }}'><i class="lar la-file"></i> Delivery Order</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('invoice') }}'><i class="lar la-file-alt"></i> Invoice</a></li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-project-diagram"></i> Config</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('item') }}'><i class="las la-list-ol"></i> Items</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class="las la-list-ol"></i> Categories</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('brand') }}'><i class="las la-list-ol"></i> Brands</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('unit') }}'><i class="las la-list-ol"></i> Units</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('company') }}'><i class="las la-list-ol"></i> Companies</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('stackholder') }}'><i class="las la-list-ol"></i> Stackholders</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('gudang') }}'><i class='las la-list-ol'></i> Warehouses</a></li>
        </ul>
    </li>
@endif
@if (backpack_user()->hasRole('admin'))
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-folder"></i> Report</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportgoodreceive') }}'><i class='lar la-file-alt'></i> Terima Barang</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportdeliveryorder') }}'><i class='lar la-file-alt'></i> Delivery Orders</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportdeliverynote') }}'><i class='lar la-file-alt'></i></i> Delivery Notes</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportinvoice') }}'><i class='lar la-file-alt'></i> Invoice</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportpiutang') }}'><i class='lar la-file-alt'></i> Piutang</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportitem') }}'><i class='lar la-file-alt'></i> Item</a></li>
        </ul>
    </li>
@endif
@if (backpack_user()->hasRole('superadmin'))
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('goodreceive') }}'><i class='las la-industry'></i> Terima Barang</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('warehouseout') }}'><i class="lar la-file"></i> Delivery Order</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('deliverynote') }}'><i class="lar la-file"></i> Surat Jalan</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('invoice') }}'><i class="lar la-file-alt"></i> Invoice</a></li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-folder"></i> Report</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportgoodreceive') }}'><i class='lar la-file-alt'></i> Terima Barang</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportdeliveryorder') }}'><i class='lar la-file-alt'></i> Delivery Orders</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportdeliverynote') }}'><i class='lar la-file-alt'></i></i> Delivery Notes</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportinvoice') }}'><i class='lar la-file-alt'></i> Invoice</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportpiutang') }}'><i class='lar la-file-alt'></i> Piutang</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('reportitem') }}'><i class='lar la-file-alt'></i> Item</a></li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-project-diagram"></i> Config</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('item') }}'><i class="las la-list-ol"></i> Items</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class="las la-list-ol"></i> Categories</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('brand') }}'><i class="las la-list-ol"></i> Brands</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('unit') }}'><i class="las la-list-ol"></i> Units</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('company') }}'><i class="las la-list-ol"></i> Companies</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('stackholder') }}'><i class="las la-list-ol"></i> Stackholders</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('gudang') }}'><i class='las la-list-ol'></i> Warehouses</a></li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="las la-user-friends"></i> Authentication</a>
        <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="las la-user-tie"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="las la-user-tag"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="las la-user-lock"></i> <span>Permissions</span></a></li>
        </ul>
    </li>
@endif
