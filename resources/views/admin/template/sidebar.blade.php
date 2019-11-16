<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">DANH SÁCH MENU</li>
        <li class="treeview hidden">
            <a href="#">
                <i class="fa fa-book"></i>
                <span>Danh Mục Sản Phẩm</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li><a href="{{url('admin/category/list')}}"><i class="fa fa-circle-o"></i>Danh Sách </a></li>
                <li><a href="{{url('admin/category/getAdd')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Sản Phẩm</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li><a href="{{url('admin/products/list')}}"><i class="fa fa-circle-o"></i>Danh Sách </a></li>
                <li><a href="{{url('admin/products/getAdd')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Yêu Cầu Báo Giá</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li><a href="{{url('admin/order/list-new')}}"><i class="fa fa-circle-o"></i>Danh Sách </a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-comments"></i>
                <span>Đánh Giá</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li><a href="{{url('admin/feed-back/list')}}"><i class="fa fa-circle-o"></i>Danh Sách </a></li>
                <li><a href="{{url('admin/feed-back/new')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-comments"></i>
                <span>Slider</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li><a href="{{url('admin/slider/list')}}"><i class="fa fa-circle-o"></i>Danh Sách </a></li>
                <li><a href="{{url('admin/slider/new')}}"><i class="fa fa-circle-o"></i>Thêm Mới</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="{{url('admin/fund-facts/view')}}">
                <i class="fa fa-users"></i>
                <span>Những Con Số</span>
            </a>

        </li>
        <li class="treeview">
            <a href="{{url('admin/abouts/getEdit')}}">
                <i class="fa fa-share"></i>
                <span>Giới thiệu</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
        </li>
        <li class="treeview">
            <a href="{{ url('admin/logout')}}">
                <i class="fa fa-fw fa-sign-out"></i>
                <span>Đăng xuất</span>
            </a>
        </li>
    </ul>
</section>