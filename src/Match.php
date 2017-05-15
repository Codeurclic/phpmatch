<?php
declare(strict_types=1);
final class Match{
    private $equipe1;
    private $equipe2;
    private $dateMatch;
    private $score1;
    private $score2;
    
    public __construct(string $equipe1, string $equipe2, int $score1, 
    int $score2, date $dateMatch){
      $this->equipe1 = $equipe1;
      $this->equipe2 = $equipe2;
      
      
  
    }
    private static function isEquipe1(string $equipe1){
     // $regexp = /^[A-Z][A-Za-z0-9]{,40}$/;
      
    }
    
}

