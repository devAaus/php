<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
   protected $errors = [];

   public function __construct(public array $attributes)
   {
      if (!Validator::email($attributes['email'])) {
         $this->errors['email'] = 'Invalid email address.';
      }

      if (!Validator::string($attributes['password'])) {
         $this->errors['password'] = 'Password is required.';
      }
   }

   public static function validate($attributes)
   {
      $instance = new static($attributes);

      return $instance->failed() ? $instance->throw() : $instance;
   }

   public function errors()
   {
      return $this->errors;
   }

   public function throw()
   {
      ValidationException::throw($this->errors(), $this->attributes);
   }

   public function failed()
   {
      return count($this->errors);
   }

   public function error($field, $message)
   {
      $this->errors[$field] = $message;

      return $this;
   }
}
