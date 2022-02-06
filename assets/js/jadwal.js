$(document).ready(function () {
	$(".dataTables-example").DataTable({
		pageLength: 10,
		ordering: false,
		responsive: true,
		dom: '<"html5buttons"B>lTfgitp',
		buttons: [
			// { extend: 'copy'},
			// {extend: 'csv'},
			{ extend: "excel", title: "ExampleFile" },
			{ extend: "pdf", title: "ExampleFile" },

			{
				extend: "print",
				customize: function (win) {
					$(win.document.body).addClass("white-bg");
					$(win.document.body).css("font-size", "10px");

					$(win.document.body)
						.find("table")
						.addClass("compact")
						.css("font-size", "inherit");
				},
			},
		],
	});

	$("#data_5 .input-daterange").datepicker({
		dateFormat: "dd-mm-yy",
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true,
	});

	$(".clockpicker").clockpicker();

	// $('.demo3').click(function () {
	// 	swal({
	// 		title: "Are you sure?",
	// 		text: "You will not be able to recover this imaginary file!",
	// 		type: "warning",
	// 		showCancelButton: true,
	// 		confirmButtonColor: "#DD6B55",
	// 		confirmButtonText: "Yes, delete it!",
	// 		closeOnConfirm: false
	// 	}, function () {
	// 		swal("Deleted!", "Your imaginary file has been deleted.", "success");
	// 	});
	// });
});
