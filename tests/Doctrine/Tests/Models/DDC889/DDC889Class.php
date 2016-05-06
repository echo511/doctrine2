<?php

namespace Doctrine\Tests\Models\DDC889;

class DDC889Class extends DDC889SuperClass
{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;


    public static function loadMetadata(\Doctrine\ORM\Mapping\ClassMetadata $metadata)
    {
        $metadata->mapField(
            [
           'id'         => true,
           'fieldName'  => 'id',
           'type'       => 'integer',
           'columnName' => 'id',
            ]
        );

        $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_AUTO);
    }

}
