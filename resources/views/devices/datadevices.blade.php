@extends('layouts.header')

@section('contents')
<head>
    <title>WaGateway - Data Devices</title>
</head>
    {{-- main content --}}
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Devices</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-12">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="{{ route('add_devices') }}" class="btn btn-primary btn-lg active btn-sm" role="button" aria-pressed="true">Add</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Name</th>
                                        <th>Multidevice</th>
                                        <th>Instance Key</th>
                                        <th>Data</th>
                                        <th>Status</th>
                                        <th>Reg. Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $page = @$_GET['page'];
                                    $page2 = (int) $page + 1;
                                    $limit = 10;
                                    if (!@$page) {
                                        $start = 0;
                                    } else {
                                        $start = $page * $limit;
                                    }
                                    
                                    // if ($start + $limit >= $devices_count) {
                                    //     $buttonNext = '<a href="#" class="btn btn-sm">Finis</a>';
                                    // } else {
                                    //     $buttonNext = '<a href="?page=' . $page2 . '" class="btn btn-sm">Next</a>';
                                    // }
                                    
                                    $i = $start;
                                    
                                    // foreach ($devices as $value) {
                                    //     $i += 1;
                                    //     $status = $value->status;
                                    //     $status_show = '';
                                    //     $btn_scan = '';
                                    
                                    //     if ($status === '1') {
                                    //         $status_show = '<label class="badge badge-warning">UnPaired</label>';
                                    //         $btn_scan = '<a class="btn btn-primary btn-sm" href="./device/authqr/' . $value->id . '"><i class="mdi mdi-qrcode-scan icon"></i></a>';
                                    //     } elseif ($status === '2') {
                                    //         $status_show = '<label class="badge badge-info">Paired</label>';
                                    //         $btn_scan = '<a class="btn btn-danger btn-sm" href="./device/logout/' . $value->id . '">Logout</a>';
                                    //     } else {
                                    //         $status_show = '<label class="badge badge-danger">InActive</label>';
                                    //     }
                                    //     $muldev = $value->multidevice;
                                    //     if ($muldev == '1') {
                                    //         $check_md = '<input type="checkbox" checked onclick="handleClick(`' . base_url('index.php/api/updateMultidevice') . '`,`' . $value->api_key . '`,`0`)" id="' . $value->api_key . '" name="' . $value->api_key . '" value="' . $value->api_key . '">';
                                    //     } elseif ($muldev == '0') {
                                    //         $check_md = '<input type="checkbox" onclick="handleClick(`' . base_url('index.php/api/updateMultidevice') . '`,`' . $value->api_key . '`,`1`)" id="' . $value->api_key . '" name="' . $value->api_key . '" value="' . $value->api_key . '">';
                                    //     }
                                    //     echo '<tr>
                                    //                                         <td>' .
                                    //         $i .
                                    //         '</td>
                                    //                                         <td>' .
                                    //         $value->device_name .
                                    //         '</td>
                                    //                                         <td>' .
                                    //         $check_md .
                                    //         '</td>
                                    //                                         <td>' .
                                    //         $value->api_key .
                                    //         '</td>
                                    //                                         <td class="text-danger"> ' .
                                    //         $value->data .
                                    //         '</td>
                                    //                                         <td>' .
                                    //         $status_show .
                                    //         '</td>
                                    //                                         <td>' .
                                    //         $value->reg_date .
                                    //         '</td>
                                    //                                         <td>' .
                                    //         $btn_scan .
                                    //         '</td>
                                    //                                       </tr>';
                                    // }
                                    
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    
    @endsection