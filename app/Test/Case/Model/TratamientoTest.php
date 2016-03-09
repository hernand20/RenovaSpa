<?php
App::uses('Tratamiento', 'Model');

/**
 * Tratamiento Test Case
 */
class TratamientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tratamiento',
		'app.sesion',
		'app.opinion',
		'app.cliente',
		'app.pais',
		'app.idioma',
		'app.hotel',
		'app.agencia',
		'app.circustancia',
		'app.terapeuta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tratamiento = ClassRegistry::init('Tratamiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tratamiento);

		parent::tearDown();
	}

}
