<?php

declare(strict_types=1);

namespace Cycle\Annotated\Tests\Fixtures\Fixtures16;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Inheritance\JoinedTable as InheritanceJoinedTable;
use Cycle\Annotated\Annotation\Table\Index;

/**
 * @Entity
 * @Index(columns={"index_id"}, unique=true)
 * @InheritanceJoinedTable
 */
#[Entity]
#[Index(columns: ['index_id'], unique: true)]
#[InheritanceJoinedTable]
class Buyer extends Person
{
    /** @Column(type="integer") */
    #[Column(type: 'integer')]
    private int $index_id;
}
