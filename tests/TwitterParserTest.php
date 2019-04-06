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

namespace CachetHQ\Tests\Twitter;

/**
 * This is the twitter parser test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class TwitterParserTest extends AbstractTestCase
{
    public function provideRenderCases()
    {
        return [
            ['@CachetHQ', '<p><a href="https://twitter.com/CachetHQ">@CachetHQ</a></p>'],
            ['@ CachetHQ', '<p>@ CachetHQ</p>'],
        ];
    }

    /**
     * @dataProvider provideRenderCases
     */
    public function testRender($input, $output)
    {
        $this->assertSame("$output\n", $this->app->markdown->convertToHtml($input));
    }
}
