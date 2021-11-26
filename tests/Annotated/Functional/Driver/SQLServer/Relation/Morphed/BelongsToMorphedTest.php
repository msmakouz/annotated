<?php

declare(strict_types=1);

namespace Cycle\Annotated\Tests\Functional\Driver\SQLServer\Relation\Morphed;

// phpcs:ignore
use Cycle\Annotated\Tests\Functional\Driver\Common\Relation\Morphed\BelongsToMorphedTest as CommonClass;

/**
 * @group driver
 * @group driver-sqlserver
 */
class BelongsToMorphedTest extends CommonClass
{
    public const DRIVER = 'sqlserver';
}
