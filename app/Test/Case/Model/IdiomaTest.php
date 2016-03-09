<?php
App::uses('Idioma', 'Model');

/**
 * Idioma Test Case
 */
class IdiomaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.idioma',
		'app.cliente',
		'app.pais',
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
		$this->Idioma = ClassRegistry::init('Idioma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Idioma);

		parent::tearDown();
	}

}
