<?php

namespace Dhii\Parser;

use Dhii\Io\Resource\ReadableResourceInterface;
use Dhii\Parser\Exception\CouldNotParseExceptionInterface;
use Dhii\Parser\Exception\ParserExceptionInterface;

/**
 * Something that can parse a hierarchy representation into a hierarchy.
 *
 * From this perspective, any parsable string can be converted into an abstract
 * syntax tree. The more obvious examples include XML and JSON. Less obvious
 * examples include SQL, structured English, or even a `printf()` format string.
 *
 * It isn't always effective to have the whole string in order to start parsing.
 * For example, the parser may want to return information about only some
 * of the nodes represented in the source; in this case, holding the whole
 * source string in memory can be undesirable. If only some information about
 * the nodes should be retrieved, the problem becomes more severe, especially
 * if only a certain maximal amount of nodes is required in the output; in this
 * case, a very large string in memory must traditionally be parsed into a DOM
 * first, before the desired data can be retrieved from it. This parser solves
 * that problem by moving through the resource in a linear fashion, perhaps
 * reading only a small amount of data into memory at a time, and/or decoding
 * only some of the nodes in the resource, perhaps conditionally, or only
 * attaching some information to them.
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
     * @throws CouldNotParseExceptionInterface If cannot parse.
     * @throws ParserExceptionInterface        If a non-parsing problem occurs.
     *
     * @return ChildrenAwareInterface The root node of the hierarchy.
     */
    public function parse($source);
}
