// new DataTable('#example');


// $(document).ready(function(){
//     var table = $('#example').DataTable({

//         buttons:['copy','csv','excel','pdf','print']
//     });
//     table.buttons().container()
//     .appendTo('example_wrapper .col-md-6:eq(0)');
// });
new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
});