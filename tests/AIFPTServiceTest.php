<?php


namespace OneSite\AI\FPT\Tests;


use OneSite\AI\FPT\AIFPTService;
use PHPUnit\Framework\TestCase;


class AIFPTServiceTest extends TestCase
{

    private $service;

    /**
     *
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->service = new AIFPTService();
    }

    /**
     *
     */
    public function tearDown(): void
    {
        $this->service = null;

        parent::tearDown();
    }

    /**
     * PHPUnit test: vendor/bin/phpunit --filter testCreateDataset tests/BigQueryServiceTest.php
     */
    public function testCreateDataset()
    {

    }

}
