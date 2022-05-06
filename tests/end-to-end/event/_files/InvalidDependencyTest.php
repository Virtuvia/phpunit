<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture;

use PHPUnit\Framework\TestCase;

final class InvalidDependencyTest extends TestCase
{
    /**
     * @depends doesNotExist
     */
    public function testOne(): void
    {
        $this->assertTrue(true);
    }

    /**
     * @depends DoesNotExist::class
     */
    public function testTwo(): void
    {
        $this->assertTrue(true);
    }
}
