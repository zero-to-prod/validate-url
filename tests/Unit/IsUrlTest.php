<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\ValidateUrl\ValidateUrl;

class IsUrlTest extends TestCase
{
    /**
     * @test
     *
     * @see ValidateUrl::isUrl()
     */
    public function is_url(): void
    {
        self::assertTrue(ValidateUrl::isUrl('https://www.example.com'));
    }

    /**
     * @test
     *
     * @see ValidateUrl::isUrl()
     */
    public function is_not_url(): void
    {
        self::assertFalse(ValidateUrl::isUrl('bogus'));
    }

    /**
     * @test
     *
     * @see ValidateUrl::isUrl()
     */
    public function filters_protocols(): void
    {
        self::assertTrue(ValidateUrl::isUrl('https://www.example.com', ['https']));
    }

    /**
     * @test
     *
     * @see ValidateUrl::isUrl()
     */
    public function excludes_protocols(): void
    {
        self::assertFalse(ValidateUrl::isUrl('https:///', ['https']));
    }
}