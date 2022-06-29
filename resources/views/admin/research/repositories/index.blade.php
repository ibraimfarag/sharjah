@extends('admin.partials.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3>Repositories</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable">
                                    @foreach($data as $row)
                                            <tr>
                                                <td colspan="3"><h5>{{$row->title}}</h5></td>
                                            </tr>
                                        @if(count($row->repositories)>0)
                                            @foreach($row->repositories as $item)
                                                <tr>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp; {{ $item->title }}</td>
                                                    <td>{{ $item->title_ar }}</td>
                                                    <td><a href="{{ URL('admin/research/repositories/edit/'.$item->id) }}">Edit</a>
                                                        |
                                                        <a href="{{ URL('admin/research/repositories/delete/'.$item->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td>No repositories under this category</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection