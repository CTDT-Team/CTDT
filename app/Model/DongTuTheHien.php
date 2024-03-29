<?php
App::uses('AppModel', 'Model');
/**
 * DongTuTheHien Model
 *
 * @property MucDoNhanThuc $MucDoNhanThuc
 */
class DongTuTheHien extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'offline';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'muc_do_nhan_thuc_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'MucDoNhanThuc' => array(
			'className' => 'MucDoNhanThuc',
			'foreignKey' => 'muc_do_nhan_thuc_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
