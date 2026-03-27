<?php

/**
 * cuidado ao usar o escopo de variáveis. o jeito errado aí:
 * 
 * $x = 10;
 * function teste(){
 * echo $x; }
 * 
 * melhor prática:
 * function teste ($x){
 * echo $x;}
 * 
 * e também existe: 
 * global $x; 
 * mas pode bagunçar o código
 * 
 */

?>