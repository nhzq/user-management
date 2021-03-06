@extends ('layouts.master')

@push ('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/dist/css/style.css') }}">
@endpush

@section ('content')
    @include ('components._breadcrumbs')
    
    <!-- Main content -->
    <section class="content">
        @include ('components._flashes')
        
        <div class="row mrg10T">
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header with-border panel-header-border-blue">
                        <h3 class="box-title">Create role</h3>
                    </div>
                    <div class="box-body">
                        <div class="mrg10T mrg10B">
                            {{ Form::open(['url' => route('users.store'), 'method' => 'POST']) }}
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="user_name" placeholder="Name">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="user_email" placeholder="Email">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Role</label>
                                            <select class="form-control" name="user_role">
                                                <option>-- Please choose --</option>
                                                @if (!empty($roles))
                                                    @foreach ($roles as $role)
                                                        <option value="{{ strtolower($role->name) }}">{{ ucwords($role->name) }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 mrg20B mrg20T pull-right">
                                    <button class="btn btn-block btn-primary" type="submit">
                                        Save
                                    </button>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push ('script')
@endpush