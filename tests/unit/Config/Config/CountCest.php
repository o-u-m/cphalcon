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

namespace Phalcon\Test\Unit\Config\Config;

use Phalcon\Test\Fixtures\Traits\ConfigTrait;
use UnitTester;

class CountCest
{
    use ConfigTrait;

    /**
     * Tests Phalcon\Config :: count()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-06-19
     */
    public function configCount(UnitTester $I)
    {
        $I->wantToTest('Config - count()');
        $this->checkCount($I);
    }
}
