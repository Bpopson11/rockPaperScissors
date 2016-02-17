<?php

class RockPaperScissors
{
      function playGame($first_input, $second_input)
      {
          $inputs = array('Player1' => $first_input, 'Player2' => $second_input);

          if ($first_input == $second_input){
              return "It's a Draw!";
          } elseif ($first_input == "paper" && $second_input == "rock"){
              return "Player 1";
          } elseif ($first_input == "scissors" && $second_input == "paper"){
              return "Player 1";
          } elseif ($first_input == "rock" && $second_input == "scissors"){
              return "Player 1";
          } else {
              return "Player 2";
          }
      }
}

?>
