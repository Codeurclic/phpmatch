<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;


final class MatchTest extends TestCase {
    public function testHasEquipe1(){
        $this->assertObjectHasAttribute('equipe1', new Match);
    }

    public function testHasEquipe2(){
        $this->assertObjectHasAttribute('equipe2', new Match);
    }

    public function testHasDateMatch(){
        $this->assertObjectHasAttribute('dateMatch', new Match);
    }
