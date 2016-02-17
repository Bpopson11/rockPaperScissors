<?php

class RockPaperScissors
{
      function playGame($first_input, $second_input)
      {
          if ($first_input == "rock" && $second_input == "scissors"){
              return "Player 1";
          } elseif ($second_input == "rock" && $first_input == "scissors"){
              return "Player 2";
          }
      }
}

?>
