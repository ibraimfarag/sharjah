@extends('admin.partials.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3>Other contents</h3>
                        </div>
                    </div>
                </div>
            </div>

            <form class="forms-sample" action="{{ url('admin/research/contents') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" value="{!! csrf_token() !!}" name="_token">

                @foreach($contents as $page)
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title"><b>{{ $page->slug }} content (English)</b></h2>
                                    <div class="form-group">
                                        <label for="exampleInputNamea1">Title</label>
                                        <input required type="text" class="form-control" id="exampleInputNamea1" placeholder="Title" name="data[{{$page->id}}][title]" value="{{ isset($page) ? $page->title : '' }}">
                                    </div>


                                        <div class="form-group content">
                                            <label for="exampleInputEmail3">Content</label>
                                            <input type="hidden" name="data[{{$page->id}}][content]" value="{{ isset($page) ? $page->content : '' }}"/>
                                            <div class="summernote">
                                                {!! isset($page) ? $page->content : '' !!}
                                            </div>
                                        </div>

                                        @if($page->slug=='tab-1'||$page->slug=='tab-2'||$page->slug=='tab-3'||$page->slug=='tab-4')
                                            <h2 class="card-title"><b>{{ $page->slug }} Visibility</b></h2>
                                            <div class="form-group">
                                                <select class="form-control" name="data[{{$page->id}}][is_hidden]">
                                                    <option value="1" {{$page->is_hidden? 'selected' : ''}}>Hidden</option>
                                                    <option value="0" {{!$page->is_hidden? 'selected' : ''}}>Visible</option>
                                                </select>
                                            </div>
                                        @endif

                                        @if($page->slug=='tab-1'||$page->slug=='tab-2'||$page->slug=='tab-3'||$page->slug=='tab-4')
                                            @if(count($page->images))
                                            <strong>Images</strong>
                                            <br/>
                                            <br/>
                                            <div class="row">
                                                @foreach($page->images as $image)
                                                    <div class="col-md-3">
                                                        <img src="{{ asset('public/'.$image->image) }}" width="100%">
                                                        <a href="{{ url('admin/research/contents/delete-image/'.$image->id) }}">Remove</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                                <br/>
                                            @endif
                                            <h2 class="card-title"><b>Uploaded image (1000x700):</b></h2>
                                            <input type="file" class="form-control" name="data[{{$page->id}}][gallery][]" placeholder="Upload Image" multiple>
                                        @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title"><b>{{ $page->slug }} content (Arabic)</b></h2>
                                    <div class="form-group">
                                        <label for="exampleInputNamea1">Title</label>
                                        <input type="text" class="form-control" id="exampleInputNamea1" placeholder="Title" name="data[{{$page->id}}][title_ar]" value="{{ isset($page) ? $page->title_ar : '' }}">
                                    </div>
                                        <div class="form-group content">
                                            <label for="exampleInputEmail3">Content</label>
                                            <input type="hidden" name="data[{{$page->id}}][content_ar]" value="{{ isset($page) ? $page->content_ar : '' }}"/>
                                            <div class="summernote">
                                                {!! isset($page) ? $page->content_ar : '' !!}
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection

@section('js')

@endsection
