@extends('admin.index')
@section('title', 'Thêm mới tin tức')

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Những Con Số</h2>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @include('admin.template.messages')
            <form role="form" action="{{url('admin/fund-facts/save')}}" method="post" id="form-add" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="ab_id" value="{{old('id',isset($fundFacts)?$fundFacts->id:NULL)}}">
                <div class="box-body">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Kinh Nghiệm<span class="obligatory">*</span></label>
                        </div>
                        <div class=" form-group  col-md-12 @if($errors->first('experience')) has-error @endif">
                            <input type="number" name="experience" class="form-control"  placeholder="Kinh Nghiệm" maxlength="255"
                                   value="{{ old('experience', isset($fundFacts)?$fundFacts->experience:NULL)}}">
                            <span class="text-danger"><p>{{ $errors->first('experience') }}</p></span>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Đơn Hàng<span class="obligatory">*</span></label>
                        </div>
                        <div class=" form-group  col-md-12 @if($errors->first('orders')) has-error @endif">
                            <input type="number" name="orders" class="form-control"  placeholder="Đơn Hàng" maxlength="255"
                                   value="{{ old('experience', isset($fundFacts)?$fundFacts->orders:NULL)}}">
                            <span class="text-danger"><p>{{ $errors->first('orders') }}</p></span>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Khách Hàng<span class="obligatory">*</span></label>
                        </div>
                        <div class=" form-group  col-md-12 @if($errors->first('customers')) has-error @endif">
                            <input type="number" name="customers" class="form-control"  placeholder="Khách Hàng" maxlength="255"
                                   value="{{ old('customers', isset($fundFacts)?$fundFacts->customers:NULL)}}">
                            <span class="text-danger"><p>{{ $errors->first('customers') }}</p></span>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Sản Phẩm<span class="obligatory">*</span></label>
                        </div>
                        <div class=" form-group  col-md-12 @if($errors->first('product')) has-error @endif">
                            <input type="number" name="product" class="form-control"  placeholder="Sản Phẩm" maxlength="255"
                                   value="{{ old('product', isset($fundFacts)?$fundFacts->product:NULL)}}">
                            <span class="text-danger"><p>{{ $errors->first('product') }}</p></span>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                            <label for="exampleInputEmail1"></label>
                        </div>
                        <div class=" form-group  col-md-6 col-sm-6 col-xs-12 ">
                            <button id="btn-submit" type="submit" class="btn btn-primary btn-submit">Submit</button>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </form>
        </div>
    </div>
@endsection