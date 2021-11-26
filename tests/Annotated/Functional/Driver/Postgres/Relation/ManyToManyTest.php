<?php

declare(strict_types=1);

namespace Cycle\Annotated\Tests\Functional\Driver\Postgres\Relation;

// phpcs:ignore
use Cycle\Annotated\Tests\Functional\Driver\Common\Relation\ManyToManyTest as CommonClass;

/**
 * @group driver
 * @group driver-postgres
 */
class ManyToManyTest extends CommonClass
{
    public const DRIVER = 'postgres';
}
