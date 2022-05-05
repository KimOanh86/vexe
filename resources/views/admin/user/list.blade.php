@extends('admin.layout.index')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">User</h2>
                                    {{-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <a href="them.html"><i class="zmdi zmdi-plus"></i>add item</a>
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Email</th>
                                                <th>Sđt</th>
                                                <th>Level</th>
                                                <th>Created</th>
                                                <th class="text-right">Edit</th>
                                                <th class="text-right">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $us)
                                            <tr>
                                                <td>{{$us->name}}</td>
                                                <td>{{$us->email}}</td>
                                                <td>{{$us->number_phone}}</td>
                                                <td>
                                                    @if($us->level == 1)
                                                        {{"Admin"}}
                                                    @elseif($us->level == 2)
                                                        {{"Nhà xe"}}
                                                    @else
                                                        {{"Khách hàng"}}

                                                    @endif
                                                </td>
                                                <td>{{$us->created_at}}</td>
                                                <td class="text-right"><a href="admin/user/suauser/{{$us->id}}">Edit</a></td>
                                                <td class="text-right"><a href="admin/user/xoauser/{{$us->id}}">Delete</a> </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
</div>
@endsection