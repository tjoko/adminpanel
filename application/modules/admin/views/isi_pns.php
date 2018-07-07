<div class="col-md-12">
        <table id="example" class="table table-bordered display" width="100%" style="border-color:blue">
            <thead>
            <tr>
                <th class="text-center">NIP</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Aktifasi</th>
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
        ajax: "Ajax/loadpns",
        table: "#example",

        fields: [ {
                label: "NIP :",
                name: "nip"
            }, {
                label: "Name :",
                name: "name"
            }, {
                label: "Aktif ? ",
                name: "isactive",
                type: "select",
                options: [
                    { label: "Ya", value: 1 },
                    { label: "Tidak", value: 0 }
                ]
            }, {
                label: "Username",
                name: "username"
            }, {
                label: "Password",
                name: "password"
            }, {
                label: "Enkripsi",
                name: "encryptkey"
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
        "columnDefs": [
            { className: "text-center", "targets": [ 0, 1, 2, 3] }
        ],
        ajax: "Ajax/loadpns",
        columns: [
            { data: "nip" },
            { data: "name" },
            { data: "isactive" },
            { data: "username" },
            { data: "password" },
            { data: "encryptkey" }
        ],
        "columnDefs": [ {
            "render": function ( data, type, row ) {
                    data == 1 ? val ="Ya" : val = "Tidak";
                    return val;
                },
                "targets": 2
            } ],
        "scrollX": true,
        select: true,
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

