<?php
/**
 * Cliente Fixture
 */
class ClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'pais_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idioma_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'hotel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'agencia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'circustancia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha_alta' => array('type' => 'date', 'null' => true, 'default' => null),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'edad' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'correo_electronico' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'habitacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'firma' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'pais_id', 'idioma_id', 'hotel_id', 'agencia_id', 'circustancia_id'), 'unique' => 1),
			'fk_clientes_paises1_idx' => array('column' => 'pais_id', 'unique' => 0),
			'fk_clientes_idiomas1_idx' => array('column' => 'idioma_id', 'unique' => 0),
			'fk_clientes_hoteles1_idx' => array('column' => 'hotel_id', 'unique' => 0),
			'fk_clientes_agencias1_idx' => array('column' => 'agencia_id', 'unique' => 0),
			'fk_clientes_circustancias1_idx' => array('column' => 'circustancia_id', 'unique' => 0)
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
			'pais_id' => 1,
			'idioma_id' => 1,
			'hotel_id' => 1,
			'agencia_id' => 1,
			'circustancia_id' => 1,
			'fecha_alta' => '2016-03-09',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'edad' => 1,
			'correo_electronico' => 'Lorem ipsum dolor sit amet',
			'habitacion' => 'Lorem ipsum dolor sit amet',
			'firma' => 'Lorem ipsum dolor sit amet'
		),
	);

}
