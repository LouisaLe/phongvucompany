@extends('admin.index')
@section('title', 'Chỉnh sửa tin tức')

@section('content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h2 class="box-title">Giới Thiệu</h2>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
    </div>
    <div class="box-body">
        @include('admin.template.messages')
        <form role="form" action="{{url('admin/abouts/postEdit')}}" method="post" id="form-add" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="box-body">
                <div class="form-group col-md-12 col-sm-12 col-xs-12 hidden ">
                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                        <label for="exampleInputEmail1">Tiêu đề<span class="obligatory">*</span></label>
                    </div>
                    <div class=" form-group  col-md-6 col-sm-6 col-xs-12 @if($errors->first('title')) has-error @endif">
                        <input type="text" name="title" class="form-control"  placeholder="" maxlength="255" value="{!! old('name',isset($dataAbouts)?$dataAbouts->title:NULL) !!}">
                        <span class="text-danger"><p>{{ $errors->first('title') }}</p></span>
                    </div>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                        <label for="exampleInputEmail1">Ảnh</label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 image-content @if($errors->first('image')) has-error @endif">
                        <input type="file" class="image-upload" name="image"  value="" placeholder = "" >
                        <div class="preview showimg feedback" class="thumbbox" style="margin-top: 10px;">
                            <?php $image = isset($dataAbouts)?'uploads/images/wyswyg/'.$dataAbouts->image : 'admin/images/icons/icon-img.png' ;?>
                            <img class="thumbimage" src="{{url($image)}}" alt="Image preview..." />
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-sm-6 col-xs-12 ">
                        <label for="exampleInputEmail1">Nội dung<span class="obligatory">*</span></label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 @if($errors->first('content')) has-error @endif">
                        <textarea id="content" name="content" rows="10" cols="80">{!! old('name',isset($dataAbouts)?$dataAbouts->content:NULL) !!}</textarea>
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