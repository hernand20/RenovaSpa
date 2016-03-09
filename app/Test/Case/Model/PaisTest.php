<?php
App::uses('Pais', 'Model');

/**
 * Pais Test Case
 */
class PaisTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pais',
		'app.cliente',
		'app.idioma',
		'app.hotel',
		'app.agencia',
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
		$this->Pais = ClassRegistry::init('Pais');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pais);

		parent::tearDown();
	}

}
