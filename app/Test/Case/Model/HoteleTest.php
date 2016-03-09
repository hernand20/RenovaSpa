<?php
App::uses('Hotele', 'Model');

/**
 * Hotele Test Case
 */
class HoteleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hotele',
		'app.cliente',
		'app.pais',
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
		$this->Hotele = ClassRegistry::init('Hotele');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hotele);

		parent::tearDown();
	}

}
