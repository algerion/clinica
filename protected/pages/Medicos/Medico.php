<?php
Prado::using('System.Data.ActiveRecord.*'); 

class Medico extends TActiveRecord 
{
    const TABLE = 'medicos';
 
    public $id_medico; 
    public $nombre;
	public $especialidad;
	public $telefono;
	public $movil;
}
?>