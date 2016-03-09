<?php
/**
 * Sesion Fixture
 */
class SesionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'opinion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cliente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'terapeuta_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tratamiento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'opinion_id', 'cliente_id', 'terapeuta_id', 'tratamiento_id'), 'unique' => 1),
			'fk_sesiones_clientes_idx' => array('column' => 'cliente_id', 'unique' => 0),
			'fk_sesiones_terapeutas1_idx' => array('column' => 'terapeuta_id', 'unique' => 0),
			'fk_sesiones_tratamientos1_idx' => array('column' => 'tratamiento_id', 'unique' => 0),
			'fk_sesiones_calificaciones1_idx' => array('column' => 'opinion_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'opinion_id' => 1,
			'cliente_id' => 1,
			'terapeuta_id' => 1,
			'tratamiento_id' => 1
		),
	);

}
