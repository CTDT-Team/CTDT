<?php

App::uses('AppModel', 'Model');

/**
 * TuVanCdr Model
 *
 * @property User $User
 */
class TuVanCdr extends AppModel {

    /**
     * Use database config
     *
     * @var string
     */
    public $actsAs = array('OpenAI');
    

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'prompt';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'prompt' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'user_id' => array(
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
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    
    public function queryAI($prompt){
        return $this->queryOpenAI($prompt);
    }
    

}
