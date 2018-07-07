<?php
 
use
    DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Join,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate;
     
class Admin_m extends CI_Model 
{
    private $editorDb = null;
     
    public function init($editorDb)
    {
        $this->editorDb = $editorDb;
    }
         
    public function loadadmin($post)
    {
        Editor::inst( $this->editorDb, 'admin', 'id' )
            ->fields(
                Field::inst( 'id' ),
                Field::inst( 'username' ),
                Field::inst( 'password' )
                    ->setFormatter( function ( $val, $data ) {
                        return hash_hmac( 'sha512', $val, $data['encrypt'] );
                    }),
                Field::inst( 'encrypt' )
            )
            ->process( $_POST )
            ->json(); 
    }

    public function loadpns($post)
    {
        Editor::inst( $this->editorDb, 'pns', 'id' )
            ->fields(
                Field::inst( 'id' ),
                Field::inst( 'nip' ),
                Field::inst( 'name' ),
                Field::inst( 'isactive' ),
                Field::inst( 'username' ),
                Field::inst( 'password' )
                    ->setFormatter( function ( $val, $data ) {
                        return hash_hmac( 'sha512', $val, $data['encrypt'] );
                    }),
                Field::inst( 'encryptkey' )
            )
            ->process( $_POST )
            ->json(); 
    } 

    public function loadapp($post)
    {
        Editor::inst( $this->editorDb, 'application', 'id' )
            ->fields(
                Field::inst( 'id' ),
                Field::inst( 'name' ),
                Field::inst( 'url' ),
                Field::inst( 'description' ),
                Field::inst( 'image' )
                    ->setFormatter( 'Format::ifEmpty', null )
                    ->upload( Upload::inst( $_SERVER['DOCUMENT_ROOT'].'/uploads/__NAME__' )
                        ->db( 'files', 'id', array(
                            'filename'    => Upload::DB_FILE_NAME,
                            'filesize'    => Upload::DB_FILE_SIZE,
                            'web_path'    => Upload::DB_WEB_PATH,
                            'system_path' => Upload::DB_SYSTEM_PATH
                        ) )
                        ->validator( function ( $file ) {
                            return $file['size'] >= 20000000 ?
                                "Files must be smaller than 20MB" :
                                null;
                        } )
                        ->allowedExtensions( array( 'doc', 'docx', 'rar', 'pdf', 'xls', 'xlsx', 'ppt', 'pptx', 'jpg', 'jpeg', 'bmp', 'png' ), "Mohon Upload dengan tipe rar, excel, word, power point atau pdf" ) 
                    )
            )
            ->process( $_POST )
            ->json(); 
    } 

    public function loadpreviledge($post)
    {
        Editor::inst( $this->editorDb, 'privilege', 'id' )
            ->fields(
                Field::inst( 'privilege.id' ),
                Field::inst( 'privilege.pns_id' )
                    ->options( 'pns', 'id', 'name' ),
                Field::inst( 'pns.name' ),
                Field::inst( 'privilege.application_id' )
                    ->options( 'application', 'id', 'name' ),
                Field::inst( 'application.name' ),
                Field::inst( 'privilege.isallowaccess' )
            )
            ->leftjoin( 'application' , 'privilege.application_id' , '=' , 'application.id' )
            ->leftjoin( 'pns' , 'privilege.pns_id' , '=' , 'pns.id' )
            ->process( $_POST )
            ->json(); 
    } 
}
           

?>

