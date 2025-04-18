<?php

namespace obregonco\B2;

class Bucket
{
    const TYPE_PUBLIC = 'allPublic';
    const TYPE_PRIVATE = 'allPrivate';

    protected $bucketId;
    protected $bucketName;
    protected $bucketType;
    protected $bucketInfo;
    protected $corsRules;
    protected $fileLockConfiguration;
    protected $defaultServerSideEncryption;
    protected $lifecycleRules;
    protected $revision;
    protected $options;
    // Fix references
    protected $BucketId;
    protected $BucketName;

    /**
     * Bucket constructor.
     * @param array $values
     */
    public function __construct(array $values)
    {
        foreach ($values as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function getId()
    {
        return $this->bucketId ?? $this->BucketId;
    }

    public function getName()
    {
        return $this->bucketName ?? $this->BucketName;
    }

    public function getType()
    {
        return $this->bucketType;
    }

    public function getRevision()
    {
        return $this->revision;
    }

    public function getCORSRules()
    {
        return $this->corsRules;
    }

    public function getLifeCycleRules()
    {
        return $this->lifecycleRules;
    }
}
