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
class InstallationPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\InstallationPermissions';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\InstallationPermissions';
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
        $object = new \Github\Model\InstallationPermissions();
        $validator = new \Github\Validator\InstallationPermissionsValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('deployments', $data)) {
            $object->setDeployments($data['deployments']);
        }
        if (\array_key_exists('checks', $data)) {
            $object->setChecks($data['checks']);
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($data['metadata']);
        }
        if (\array_key_exists('contents', $data)) {
            $object->setContents($data['contents']);
        }
        if (\array_key_exists('pull_requests', $data)) {
            $object->setPullRequests($data['pull_requests']);
        }
        if (\array_key_exists('statuses', $data)) {
            $object->setStatuses($data['statuses']);
        }
        if (\array_key_exists('issues', $data)) {
            $object->setIssues($data['issues']);
        }
        if (\array_key_exists('organization_administration', $data)) {
            $object->setOrganizationAdministration($data['organization_administration']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDeployments()) {
            $data['deployments'] = $object->getDeployments();
        }
        if (null !== $object->getChecks()) {
            $data['checks'] = $object->getChecks();
        }
        if (null !== $object->getMetadata()) {
            $data['metadata'] = $object->getMetadata();
        }
        if (null !== $object->getContents()) {
            $data['contents'] = $object->getContents();
        }
        if (null !== $object->getPullRequests()) {
            $data['pull_requests'] = $object->getPullRequests();
        }
        if (null !== $object->getStatuses()) {
            $data['statuses'] = $object->getStatuses();
        }
        if (null !== $object->getIssues()) {
            $data['issues'] = $object->getIssues();
        }
        if (null !== $object->getOrganizationAdministration()) {
            $data['organization_administration'] = $object->getOrganizationAdministration();
        }
        $validator = new \Github\Validator\InstallationPermissionsValidator();
        $validator->validate($data);
        return $data;
    }
}