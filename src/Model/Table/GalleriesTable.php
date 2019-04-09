<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class GalleryTable extends Table{
	
	// public function initialize(array $config) {
    //     $this->addBehavior('Timestamp');
    // }

    // public function buildRules(RulesChecker $rules)
    // {
    //     $rules->add($rules->isUnique(['email'], 'Email ID Already Exists'));
    //     $rules->add($rules->isUnique(['username'], 'Username Already Exists'));
    //     return $rules;
    // }

     public function validationDefault(Validator $validator)
     {
         return $validator;
     }

    // public function validationSign_up(Validator $validator)
    // {
    //     $validator
    //         // User Funll Name Validation
    //         ->notEmpty('name')
    //         // Username Validation
    //         ->notEmpty('username')
    //         ->lengthBetween('username', [4, 12])
    //         // User Email Validation
    //         ->add('email', 'valid', [
    //             'rule' => 'email',
    //             'message' => 'Please enter valid email'
    //         ])
    //         // User Password Validation
    //         ->notEmpty('password')
    //         ->notEmpty('confirm_password')
    //         ->add('confirm_password', 'no-misspelling', [
    //             'rule' => ['compareWith', 'password'],
    //             'message' => 'Passwords are not equal',
    //         ])
    //         // User Phone Validation
    //         ->numeric('phone','Please enter numeric values')
    //         ->lengthBetween('phone', [10, 10], 'Allow only 10 characters')
    //         // User Zipcode Validation
    //         ->notEmpty('zipcode')
    //         ->numeric('zipcode','Please enter numeric values');

    //     return $validator;
    // }

    // public function validationUpdate(Validator $validator)
    // {
    //     $validator
    //         ->add('role', 'validRole', [
    //             'rule' => 'isValidRole',
    //             'message' => __('You need to provide a valid role like "user"'),
    //             'provider' => 'table',
    //     ]);
        
    //     $validator
    //         // User Funll Name Validation
    //         ->notEmpty('name')
    //         // User Phone Validation
    //         ->numeric('phone','Please enter numeric values')
    //         ->lengthBetween('phone', [10, 10], 'Allow only 10 characters')
    //         // User Zipcode Validation
    //         ->notEmpty('zipcode')
    //         ->numeric('zipcode','Please enter numeric values');

    //     return $validator;
    // }
    

    // /**
    //  *  User Login Validation
    //  */
    // public function validationLogin(Validator $validator)
    // {
    //     $validator
    //         // User Email Validation
    //         ->add('email', 'valid', [
    //             'rule' => 'email',
    //             'message' => 'Please enter valid email'
    //         ])
    //         // captch code
    //         ->notEmpty('CaptchaCode', 'The captcha code field cannot be left empty')
    //         ->add('CaptchaCode', 'validCaptcha', [
    //             'rule' => function($value) {
    //                 return captcha_validate($value);
    //             },
    //             'message' => 'CAPTCHA validation failed, try again'
    //         ])
    //         // User Password Validation
    //         ->notEmpty('password');

    //     return $validator;
    // }

    // /**
    //  *  User Profile Update
    //  */
    // public function validationUpdate_profile(Validator $validator)
    // {
    //     $validator
    //          // User Funll Name Validation
    //         ->notEmpty('name')
    //         // User Phone Validation
    //         ->numeric('phone','Please enter numeric values')
    //         ->lengthBetween('phone', [10, 10], 'Allow only 10 characters')
    //         // User Zipcode Validation
    //         ->notEmpty('zipcode')
    //         ->numeric('zipcode','Please enter numeric values');

    //     return $validator;
    // }
    

    // public function isValidRole($value, array $context)
    // {
    //     return in_array($value, ['user'], true);
    // }
}


?>