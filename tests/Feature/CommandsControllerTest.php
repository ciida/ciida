<?php

namespace Ciida\Ciida\Tests\Feature;

use Ciida\Ciida\Tests\TestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

class CommandsControllerTest extends TestCase
{
    use InteractsWithViews;

    /** @test */
    public function see_list_console_commands_list(): void
    {
        $this->get(route('ciida'))
            ->assertSuccessful()
            ->assertSeeText('ok');
    }
}