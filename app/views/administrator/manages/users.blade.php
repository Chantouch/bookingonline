@section('title','Administrator section')
@extends('administrator.layouts.master')
@section('body')
    {{--@include('administrator.layouts.head')--}}
    <body class="fixed-left">
    <div class="animationload">
        <div class="loader"></div>
    </div>
    <!-- Begin page -->
    <div id="wrapper">
        @include('administrator.layouts.top-bar')
        @include('administrator.layouts.sidebar-left')
                <!--Basic Columns-->
        <!--===================================================-->
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="page-title">Users Tables</h4>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="#">Booking Early</a>
                                </li>
                                <li>
                                    <a href="#">Management</a>
                                </li>
                                <li class="active">
                                    List all users
                                </li>
                            </ol>
                            @include('alerts.alerts')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 header-title"><b>List all users</b></h4>
                                <p class="text-muted font-13">
                                    By including admin and other users.
                                </p>
                                <table data-toggle="table"
                                       data-show-columns="false"
                                       data-page-list="[5, 10, 20]"
                                       data-page-size="5"
                                       data-pagination="true" data-show-pagination-switch="true"
                                       class="table-bordered ">
                                    <thead>
                                    <tr>
                                        <th data-field="id" data-switchable="false">#</th>
                                        <th data-field="username">Email</th>
                                        <th data-field="name">Email</th>
                                        <th data-field="first_name">Fname</th>
                                        <th data-field="last_name">Lname</th>
                                        <th data-field="is_admin">Admin</th>
                                        <th data-field="is_guest">Guest</th>
                                        <th data-field="is_user_admin">User admin</th>
                                        <th data-field="user-status" class="text-center">Status</th>
                                        <th data-field="user-action" class="text-center">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->is_admin?'Yes':'No'}}</td>
                                        <td>{{$user->is_guest?'Yes':'No'}}</td>
                                        <td>{{$user->is_user_admin?'Yes':'No'}}</td>
                                        <td>{{$user->is_confirmed?'Yes':'No'}}</td>
                                        <td><span class="label label-table label-success">Active</span></td>
                                        <td>
                                            <a href="{{URL::to('be_admin/user-profile',$user->id)}}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{URL::to('be_admin/edit-user',$user->id)}}">
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </a>
                                            <a href="{{URL::to('be_admin/delete',$user->id)}}" class="delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?php echo $users->links();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('administrator.layouts.sidebar-right')
    </div>
    @include('administrator.layouts.footer')
    </body>
@stop
