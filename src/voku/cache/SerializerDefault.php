<?php

declare(strict_types=1);

namespace voku\cache;

/**
 * SerializerDefault: simple serialize / unserialize
 */
class SerializerDefault implements iSerializer
{
    /**
     * @var array
     */
    private $unserialize_options;

    /**
     * {@inheritdoc}
     */
    public function serialize($value)
    {
        return \serialize($value);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($value)
    {
        return \unserialize($value, $this->unserialize_options);
    }

    /**
     * @param array $options
     */
    public function setUnserializeOptions(array $options)
    {
        $this->unserialize_options = $options;
    }
}
