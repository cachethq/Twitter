<?php

declare(strict_types=1);

/*
 * This file is part of Cachet Twitter.
 *
 * (c) apilayer GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Twitter;

use League\CommonMark\InlineParserContext;
use League\CommonMark\Inline\Element\Link;
use League\CommonMark\Inline\Parser\InlineParserInterface;

/**
 * This is the twitter parser class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TwitterParser implements InlineParserInterface
{
    /**
     * Get the characters that must be matched.
     *
     * @return string[]
     */
    public function getCharacters(): array
    {
        return ['@'];
    }

    /**
     * Parse a line and determine if it contains a handle.
     *
     * If it does, then we do the necessary.
     *
     * @param \League\CommonMark\InlineParserContext $inlineContext
     *
     * @return bool
     */
    public function parse(InlineParserContext $inlineContext): bool
    {
        $cursor = $inlineContext->getCursor();

        $previousChar = $cursor->peek(-1);
        if ($previousChar !== null && $previousChar !== ' ') {
            return false;
        }

        $previousState = $cursor->saveState();
        $cursor->advance();

        $handle = $cursor->match('/^[A-Za-z0-9_]{1,15}(?!\w)/');
        if (empty($handle)) {
            $cursor->restoreState($previousState);

            return false;
        }

        $profileUrl = "https://twitter.com/{$handle}";
        $inlineContext->getContainer()->appendChild(new Link($profileUrl, '@'.$handle));

        return true;
    }
}
