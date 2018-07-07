<div class="col-md-12">
        <table id="example" class="table table-bordered display" width="100%" style="border-color:blue">
            <thead>
            <tr>
                <th class="text-center">Nama</th>
                <th class="text-center">URL</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Gambar</th>
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
        ajax: "Ajax/loadapp",
        table: "#example",

        fields: [ {
                label: "Nama :",
                name: "name"
            }, {
                label: "URL :",
                name: "url"
            }, {
                label: "Deskripsi :",
                name: "description"
            }, {
                label: "No Telp/Hp :",
                name: "telp"
            }, {
                label: "Gambar:",
                name: "image",
                type: "upload",
                display: function ( file_id ) {
                    return '<img src="' + table.file( 'files', file_id ).web_path +'"/>';
                },
                clearText: "Clear",
                noImageText: 'No image'
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
        ajax: "Ajax/loadapp",
        columns: [
            { data: "name" },
            { data: "url" },
            { data: "description" },
            { data: "image" }
        ],
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

