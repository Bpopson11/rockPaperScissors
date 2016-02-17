<?php

class RockPaperScissors
{
      function playGame($first_input, $second_input)
      {
          if ($first_input == "rock" && $second_input == "scissors"){
              return "Player 1";
          } elseif ($second_input == "rock" && $first_input == "scissors"){
              return "Player 2";
          } elseif ($first_input == "rock" && $second_input == "paper"){
              return "Player 2";
          } elseif ($second_input == "rock" && $first_input == "paper"){
              return "Player 1";
          } elseif ($first_input == "scissors" && $second_input == "paper"){
                return "Player 1";
          } elseif ($second_input == "scissors" && $first_input == "paper"){
                return "Player 2";
          } elseif ($first_input == $second_input){
                return "It's a Draw!";
          }
      }
}

?>
