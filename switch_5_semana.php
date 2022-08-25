<?php

  //$diasemana = array("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo");

  $ds = 20;

  switch ($ds) {

    case "0":
      echo "Hoje é Segunda-feira!";
      break;
    case "1":
      echo "Hoje é Terça-feira!";
      break;
    case "2":
      echo "Hoje é Quarta-feira!";
      break;
    case "3":
      echo "Hoje é Quinta-feira!";
      break;
    case "4":
      echo "Hoje é Sexta-feira!";
      break;
    case "5":
      echo "Hoje é Sábado!";
      break;
    case "6":
      echo "Hoje é Domingo. Descanse!";
      break;
    default:
      echo "Dia da semana inválido.";
}
?>
 