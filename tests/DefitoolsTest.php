<?php
/**
 * Tests for DeFiTools
 */

use PHPUnit\Framework\TestCase;
use Defitools\Defitools;

class DefitoolsTest extends TestCase {
    private Defitools $instance;

    protected function setUp(): void {
        $this->instance = new Defitools(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defitools::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
