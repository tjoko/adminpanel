<div class="col-md-12">
        <table id="example" class="table table-bordered display nowrap" cellspacing="0" width="100%" style="border-color:blue">
            <thead>
            <tr>
                <th class="text-center">Username</th>
                <th class="text-center">Password</th>
                <th class="text-center">Enkripsi</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
</div>



<script>
var editor; // use a global for the submit and return data rendering in the examples

$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        ajax: "Ajax/loadadmin",
        table: "#example",

        fields: [ {
                label: "Username :",
                name: "username"
            },  {
                label: "Password :",
                name: "password"
            }, {
                label: "Enkripsi :",
                name: "encrypt"
            }
        ]
    } );
    
    var table = $('#example').DataTable( {
        "language": {
            "lengthMenu": "Menampilkan _MENU_ "
        },
        processing: true,
        serverside: true,
        dom: '<"col-sm-6 col-sm-offset-3 gbtneditor"B><"clear"><"col-sm-6"l><"col-sm-6"Tf><rt><"col-sm-3"i><"col-sm-9"p>',
        ajax: "Ajax/loadadmin",
        columns: [
            { data: "username" },
            { data: "password" },
            { data: "encrypt" }
        ],
        "scrollX": true,
        select: {
            style:    'os',
            selector: 'td:first-child',
            blurable: true
        },
        buttons: [
            {
                extend: "create", 
                text:"<span><i class='fa fa-plus'> Tambah Data </i><span>",  
                editor: editor, 
                className:"btn btn-success btneditor"},
            { 
                extend: "edit",
                text:"<span><i class='fa fa-edit'> Edit Data </i><span>",     
                editor: editor, 
                className:"btn btn-warning btneditor" },
            { 
                extend: "remove", 
                editor: editor, 
                text:"<span><i class='fa fa-trash'> Hapus Data </i><span>", 
                className:"btn btn-danger btneditor" },
            { 
                extend: 'excelHtml5', 
                text:"<span><i class='fa fa-download'> Export To Excell </i><span>", 
                className:"btn btn-primary btneditor" }
        ] 
    } );

} );
</script>

