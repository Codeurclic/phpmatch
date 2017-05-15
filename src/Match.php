<?php
declare(strict_types=1);
final class Match{
    private $equipe1;
    private $equipe2;
    private $dateMatch;
    private $score1;
    private $score2;
    
    public function __construct($equipe1, $equipe2, $score1, $score2, $dateMatch){
      $this->checkEquipe($equipe1);
      $this->checkEquipe($equipe2);
      $this->equipe1 = $equipe1;
      $this->equipe2 = $equipe2;
      $this->score1 = $score1;
      $this->score2 = $score2;
      $this->dateMatch = $dateMatch;
      
  
    }
    private static function checkEquipe(string $equipe): void{
        $regexp = '/^[A-Z][A-Za-z0-9]{,40}$/';
        if (!filter_var($equipe, FILTER_VALIDATE_REGEXP, 
               array("options"=>array("regexp"=> $regexp)))) {
            throw new InvalidArgumentException(
            sprintf('"%s" n est pas une equipe valide',$equipe)
            );
        }
    }  
    
}
