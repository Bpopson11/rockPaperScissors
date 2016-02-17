<?php

class RockPaperScissors
{
      function playGame($first_input, $second_input)
      {
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

<!-- alternate option for method -->
<!-- function playRPS($input1, $input2)
{
    if ($input1 == $input2) {
        return "draw";
    } elseif ($input1 == "rock") {
        if ($input2 == "scissors") {
            return "Player 1";
        } else {
            return "Player 2";
        }
    } elseif ($input1 == "paper") {
        if ($input2 == "scissors") {
            return "Player 2";
        } else {
            return "Player 1";
        }
    } elseif ($input1 == "scissors") {
        if ($input2 == "paper") {
            return "Player 1";
        } else {
            return "Player 2"; -->
