@extends('admin.index')
@section('title', 'Thêm mới sản phẩm')

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Thêm Mới Sản Phẩm</h1>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @include('admin.template.messages')
            <form role="form" action="{{url('admin/products/save')}}" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#activity" data-toggle="tab">Thông tin chung</a></li>
                                <li><a href="#timeline" data-toggle="tab">Hình ảnh</a></li>
                                <li><a href="#settings" data-toggle="tab">Mô Tả Sản Phẩm </a></li>
                            </ul>
                            <div class="tab-content">
                                <!-- Thông tin chung -->
                                <div class="active tab-pane" id="activity">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 mg-top-20">
                                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                                            <label for="exampleInputEmail1">Tên sản phẩm<span class="obligatory">*</span></label>
                                        </div>
                                        <div class=" form-group  col-md-6 col-sm-6 col-xs-12 @if($errors->first('name')) has-error @endif">
                                            <input type="text" name="name" class="form-control"  placeholder="" maxlength="255" value="{{ old('name')}}">
                                            <span class="text-danger"><p>{{ $errors->first('name') }}</p></span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 mg-top-20">
                                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                                            <label for="video_url">Link Video<span class="obligatory"></span></label>
                                        </div>
                                        <div class=" form-group  col-md-6 col-sm-6 col-xs-12 @if($errors->first('video_url')) has-error @endif">
                                            <input type="url" name="video_url" class="form-control"  placeholder="" maxlength="255" value="{{ old('video_url')}}">
                                            <span class="text-danger"><p>{{ $errors->first('video_url') }}</p></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 mg-top-20">
                                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                                            <label for="keyword">Keyword <span class="obligatory"></span></label>
                                        </div>
                                        <div class=" form-group  col-md-6 col-sm-6 col-xs-12 @if($errors->first('keywords')) has-error @endif">
                                            <input type="text" name="keywords" class="form-control"  placeholder="" maxlength="255" value="{!! old('keywords',isset($dataProducts)?$dataProducts->keywords:NULL) !!}">
                                            <span class="text-danger"><p>{{ $errors->first('keywords') }}</p></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 mg-top-20">
                                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                                            <label for="meta_description ">Meta Description<span class="obligatory"></span></label>
                                        </div>
                                        <div class=" form-group  col-md-6 col-sm-6 col-xs-12 @if($errors->first('meta_description')) has-error @endif">
                                            <input type="text" name="meta_description" class="form-control"  placeholder="" maxlength="255" value="{!! old('meta_description',isset($dataProducts)?$dataProducts->meta_description:NULL) !!}">
                                            <span class="text-danger"><p>{{ $errors->first('meta_description') }}</p></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                                            <label for="exampleInputEmail1">Trạng Thái</label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 @if($errors->first('status')) has-error @endif">
                                            <select name="status" id="status"   class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <option @if(old('status') == 1 ) selected ="selected" @endif value="1" >Hiển thị</option>
                                                <option @if(old('status') == 2 ) selected ="selected" @endif value="2" >Ẩn</option>
                                            </select>
                                          
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="timeline">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                                            <label for="exampleInputEmail1"></label>
                                        </div>
                                        <div class="col-xs-12" id="gallery">
                                            <div class="col-md-3 col-sm-6 col-xs-12 form-group gallery-image">
                                                <div class="preview showimg" class="thumbbox" style="margin-top: 10px;">
                                                    <input type="file" class="gallery-input" name="gallery[]"  value="" placeholder = "" >
                                                    <img class="thumbimage" src="{{asset('admin/images/icons/icon-img.png')}}" alt="Image preview..." />
                                                    <a class="action remove-img glyphicon glyphicon-remove hidden" href="javascript:void(0)" ></a>
                                                </div>
                                                <div class="caption">
                                                    <input class="caption" name="caption[]" placeholder="Caption hình"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thông số kỹ thuật -->
                                <div class="tab-pane" id="settings">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 mg-top-20">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                                            <label for="exampleInputEmail1">Tóm Tắt</label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                                            <textarea id="summary" name="summary" rows="10" cols="80">{{ old('summary')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                                            <label for="exampleInputEmail1">Mô Tả</label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                                            <textarea id="short_description" name="short_description" rows="10" cols="80">{{ old('short_description')}}</textarea>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-3 col-sm-6 col-xs-12 ">
                                            <label for="exampleInputEmail1">Chi Tiết<span class="obligatory"></span></label>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                                            <textarea id="description" name="description" rows="10" cols="80">{{ old('description')}}</textarea>

                                        </div>
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
                        </div>
                      <!-- /.tab-content -->
                   <!-- /.nav-tabs-custom -->
                </div>
            </form>
        </div>
    </div>
@endsection