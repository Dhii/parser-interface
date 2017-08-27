<?php

namespace Dhii\Parser;

/**
 * Something that can have a parser retrieved from it.
 *
 * @since [*next-version*]
 */
interface ParserAwareInterface
{
    /**
     * Retrieves the parser associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return ParserInterface The parser.
     */
    public function getParser();
}
