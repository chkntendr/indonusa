@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Client</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <table class="table table-bordered dataTable client_datatable" id="client_datatable" width="100%" cellspacing="0" role="grid" aria-describedby="user_datatable_info" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Codename</th>
                                <th>Client</th>
                                <th>Joined Since</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection