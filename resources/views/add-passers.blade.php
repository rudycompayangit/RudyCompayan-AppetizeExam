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
                                        <a href="{{ route('passers_list') }}" class="nav-link active"><i class="fe fe-list"></i> Passers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('passers_by_school') }}" class="nav-link"><i class="fe fe-home"></i> Passers By School</a>
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
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('passers_list') }}" title="Back to Passer Lists" class="btn btn-secondary btn-large" style="margin-bottom: 5px;"> <i class="fe fe-arrow-left"></i> Back to Passer Lists</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-12">
                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <form class="card" action="{{ route('post_add_passers') }}" method="post" enctype="multipart/form-data">
                                    <div class="card-body p-6">
                                        <div class="card-title">Add New Passer</div>
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Campus Eligibility</label>
                                            <input type="text" name="campus_eligibility" value="{{ old('campus_eligibility') }}" class="form-control" placeholder="Enter Campus Eligibility" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">School</label>
                                            <input type="text" name="school" value="{{ old('school') }}" class="form-control" placeholder="Enter School" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Division</label>
                                            <input type="text" name="division" value="{{ old('division') }}" class="form-control" placeholder="Enter Division" required>
                                        </div>

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary">Save Details</button>
                                        </div>
                                        {{ csrf_field() }}
                                    </div>
                                </form>
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
@endsection
