<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UserValidator.
 *
 * @package namespace App\Validators;
 */
class UserValidator extends LaravelValidator
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
            // 'name' => 'required',
            'phone' => 'unique:users',
            'email' => 'unique:users',
        ],
        ValidatorInterface::RULE_UPDATE => [
            // 'name' => 'required',
            'phone' => 'unique:users',
            'email' => 'unique:users',
        ],
    ];
}
