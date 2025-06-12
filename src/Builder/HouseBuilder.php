<?php
namespace App\Builder;

class House {
    public function __construct(public string $walls, public string $roof) {}
}

class HouseBuilder {
    private string $walls = "";
    private string $roof = "";

    public function buildWalls(string $walls): self {
        $this->walls = $walls;
        return $this;
    }

    public function buildRoof(string $roof): self {
        $this->roof = $roof;
        return $this;
    }

    public function getHouse(): House {
        return new House($this->walls, $this->roof);
    }
}
