<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JobStepsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\JobStepsItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\JobStepsItem';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\JobStepsItem();
        $validator = new \Github\Validator\JobStepsItemValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('conclusion', $data) && $data['conclusion'] !== null) {
            $object->setConclusion($data['conclusion']);
        }
        elseif (\array_key_exists('conclusion', $data) && $data['conclusion'] === null) {
            $object->setConclusion(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('started_at', $data) && $data['started_at'] !== null) {
            $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['started_at']));
        }
        elseif (\array_key_exists('started_at', $data) && $data['started_at'] === null) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
            $object->setCompletedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['completed_at']));
        }
        elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
            $object->setCompletedAt(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['status'] = $object->getStatus();
        $data['conclusion'] = $object->getConclusion();
        $data['name'] = $object->getName();
        $data['number'] = $object->getNumber();
        if (null !== $object->getStartedAt()) {
            $data['started_at'] = $object->getStartedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getCompletedAt()) {
            $data['completed_at'] = $object->getCompletedAt()->format('Y-m-d\\TH:i:sP');
        }
        $validator = new \Github\Validator\JobStepsItemValidator();
        $validator->validate($data);
        return $data;
    }
}