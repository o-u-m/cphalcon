<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Session\Adapter\Stream;

use IntegrationTester;
use Phalcon\Test\Fixtures\Traits\DiTrait;
use Phalcon\Test\Fixtures\Traits\SessionTrait;
use function cacheDir;
use function file_put_contents;
use function sleep;
use function uniqid;

/**
 * Class GcCest
 */
class GcCest
{
    use DiTrait;
    use SessionTrait;

    /**
     * @param IntegrationTester $I
     */
    public function _before(IntegrationTester $I)
    {
        $this->newFactoryDefault();
    }

    /**
     * Tests Phalcon\Session\Adapter\Stream :: gc()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function sessionAdapterStreamGc(IntegrationTester $I)
    {
        $I->wantToTest('Session\Adapter\Stream - gc()');
        $adapter = $this->getSessionStream();

        /**
         * Add two session files
         */
        $actual = file_put_contents(cacheSessionsDir('gc_1'), uniqid());
        $I->assertNotFalse($actual);
        $actual = file_put_contents(cacheSessionsDir('gc_2'), uniqid());
        $I->assertNotFalse($actual);
        /**
         * Sleep to make sure that the time expired
         */
        sleep(2);
        $actual = $adapter->gc(1);
        $I->assertTrue($actual);

        $I->dontSeeFileFound('gc_1', cacheSessionsDir());
        $I->dontSeeFileFound('gc_2', cacheSessionsDir());
    }
}