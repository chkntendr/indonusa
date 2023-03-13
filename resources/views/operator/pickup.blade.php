@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="dataTable-container">
                <table class="table datatable dataTable-table" id="pickupTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Tanggal Input</th>
                            <th>Tanggal Pickup</th>
                            <th>Driver</th>
                            <th>Koli</th>
                            <th>SP - 1</th>
                            <th>SP - 2</th>
                            <th>SP - 3</th>
                            <th>Jumlah</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection