@extends('layouts.app')
@section('content')
    <div class="page">
        <div class="page-main">
            <div class="header py-4">
                <div class="container">
                    <div class="d-flex">
                        <div class="d-flex order-lg-2 ml-auto">
                            <div class="dropdown">
                                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                    <span class="avatar" style="background-image: url({{ asset('lib/admin/demo/faces/male/25.jpg') }})"></span>
                                    <span class="ml-2 d-none d-lg-block">
                                      <span class="text-default"> Rudy Compayan</span>
                                      <small class="text-muted d-block mt-1"> Administrator</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                            <span class="header-toggler-icon"></span>
                        </a>
                    </div>
                </div>
                <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 ml-auto">
                                <!--form class="input-icon my-3 my-lg-0">
                                    <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                                    <div class="input-icon-addon">
                                        <i class="fe fe-search"></i>
                                    </div>
                                </form-->
                            </div>
                            <div class="col-lg order-lg-first">
                                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                    <li class="nav-item">
                                        <a href="{{ route('passers_list') }}" class="nav-link"><i class="fe fe-list"></i> Passers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('passers_by_school') }}" class="nav-link active"><i class="fe fe-home"></i> Passers By School</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                                            <i class="fe fe-log-out"></i> Logout</a>
                                        <form id="logout-form" action="#" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3 my-md-5">
                    <div class="container">
                        <div class="page-header">
                            <h1 class="page-title">
                                Passers
                            </h1>
                        </div>

                        {{--<div class="alert alert-success" id="flash">
                           --}}{{-- {{ flash_message }}--}}{{--
                        </div>--}}
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Passer Lists</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="articles" class="table card-table table-striped table-vcenter">
                                            <thead>
                                            <tr>
                                                <th>School</th>
                                                <th>Total Passers</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($passers))
                                                @foreach($passers as $passer)
                                                    <tr>
                                                        <td>{{ $passer['school'] }}</td>
                                                        <td class="w-1"><span class="avatar">{{ $passer['passers_count'] }}</span></td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            @if(count($passers) == 0)
                                                <tr>
                                                    <td colspan="2" class="w-1" align="center">No records found.</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-auto ml-lg-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <ul class="list-inline list-inline-dots mb-0">
                                        <li class="list-inline-item"><a href="">Documentation</a></li>
                                        <li class="list-inline-item"><a href="">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                            Copyright © 2018. All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{ asset('/js/admin/main.js') }}"></script>
            <script>
                $(document).ready(function() {
                   $('#search').click(function() {
                      $('#card').submit();
                   });
                });
            </script>
@endsection
