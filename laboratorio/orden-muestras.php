<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geomiel | Ordenes de retiro</title>
    <?php include 'includes/metas.php';?>

</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <?php include 'includes/sidebar-menu.php';?>

    <main class="main-content">
        <div class="position-relative iq-banner">
            <?php include 'includes/navbar.php';?>
            <div class="iq-navbar-header" style="height: 215px;">
                <div class="container-fluid iq-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <div class="box-img">
                                    <img src="../assets/images/sb.svg" width="80%">
                                </div>
                                <h1 class="ms-2 mb-0">O/C muestras</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-header-img">
                    <img src="../assets/images/dashboard/top-header.png" alt="header"
                        class="theme-color-default-img img-fluid w-100 h-100 animated-scale">
                </div>
            </div>
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <div class="col-md-12 bg-grey rounded">
                    <div class="row row-cols-1">
                        <div class="col-12 mt-5 mb-3 d-flex flex-row justify-content-between">
                        <div>
                              <a href="javascript:history.back()" class="btn btn-secondary">
                              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M3.83828 7.64785C3.88472 7.6013 3.93989 7.56436 4.00063 7.53915C4.06137 7.51395 4.12648 7.50098 4.19224 7.50098C4.258 7.50098 4.32311 7.51395 4.38385 7.53915C4.44459 7.56436 4.49976 7.6013 4.5462 7.64785L10.1915 13.2942L15.8369 7.64785C15.8834 7.60137 15.9385 7.5645 15.9993 7.53934C16.06 7.51419 16.1251 7.50124 16.1908 7.50124C16.2566 7.50124 16.3217 7.51419 16.3824 7.53934C16.4431 7.5645 16.4983 7.60137 16.5448 7.64785C16.5913 7.69434 16.6281 7.74952 16.6533 7.81025C16.6785 7.87098 16.6914 7.93608 16.6914 8.00181C16.6914 8.06755 16.6785 8.13264 16.6533 8.19337C16.6281 8.2541 16.5913 8.30929 16.5448 8.35577L10.5455 14.3551C10.4991 14.4016 10.4439 14.4386 10.3831 14.4638C10.3224 14.489 10.2573 14.5019 10.1915 14.5019C10.1258 14.5019 10.0607 14.489 9.99993 14.4638C9.93919 14.4386 9.88402 14.4016 9.83758 14.3551L3.83828 8.35577C3.79173 8.30933 3.75479 8.25416 3.72958 8.19342C3.70438 8.13268 3.69141 8.06757 3.69141 8.00181C3.69141 7.93605 3.70438 7.87094 3.72958 7.8102C3.75479 7.74946 3.79173 7.69429 3.83828 7.64785Z" fill="white"/>
                               </svg>
                               Volver al listado
                              </a>
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                        <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
                            <div class="p-0 card-body">
                                <div class="table-responsive">
                                <table id="example" class="display table mb-0 table-striped" cellspacing="0" width="100%" data-toggle="data-table"  role="grid">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Tambor</th>
                                            <th class="text-center">Color</th>
                                            <th class="text-center">Humedad</th>
                                            <th class="text-center">Adulteracion</th>
                                            <th class="text-center">Solidificacion</th>
                                            <th class="text-center">Archivo</th>
                                            <th class="text-center">Lote</th>
                                            <th class="text-center">Observaciones</th>
                                        </tr>
                                    </thead>
                                </table>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
   
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/keytable/2.7.0/js/dataTables.keyTable.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
    <script type="text/javascript" language="javascript" src="../assets/vendor/editor/js/dataTables.editor.min.js"></script>
    <?php include 'includes/script.php';?>
    <script type="text/javascript" language="javascript" class="init">
var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
	editor = new $.fn.dataTable.Editor( {
		ajax: "../assets/vendor/editor/controllers/staff.php",
		table: "#example",
		fields: [ {
				label: "Tambor:",
				name: "tambor"
			}, {
				label: "Color:",
				name: "color"
			}, {
				label: "Humedad:",
				name: "humedad"
			}, {
				label: "Adulteracion:",
				name: "adulteracion"
			}, {
				label: "Solidificacion:",
				name: "solidificacion"
			}, {
				label: "Archivo:",
				name: "archivo"
			}, {
				label: "Lote:",
				name: "lote"
			}, {
                label: "Observaciones:",
                name: "observaciones"
            }
		],
		formOptions: {
			inline: {
				onBlur: 'submit'
			}
		}
	} );

	var table = $('#example').DataTable( {
		dom: "Bfrtip",
		ajax: "../assets/vendor/editor/controllers/staff.php",
		columns: [
			{ data: "tambor" },
			{ data: "color" },
			{ data: "humedad" },
			{ data: "adulteracion" },
			{ data: "solidificacion" },
			{ data: "archivo" },
			{ data: "lote" },
			{ data: "observaciones" }
		],
		order: [ 1, 'asc' ],
		keys: {
			columns: ':not(:first-child)',
			keys: [ 9 ],
			editor: editor,
			editOnFocus: true
		},
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editor },
			{ extend: "edit",   editor: editor },
			{ extend: "remove", editor: editor }
		]
	} );
} );
	</script>
</body>

</html>