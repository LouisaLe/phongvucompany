@extends('admin.index')
@section('title', 'Thêm mới sản phẩm')

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Quản Lý Báo Giá</h2>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
        </div>
        <div class="box-body">
            @include('admin.template.messages')
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="@if(!$list) active @endif"><a href="{{ url('/admin/order/list-new') }}" >Mới</a></li>
                            <li class="@if($list) active @endif"><a href="{{ url('/admin/order/list-active')}}" }}>Đã xử lý</a></li>
                        </ul>
                        <div class="tab-content">
                            <!-- Thông tin chung -->
                            <div class="active tab-pane" id="activity">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                    <tr role="row">

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 50px;" >STT</th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 307px;">Tên Sản Phẩm</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 307px;">Khách Hàng</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 307px;">Điện Thoại</th>

                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 307px;">Ngày</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 181px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbody-wallets">
                                    <?php  $stt = 0 ;?>
                                    @foreach($orders as $val)
                                        <?php $product = getProductById($val->product_id);?>
                                        <tr class="row_{{ $val->id }} select" >
                                            <td class="text-center "> {{ $stt = $stt +1 }}</td>

                                            <td>@if(isset($product) && $product) {{$product->name}} @else {{'Sản phẩm không tồn tại'}} @endif</td>
                                            <td class="">{{$val->fullname}}</td>
                                            <td class="">{{$val->phone_number}}</td>

                                            <td class="">{{$val->created_at}}</td>
                                            <td class="text-center ">
                                                <a href="{{url('admin/order/active', $val->id)}}"  title="Xác nhận báo giá" class=""><i class="fa fa-check-circle"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="8">
                                            @if(!$stt) {{'Hiện tại không có báo giá!'}} @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            {!! $orders -> links()!!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- /.tab-content -->
                    <!-- /.nav-tabs-custom -->
                </div>
        </div>
    </div>
@endsection