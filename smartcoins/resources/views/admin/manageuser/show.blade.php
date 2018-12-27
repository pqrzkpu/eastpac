@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        {{ $title }}
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">admin</a></li>
        <li><a href="{{ route('admin.usermanage') }}">manage user</a></li>
        <li class="active">{{ $title }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">User Info</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body box-profile">
                        <div class="col-md-12">
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Full name</b> <a class="pull-right" id="fullname">{{$user->name}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Username</b> <a class="pull-right" id="username">{{$user->username}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="pull-right" id="email">{{$user->email}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">User Roles / Permissions</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body box-profile">
                        <div class="col-md-12">
                            {{-- <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Role</b>
                                    <a class="pull-right" id="fullname">
                                        @foreach ($user->getRoleNames() as $role)
                                            {{ $role .", " }}
                                        @endforeach
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Permissions</b> <a class="pull-right" id="username">{{$user->username}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="pull-right" id="email">{{$user->email}}</a>
                                </li>
                            </ul> --}}
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Role</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach($user->getRoleNames() as $role)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $role }}</td>
                                    <td>
                                        <button class="btn btn-xs btn-danger" title="remove role"> <i class="fa fa-times"></i> </button>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td><b> Add Role </b></td>
                                    <td>
                                        <button class="btn btn-xs btn-success" title="remove permission"> <i class="fa fa-plus"></i></button>
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Permission</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach($user->getAllPermissions() as $role)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $role }}</td>
                                    <td>
                                        <button class="btn btn-xs btn-danger" title="remove permission"> <i class="fa fa-times"></i> </button>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td><b>  Add permission </b></td>
                                    <td>
                                        <button class="btn btn-xs btn-success" title="remove permission"> <i class="fa fa-plus"></i></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix"></div>
                </div>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
    <!-- /.content-wrapper -->
@endsection

@section('script')

<script>
    $('.pagination').addClass('pagination-sm no-margin pull-right');
</script>

@endsection
