<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class StockValidator.
 *
 * @package namespace App\Validators;
 */
class StockValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required',
            // 'address_id'  => 'min:3',
            'employee_id' => 'required',
            'phone' => 'required|unique:stocks',
            'email' => 'required|unique:stocks'
        ],
        ValidatorInterface::RULE_UPDATE => [

            'name' => 'required',
            // 'address_id'  => 'min:3',
            'employee_id' => 'required',
            'phone' => 'required|unique:stocks',
            'email' => 'required|unique:stocks'
        ],
    ];
}
