$(document).ready(function() {
    $('.footable').footable();
        $('#date_added').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

        $('#date_modified').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

        $('.dataTabless-example').DataTable({
            pageLength: 3,
            ordering: false,
            responsive: true,
            // dom: '<"html5buttons"B>lTfgitp',
            // buttons: [
            //     { extend: 'copy'},
            //     {extend: 'csv'},
            //     {extend: 'excel', title: 'ExampleFile'},
            //     {extend: 'pdf', title: 'ExampleFile'},

            //     {extend: 'print',
            //      customize: function (win){
            //             $(win.document.body).addClass('white-bg');
            //             $(win.document.body).css('font-size', '10px');

            //             $(win.document.body).find('table')
            //                     .addClass('compact')
            //                     .css('font-size', 'inherit');
            //     }
            //     }
            // ]
        });
});