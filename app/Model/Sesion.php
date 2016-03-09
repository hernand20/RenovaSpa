<?php
App::uses('AppModel', 'Model');
/**
 * Sesion Model
 *
 * @property Opinion $Opinion
 * @property Cliente $Cliente
 * @property Terapeuta $Terapeuta
 * @property Tratamiento $Tratamiento
 */
class Sesion extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'opinion_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cliente_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'terapeuta_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tratamiento_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Opinion' => array(
			'className' => 'Opinion',
			'foreignKey' => 'opinion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Terapeuta' => array(
			'className' => 'Terapeuta',
			'foreignKey' => 'terapeuta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tratamiento' => array(
			'className' => 'Tratamiento',
			'foreignKey' => 'tratamiento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
