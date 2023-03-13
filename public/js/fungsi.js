/** Token */
$(function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
        }
    })
})

/** DataTable */

// Pickup Table
$(function(e) {
    var table = $('#pickupTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/pickup/data'
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' }
        ]
    })
})

// User Table
$(function(e) {
    var table = $('.user_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/getUsers'
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    })
})

// Client Table
$(function(e) {
    var table = $('.client_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/getClients'
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'codename', name: 'codename' },
            { data: 'client', name: 'client' },
            { data: 'joined_since', name: 'joined_since' },
            { data: 'status', name: 'status' },
            { data: 'type', name: 'type' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    })
})