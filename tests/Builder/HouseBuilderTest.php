<?php
use PHPUnit\Framework\TestCase;
use App\Builder\HouseBuilder;

class HouseBuilderTest extends TestCase {
    public function testHouseBuilder(): void {
        $builder = new HouseBuilder();
        $house = $builder->buildWalls("brick")->buildRoof("tile")->getHouse();
        $this->assertEquals("brick", $house->walls);
        $this->assertEquals("tile", $house->roof);
    }
}
