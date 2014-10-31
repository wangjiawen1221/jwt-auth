<?php

namespace Tymon\JWTAuth;

use Tymon\JWTAuth\Validators\TokenValidator;

final class Token
{

    /**
     * @var string
     */
    private $value;

    /**
     * Create a new JSON Web Token
     *
     * @param string  $value
     */
    public function __construct($value)
    {
        TokenValidator::check($value);

        $this->value = $value;
    }

    /**
     * Get the token
     *
     * @return string
     */
    public function get()
    {
        return $this->value;
    }

    /**
     * Get the token when casting to string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
