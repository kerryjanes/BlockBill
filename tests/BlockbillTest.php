<?php
/**
 * Tests for BlockBill
 */

use PHPUnit\Framework\TestCase;
use Blockbill\Blockbill;

class BlockbillTest extends TestCase {
    private Blockbill $instance;

    protected function setUp(): void {
        $this->instance = new Blockbill(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockbill::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
