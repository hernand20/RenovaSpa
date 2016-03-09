<?php
App::uses('Terapeuta', 'Model');

/**
 * Terapeuta Test Case
 */
class TerapeutaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.terapeuta',
		'app.sesion',
		'app.opinion',
		'app.cliente',
		'app.pais',
		'app.idioma',
		'app.hotel',
		'app.agencia',
		'app.circustancia',
		'app.tratamiento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Terapeuta = ClassRegistry::init('Terapeuta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Terapeuta);

		parent::tearDown();
	}

}
