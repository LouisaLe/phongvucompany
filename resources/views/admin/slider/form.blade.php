@extends('admin.index')
@section('title', 'Thêm mới tin tức')

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Thêm Slider</h2>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @include('admin.template.messages')
            <form role="form" action="{{url('admin/slider/save')}}" method="post" id="form-add" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="slider_id" value="{{old('id',isset($slider)?$slider->id:NULL)}}">
                <div class="box-body">

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                            <label for="exampleInputEmail1">Ảnh</label>
                        </div>
                        <div class="col-xs-12 image-content @if($errors->first('image')) has-error @endif">
                            <input type="file" class="image-upload" name="image"  value="" placeholder = "" >
                            <div class="preview showimg feedback" class="thumbbox" style="margin-top: 10px;">
                                <img class="thumbimage" src="{{asset('uploads/images')}}/<?php echo isset($slider )&& $slider->image? 'slider/'.$slider->image:'icons/icon-img.png' ?> " alt="Image preview..." />
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Tiêu đề<span class="obligatory">*</span></label>
                        </div>
                        <div class=" form-group  col-md-12 @if($errors->first('title')) has-error @endif">
                            <input type="text" name="title" class="form-control"  placeholder="Tiêu đề" maxlength="255"
                                   value="{{ old('title', isset($slider)?$slider->title:NULL)}}">
                            <span class="text-danger"><p>{{ $errors->first('title') }}</p></span>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Thứ tự<span class="obligatory"></span></label>
                        </div>
                        <div class="form-group  col-md-12 @if($errors->first('position')) has-error @endif">
                            <input type="number" name="position" class="form-control"  placeholder="Thứ tự" maxlength="255"
                                   value="{{ old('position', isset($slider)?$slider->position:NULL)}}">
                            <span class="text-danger"><p>{{ $errors->first('position') }}</p></span>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Nhóm<span class="obligatory"></span></label>
                        </div>
                        <div class="form-group  col-md-12 @if($errors->first('group')) has-error @endif">
                            <input type="text" name="group" class="form-control"  placeholder="Nhóm" maxlength="255"
                                   value="{{ old('group', isset($slider)?$slider->group:NULL)}}">
                            <span class="text-danger"><p>{{ $errors->first('group') }}</p></span>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                        <div class="col-md-12 col-xs-12">
                            <label for="exampleInputEmail1">Nội dung<span class="obligatory">*</span></label>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <textarea rows="5" cols="161" id="feed_back" name="content" >{{ old('content',isset($slider)? $slider->content:NULL)}}</textarea>
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