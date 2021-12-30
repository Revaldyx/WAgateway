@extends('layouts.header')


@section('contents')
    <title>WaGateway - Add Devices</title>

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Devices</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="post" action="">
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Device Name <br> <span
                                            style="color:red"> </span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="device_name"
                                            id="exampleInputUsername2" placeholder="ex : Device A" value="">

                                    </div>

                                </div>

                                <a href="{{ route('add_devices') }}" class="btn btn-primary btn-lg active btn-sm"
                                    role="button" aria-pressed="true">Simpan</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
