<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;


final class MatchTest extends TestCase {
    // verifier la presence des "bons" attributs dans l objet
    public function testHasEquipe1(){
        $this->assertObjectHasAttribute('equipe1', new Match);
    }

    public function testHasEquipe2(){
        $this->assertObjectHasAttribute('equipe2', new Match);
    }

    public function testHasDateMatch(){
        $this->assertObjectHasAttribute('dateMatch', new Match);
    }
    // factoriser la verification des attributs
    public function testHasAttributes(){
      $attributes = array('equipe1', 'equipe2', 'score1', 'score2', 'dateMatch');
      foreach($attributes as $attribute){
	$this->assertObjectHasAttribute($attribute, new Match);
      }
    }
        
    // verifier que la construction de l objet avec de "mauvais" parametres leve une exception
    public function testCannotBeCreatedFromNegativeScore(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $match = new Match('Bleu', 'Rouge', -1, 0, '12/12/2012');
    }
    
    // verifier le comportement de ma methode matchLocation
    // 3 cas a tester
    // si score1 > score2 => domicile
    // si score1 < score2 => invité
    // si score1 == score2 => ''
    
    
    
}
