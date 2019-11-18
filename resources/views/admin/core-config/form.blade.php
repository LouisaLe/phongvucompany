@extends('admin.index')
@section('title', 'Thêm mới tin tức')

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Cấu hình </h2>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @include('admin.template.messages')
            <form role="form" action="{{url('admin/config/save')}}" method="post" id="form-add" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="map_id" value="{{old('id',isset($map)?$map->id:NULL)}}">
                <div class="box-body">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Bản đồ<span class="obligatory">*</span></label>
                        </div>
                        <div class=" form-group  col-md-12 @if($errors->first('map')) has-error @endif">
                            <input type="text" name="map" class="form-control"  placeholder="lat,long" maxlength="255"
                                   value="{{ old('map', isset($map)?$map->value:NULL)}}">
                            <span class="text-danger"><p>{{ $errors->first('map') }}</p></span>
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