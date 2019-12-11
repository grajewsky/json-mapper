<?php
namespace Test;

use JsonMapper\Core\JsonMapper;
use PHPUnit\Framework\TestCase;

class JsonMapperTest extends TestCase {
    /** 
     * @Test
     */
    public function testMapper() {
        $mapper = new JsonMapper();
        $map = $mapper->map(json_encode(['test' => 1]), TestDomain::class);
        $this->assertInstanceOf(TestDomain::class, $map);
    }
} 