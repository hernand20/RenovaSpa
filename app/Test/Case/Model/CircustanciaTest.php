<?php
App::uses('Circustancia', 'Model');

/**
 * Circustancia Test Case
 */
class CircustanciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.circustancia',
		'app.cliente',
		'app.pais',
		'app.idioma',
		'app.hotel',
		'app.agencia',
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
		$this->Circustancia = ClassRegistry::init('Circustancia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Circustancia);

		parent::tearDown();
	}

}
