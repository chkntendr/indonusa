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