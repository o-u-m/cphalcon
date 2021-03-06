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

namespace Phalcon\Test\Integration\Mvc\Model\MetaData\Memory;

use IntegrationTester;

/**
 * Class ReadColumnMapIndexCest
 */
class ReadColumnMapIndexCest
{
    /**
     * Tests Phalcon\Mvc\Model\MetaData\Memory :: readColumnMapIndex()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcModelMetadataMemoryReadColumnMapIndex(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\MetaData\Memory - readColumnMapIndex()');
        $I->skipTest('Need implementation');
    }
}
