<?php
Prado::using('System.Data.ActiveRecord.*'); 

class Paciente extends TActiveRecord 
{
    const TABLE = 'pacientes';
 
    public $id_paciente; 
    public $nombre;
	public $tel_casa;
	public $movil;
}
?>