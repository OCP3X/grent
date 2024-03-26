<?php

namespace ContainerSyxcmW3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['property_info.cache'] ?? $container->load('getPropertyInfo_CacheService'));

        if (isset($container->privates['serializer'])) {
            return $container->privates['serializer'];
        }
        $b = ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService'));
        $c = ($container->privates['serializer.mapping.cache_class_metadata_factory'] ?? $container->load('getSerializer_Mapping_CacheClassMetadataFactoryService'));

        $d = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($c);
        $e = new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($c);

        return $container->privates['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer($b), 1 => new \Symfony\Component\Messenger\Transport\Serialization\Normalizer\FlattenExceptionNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(false), 3 => new \Symfony\Component\Serializer\Normalizer\UidNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $d), 6 => new \Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer(new \Symfony\Component\Serializer\Normalizer\PropertyNormalizer($c, $d, $a, $e, NULL)), 7 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 9 => new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer(), 10 => new \Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer(), 11 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($container->privates['mime_types'] ?? $container->load('getMimeTypesService'))), 12 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(NULL, NULL), 13 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 14 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($c, $d, $b, $a, $e, NULL)], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(NULL, NULL), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(NULL, NULL), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }
}