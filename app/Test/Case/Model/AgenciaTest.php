<?php
App::uses('Agencia', 'Model');

/**
 * Agencia Test Case
 */
class AgenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.agencia',
		'app.cliente',
		'app.pais',
		'app.idioma',
		'app.hotel',
		'app.circustancia',
		'app.sesion',
		'app.opinion',
		'app.terapeuta',
		'app.tratamiento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Agencia = ClassRegistry::init('Agencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Agencia);

		parent::tearDown();
	}

}
