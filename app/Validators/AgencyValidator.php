<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class AgencyValidator.
 *
 * @package namespace App\Validators;
 */
class AgencyValidator extends LaravelValidator
{

    protected $messages = [
        'phone.unique' => 'the phone is duplicate',
        'email.unique' => 'the email is duplicate'
    ];
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [

        ValidatorInterface::RULE_CREATE => [
                'name' => 'required',
                // 'address_id'  => 'min:3',
                'employee_id'=> 'required',
                'phone' => 'required|unique:agencies',
                'email' => 'required|unique:agencies'
        ],
        ValidatorInterface::RULE_UPDATE => [
            
            'name' => 'required',
            // 'address_id'  => 'min:3',
            'employee_id'=> 'required',
            'phone' => 'required|unique:agencies',
            'email' => 'required|unique:agencies'
        ],
    ];
}
