<?php namespace Acme\Validation;

Use Respect\Validation\Validator as Valid;

/**
 * Created by PhpStorm.
 * User: rudolf
 * Date: 15-5-2016
 * Time: 16:29
 */
class  Validator
{
    public function isValid($validation_data)
    {
        $errors = [];

        // name is field name, $value is array
        foreach ($validation_data as $name => $values) {
            foreach ($values as $value) {
                $exploded = explode(":", $value);
                if (isset($_POST[$name])) {
                    switch ($exploded[0]) {
                        case 'min':
                            $min = $exploded[1];
                            if (Valid::stringType()->length($min)->validate($_POST[$name]) == false) {
                                $errors[$name] = "$name must be at least three characters";
                            }
                            break;
                        case 'email':
                            if (Valid::email()->validate($_POST[$name]) == false) {
                                $errors[$name] = "$name is not a valid email";
                            }

                            break;
                        case 'equalsTo':
                            $compare = $exploded[1];
                            if (Valid::equals($_POST[$compare])->validate($_POST[$name]) == false) {
                                $errors[$name] = "$name does not equals to $compare";
                            }

                            break;
                        default:
                            ;
                    }
                } else {
                    $errors[$name] = "$name not found";
                }
            }
        }

        return $errors;
    }
}