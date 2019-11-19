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

use CachetHQ\Twitter\TwitterExtension;
use CachetHQ\Twitter\TwitterParser;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the service provider test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testTwitterParserIsInjectable()
    {
        $this->assertIsInjectable(TwitterParser::class);
    }

    public function testTwitterExtensionIsInjectable()
    {
        $this->assertIsInjectable(TwitterExtension::class);
    }
}
