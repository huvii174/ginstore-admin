@extends('layouts.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('get.home') }}">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="text" name="n" value="{{ Request::get('n') }}" class="form-control" placeholder="Tên ...">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <a href="{{ route('dealer.create') }}"  class="btn btn-success btn-sm btn-text"><i class="btn-icon-prepend" data-feather="plus-circle"></i> Thêm mới</a>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <button type="submit" class="btn btn-danger btn-sm btn-text"><i class="btn-icon-prepend" data-feather="filter"></i> Lọc</button>
                        <button type="submit" class="btn btn-secondary btn-sm btn-text"><i class="btn-icon-prepend" data-feather="refresh-ccw"></i> Làm mới</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>SĐT</th>
                                <th>Địa chỉ</th>
                                <th>Create</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($dealers ?? [] as $key => $item)
                                <tr>
                                    <td>{{ ($key + 1) }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ route('dealer.delete', $item->id) }}" class="btn-text text-danger"><i class="btn-icon-prepend" data-feather="trash"></i> </a>
                                        <a href="{{ route('dealer.update', $item->id) }}" class="btn-text text-success"><i class="btn-icon-prepend" data-feather="edit"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
