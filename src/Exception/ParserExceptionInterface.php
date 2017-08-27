<?php

namespace Dhii\Parser\Exception;

use Dhii\Exception\ThrowableInterface;
use Dhii\Parser\ParserAwareInterface;

/**
 * An exception that occurs in relation to a parser.
 *
 * @since [*next-version*]
 */
interface ParserExceptionInterface extends
        ThrowableInterface,
        ParserAwareInterface
{
}
