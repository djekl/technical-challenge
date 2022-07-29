<?php

namespace Tests\Unit\Models;

use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CollectorTest extends TestCase
{
    use LazilyRefreshDatabase;

    /** @test */
    public function the_collectors_table_has_the_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('collectors', [
                'id', 'name', 'created_at', 'updated_at',
            ])
        );
    }
}
