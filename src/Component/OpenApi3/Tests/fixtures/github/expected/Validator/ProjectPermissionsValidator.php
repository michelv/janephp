<?php

namespace Github\Validator;

class ProjectPermissionsValidator implements \Github\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')), new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('read' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'bool')))), 'write' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'bool')))), 'admin' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'bool'))))), 'allowExtraFields' => false)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Github\Validator\ValidationException($violations);
        }
    }
}