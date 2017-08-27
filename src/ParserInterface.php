<?php

namespace Dhii\Parser;

use Dhii\Io\Resource\ReadableResourceInterface;

/**
 * Something that can parse a hierarchy representation into a hierarchy.
 *
 * From this perspective, any parsable string can be converted into an abstract
 * syntax tree. The more obvious examples include XML and JSON. Less obvious
 * examples include SQL, structured English, or even a `printf()` format string.
 *
 * @since [*next-version*]
 */
interface ParserInterface
{
    /**
     * Parses a resource's contents into a hierarchy.
     *
     * @since [*next-version*]
     *
     * @param ReadableResourceInterface $source The source of data to parse.
     *
     * @return ChildrenAwareInterface The root node of the hierarchy.
     */
    public function parse($source);
}
