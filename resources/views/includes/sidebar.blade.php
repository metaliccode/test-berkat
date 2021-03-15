<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard') }}"><i class
                        ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Products</li>
                <li class="">
                    <a href="{{ route('products.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Data Produk</a>
                </li>
                <li class="">
                    <a href="{{ route('products.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Produk</a>
                </li>

                <li class="menu-title">Customers</li>
                <li class="">
                    <a href="{{ route('customers.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Data Pelanggan</a>
                </li>
                <li class="">
                    <a href="{{ route('customers.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Pelanggan Baru</a>
                </li>

                <li class="menu-title">Sales Order</li>
                <li class="">
                    <a href="{{ route('salesorders.index')}}"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                </li>
                <li class="">
                    <a href="{{ route('salesorders.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Transaksi Baru</a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
<!-- /#left-panel -->