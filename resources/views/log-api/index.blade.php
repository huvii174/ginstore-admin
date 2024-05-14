@extends('layouts.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('get.home') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Log Api</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Method</th>
                                <th>Path</th>
                                <th>Status</th>
                                <th>Response</th>
                                <th>Create</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($logs ?? [] as $key => $item)
                                <tr>
                                    <td>{{ ($key + 1) }}</td>
                                    <td>{{ $item->method }}</td>
                                    <td>{{ $item->path }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->logs_response }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('log_api.delete', $item->id) }}" class="btn-text text-danger"><i class="btn-icon-prepend" data-feather="trash"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="padding: 10px;">
                        {!! $logs->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
