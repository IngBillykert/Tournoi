<?php 
//Varaible pour le Groupe A 
$premier="";
$MG="";
$MN="";
$MP="";
$BP="";
$BC="";
$dif="";
$point="";

$deuxieme="";
$MG2="";
$MN2="";
$MP2="";
$BP2="";
$BC2="";
$dif2="";
$point2="";

$troisieme="";
$MG3="";
$MN3="";
$MP3="";
$BP3="";
$BC3="";
$dif3="";
$point3="";

$quatrieme="";
$MG4="";
$MN4="";
$MP4="";
$BP4="";
$BC4="";
$dif4="";
$point4="";

//Variable pour le groupe B
$premierM="";
$MGb="";
$MNb="";
$MPb="";
$BPb="";
$BCb="";
$difb="";
$pointb="";

$deuxiemeM="";
$MG2b="";
$MN2b="";
$MP2b="";
$BP2b="";
$BC2b="";
$dif2b="";
$point2b="";

$troisiemeM="";
$MG3b="";
$MN3b="";
$MP3b="";
$BP3b="";
$BC3b="";
$dif3b="";
$point3b="";

$quatriemeM="";
$MG4b="";
$MN4b="";
$MP4b="";
$BP4b="";
$BC4b="";
$dif4b="";
$point4b="";


if(isset($_GET['Classement'])){
//Groupe A
$pntM1=0;
$matchGA1=0;
$matchPe1=0;
$matchNu1=0;
$butp1=0;
$butc1=0;
$score1M1=$_GET['score1'];
$score2M1=$_GET['score2'];



$pntM2=0;
$matchGa2=0;
$matchPe2=0;
$matchNu2=0;
$butp2=0;
$butc2=0;
$score1M2=$_GET['score3'];
$score2M2=$_GET['score4'];

$pntM3=0;
$matchGa3=0;
$matchPe3=0;
$matchNu3=0;
$butp3=0;
$butc3=0;

$score1M3=$_GET['score5'];
$score2M3=$_GET['score6'];

$pntM4=0;
$matchGa4=0;
$matchPe4=0;
$matchNu4=0;
$butp4=0;
$butc4=0;

$score1M4=$_GET['score7'];
$score2M4=$_GET['score8'];


$score1M5=$_GET['score9'];
$score2M5=$_GET['score1'];

$score1M6=$_GET['score11'];
$score2M6=$_GET['score12'];

if($score1M1>$score2M1){
$pntM1=$pntM1+3;
$pntM2=$pntM2+0;
$matchGA1=$matchGA1+1;
$matchPe2=$matchPe2+1;
}else if($score1M1<$score2M1){
$pntM1=$pntM1+0;
$pntM2=$pntM2+3;
$matchPe1=$matchPe1+1;
$matchGa2=$matchGa2+1;
}else{
$pntM1=$pntM1+1;
$pntM2=$pntM2+1;
$matchNu1=$matchNu1+1;
$matchNu2=$matchNu2+1;
}

if($score1M4>$score2M4){
$pntM2=$pntM2+3;
$pntM4=$pntM4+0;
$matchGa2=$matchGa2+1;
$matchPe4=$matchPe4+1;
}else if($score1M4<$score2M4){
$pntM2=$pntM2+0;
$pntM4=$pntM4+3;
$matchPe2=$matchPe2+1;
$matchGa4=$matchGa4+1;
}else{
$pntM2=$pntM2+1;
$pntM4=$pntM4+1;
$matchNu2=$matchNu2+1;
$matchNu4=$matchNu4+1;
}

if($score1M6>$score2M6){
$pntM2=$pntM2+3;
$pntM3=$pntM3+0;
$matchGa2=$matchGa2+1;
$matchPe3=$matchPe3+1;
}else if($score1M6<$score2M6){
$pntM2=$pntM2+0;
$pntM3=$pntM3+3;
$matchPe2=$matchPe2+1;
$matchGa3=$matchGa3+1;
}else{
$pntM2=$pntM2+1;
$pntM3=$pntM3+1;
$matchNu2=$matchNu2+1;
$matchNu3=$matchNu3+1;
}


if($score1M3>$score2M3){
$pntM1=$pntM1+3;
$pntM3=$pntM3+0;
$matchGA1=$matchGA1+1;
$matchPe3=$matchPe3+1;
}else if($score1M3<$score2M3){
$pntM1=$pntM1+0;
$pntM3=$pntM3+3;
$matchPe1=$matchPe1+1;
$matchGa3=$matchGa3+1;
}else{
$pntM1=$pntM1+1;
$pntM3=$pntM3+1;
$matchNu1=$matchNu1+1;
$matchNu3=$matchNu3+1;
}


if($score1M5>$score2M5){
$pntM1=$pntM1+3;
$pntM4=$pntM4+0;
$matchGA1=$matchGA1+1;
$matchPe4=$matchPe4+1;
}else if($score1M5<$score2M5){
$pntM1=$pntM1+0;
$pntM4=$pntM4+3;
$matchPe1=$matchPe1+1;
$matchGa4=$matchGa4+1;
}else{
$pntM1=$pntM1+1;
$pntM4=$pntM4+1;
$matchNu1=$matchNu1+1;
$matchNu4=$matchNu4+1;
}

if($score1M2>$score2M2){
$pntM3=$pntM3+3;
$pntM4=$pntM4+0;
$matchGa3=$matchGa3+1;
$matchPe4=$matchPe4+1;
}else if($score1M2<$score2M2){
$pntM3=$pntM3+0;
$pntM4=$pntM4+3;
$matchPe3=$matchPe3+1;
$matchGa4=$matchGa4+1;
}else{
$pntM3=$pntM3+1;
$pntM4=$pntM4+1;
$matchNu3=$matchNu3+1;
$matchNu4=$matchNu4+1;
}

$butp1=$score1M1+$score1M3+$score1M5;
$butp2=$score2M2+$score1M4+$score1M6;
$butp3=$score1M2+$score2M3+$score2M6;
$butp4=$score2M2+$score2M4+$score2M5;

$butc1=$score2M2+$score2M3+$score2M5;
$butc2=$score1M1+$score2M4+$score2M6;
$butc3=$score2M2+$score1M3+$score1M6;
$butc4=$score1M2+$score1M4+$score1M5;

$dif1=$butp1-$butc1;
$dif2=$butp2-$butc2;
$dif3=$butp3-$butc3;
$dif4=$butp4-$butc4;

//GroupeB
$bpntM1=0;
$bmatchGa1=0;
$bmatchPe1=0;
$bmatchNu1=0;
$bbutp1=0;
$bbutc1=0;

$bscore1M1=$_GET['scoreb1'];
$bscore2M1=$_GET['scoreb2'];



$bpntM2=0;
$bmatchGa2=0;
$bmatchPe2=0;
$bmatchNu2=0;
$bbutp2=0;
$bbutc2=0;

$bscore1M2=$_GET['scoreb3'];
$bscore2M2=$_GET['scoreb4'];

$bpntM3=0;
$bmatchGa3=0;
$bmatchPe3=0;
$bmatchNu3=0;
$bbutp3=0;
$bbutc3=0;

$bscore1M3=$_GET['scoreb5'];
$bscore2M3=$_GET['scoreb6'];

$bpntM4=0;
$bmatchGa4=0;
$bmatchPe4=0;
$bmatchNu4=0;
$bbutp4=0;
$bbutc4=0;

$bscore1M4=$_GET['scoreb7'];
$bscore2M4=$_GET['scoreb8'];


$bscore1M5=$_GET['scoreb9'];
$bscore2M5=$_GET['scoreb10'];

$bscore1M6=$_GET['scoreb11'];
$bscore2M6=$_GET['scoreb12'];

if($bscore1M1>$bscore2M1){
$bpntM1=$bpntM1+3;
$bpntM2=$bpntM2+0;
$bmatchGa1=$bmatchGa1+1;
$bmatchPe2=$bmatchPe2+1;
}else if($bscore1M1<$bscore2M1){
$bpntM1=$bpntM1+0;
$bpntM2=$bpntM2+3;
$bmatchPe1=$bmatchPe1+1;
$bmatchGa2=$bmatchGa2+1;
}else{
$bpntM1=$bpntM1+1;
$bpntM2=$bpntM2+1;
$bmatchNu1=$bmatchNu1+1;
$bmatchNu2=$bmatchNu2+1;
}

if($bscore1M4>$bscore2M4){
$bpntM2=$bpntM2+3;
$bpntM4=$bpntM4+0;
$bmatchGa2=$bmatchGa2+1;
$bmatchPe4=$bmatchPe4+1;
}else if($bscore1M4<$bscore2M4){
$bpntM2=$bpntM2+0;
$bpntM4=$bpntM4+3;
$bmatchPe2=$bmatchPe2+1;
$bmatchGa4=$bmatchGa4+1;
}else{
$bpntM2=$bpntM2+1;
$bpntM4=$bpntM4+1;
$bmatchNu2=$bmatchNu2+1;
$bmatchNu4=$bmatchNu4+1;
}

if($bscore1M6>$bscore2M6){
$bpntM2=$bpntM2+3;
$bpntM3=$bpntM3+0;
$bmatchGa2=$bmatchGa2+1;
$bmatchPe3=$bmatchPe3+1;
}else if($bscore1M6<$bscore2M6){
$bpntM2=$bpntM2+0;
$bpntM3=$bpntM3+3;
$bmatchPe2=$bmatchPe2+1;
$bmatchGa3=$bmatchGa3+1;
}else{
$bpntM2=$bpntM2+1;
$bpntM3=$bpntM3+1;
$bmatchNu2=$bmatchNu2+1;
$bmatchNu3=$bmatchNu3+1;
}


if($bscore1M3>$bscore2M3){
$bpntM1=$bpntM1+3;
$bpntM3=$bpntM3+0;
$bmatchGa1=$bmatchGa1+1;
$bmatchPe3=$bmatchPe3+1;
}else if($bscore1M3<$bscore2M3){
$bpntM1=$bpntM1+0;
$bpntM3=$bpntM3+3;
$bmatchPe1=$bmatchPe1+1;
$bmatchGa3=$bmatchGa3+1;
}else{
$bpntM1=$bpntM1+1;
$bpntM3=$bpntM3+1;
$bmatchNu1=$bmatchNu1+1;
$bmatchNu3=$bmatchNu3+1;
}


if($bscore1M5>$bscore2M5){
$bpntM1=$bpntM1+3;
$bpntM4=$bpntM4+0;
$bmatchGa1=$bmatchGa1+1;
$bmatchPe4=$bmatchPe4+1;
}else if($bscore1M5<$bscore2M5){
$bpntM1=$bpntM1+0;
$bpntM4=$bpntM4+3;
$bmatchPe1=$bmatchPe1+1;
$bmatchGa4=$bmatchGa4+1;
}else{
$bpntM1=$bpntM1+1;
$bpntM4=$bpntM4+1;
$bmatchNu1=$bmatchNu1+1;
$bmatchNu4=$bmatchNu4+1;
}

if($bscore1M2>$bscore2M2){
$bpntM3=$bpntM3+3;
$bpntM4=$bpntM4+0;
$bmatchGa3=$bmatchGa3+1;
$bmatchPe4=$bmatchPe4+1;
}else if($bscore1M2<$bscore2M2){
$bpntM3=$bpntM3+0;
$bpntM4=$bpntM4+3;
$bmatchPe3=$bmatchPe3+1;
$bmatchGa4=$bmatchGa4+1;
}else{
$bpntM3=$bpntM3+1;
$bpntM4=$bpntM4+1;
$bmatchNu3=$bmatchNu3+1;
$bmatchNu4=$bmatchNu4+1;
}

$bbutp1=$bscore1M1+$bscore1M3+$bscore1M5;
$bbutp2=$bscore2M2+$bscore1M4+$bscore1M6;
$bbutp3=$bscore1M2+$bscore2M3+$bscore2M6;
$bbutp4=$bscore2M2+$bscore2M4+$bscore2M5;

$bbutc1=$bscore2M2+$bscore2M3+$bscore2M5;
$bbutc2=$bscore1M1+$bscore2M4+$bscore2M6;
$bbutc3=$bscore2M2+$bscore1M3+$bscore1M6;
$bbutc4=$bscore1M2+$bscore1M4+$bscore1M5;

$dif1b=$bbutp1-$bbutc1;
$dif2b=$bbutp2-$bbutc2;
$dif3b=$bbutp3-$bbutc3;
$dif4b=$bbutp4-$bbutc4;




//Partie fichier
$GroupA1=fopen("fichier/GroupeA1.txt","r");
$GroupA2=fopen("fichier/GroupeA2.txt","r");
$GroupA3=fopen("fichier/GroupeA3.txt","r");
$GroupA4=fopen("fichier/GroupeA4.txt","r");


//Le premier equipe est  le premier du classement  
if( ($pntM1>$pntM2 and $pntM1>$pntM3 and $pntM1>$pntM4) || (($pntM1>=$pntM2 and $pntM1>=$pntM3 and $pntM1>=$pntM4) && ($dif1>=$dif2 and $dif1>=$dif3 and $dif1>=$dif4))){
$premier=fgets($GroupA1);
$MG=$matchGA1;
$MN=$matchNu1;
$MP=$matchPe1;
$BP=$butp1;
$BC=$butc1; 
$dif=$dif1;
$point=$pntM1;

//Le deuxieme equipe est  le deuxieme du classement 
if( ($pntM2>$pntM3 and $pntM2>$pntM4) || (($pntM2>=$pntM3 and $pntM2>=$pntM4) && ($dif2>=$dif3 and $dif2>=$dif4))){
$deuxieme=fgets($GroupA2);
$MG2=$matchGa2;
$MN2=$matchNu2;
$MP2=$matchPe2;
$BP2=$butp2;
$BC2=$butc2;
$dif2=$dif2;
$point2=$pntM2;

//Le troisieme equipe est  le troisieme du classement
if(($pntM3>$pntM4) || (($pntM3>=$pntM4) && ($dif3>=$dif4))){
$troisieme=fgets($GroupA3);
$MG3=$matchGa3;
$MN3=$matchNu3;
$MP3=$matchPe3;
$BP3=$butp3;
$BC3=$butc3;
$dif3=$dif3;
$point3=$pntM3;

//Le quatrieme equipe est le quatrieme du classement
$quatrieme=fgets($GroupA4);
$MG4=$matchGa4;
$MN4=$matchNu4;
$MP4=$matchPe4;
$BP4=$butp4;
$BC4=$butc4;
$dif4=$dif4;
$point4=$pntM4;

//Le quatrieme equipe est le troisieme du classement
}else{
$troisieme=fgets($GroupA4);
$MG3=$matchGa4;
$MN3=$matchNu4;
$MP3=$matchPe4;
$BP3=$butp4;
$BC3=$butc4;
$dif3=$dif4;
$point3=$pntM4;

//Le troisieme equipe est le quatrieme du classement
$quatrieme=fgets($GroupA3);
$MG4=$matchGa3;
$MN4=$matchNu3;
$MP4=$matchPe3;
$BP4=$butp3;
$BC4=$butc3;
$dif4=$dif3;
$point4=$pntM3;
}

//La troisieme equipe est le deuxieme du classement
}else if(($pntM3>$pntM2 and $pntM3>$pntM4) || (($pntM3>=$pntM2 and $pntM3>=$pntM4) && ($dif3>$dif2 and $dif3>$dif4))){
$deuxieme=fgets($GroupA3);
$MG2=$matchGa3;
$MN2=$matchNu3;
$MP2=$matchPe3;
$BP2=$butp3;
$BC2=$butc3;
$dif2=$dif3;
$point2=$pntM3;

//La deuxieme equipe est est troisieme dans le classement
if(($pntM2>$pntM4) || (($pntM2>=$pntM4) && ($dif2>$dif4))){
$troisieme=fgets($GroupA2);
$MG3=$matchGa2;
$MN3=$matchNu2;
$MP3=$matchPe2;
$BP3=$butp2;
$BC3=$butc2;
$dif3=$dif2;
$point3=$pntM2;

//La quatrieme equipe est quatrieme dans le classement                
$quatrieme=fgets($GroupA4);
$MG4=$matchGa4;
$MN4=$matchNu4;
$MP4=$matchPe4;
$BP4=$butp4;
$BC4=$butc4;
$dif4=$dif4;
$point4=$pntM4;

}else{
//La quatrieme equipe est troisieme dans le classement
$troisieme=fgets($GroupA4);
$MG3=$matchGa4;
$MN3=$matchNu4;
$MP3=$matchPe4;
$BP3=$butp4;
$BC3=$butc4;
$dif3=$dif4;
$point3=$pntM4;

//La deuxieme equipe est quatrieme dans le classement 
$quatrieme=fgets($GroupA2);
$MG4=$matchGa2;
$MN4=$matchNu2;
$MP4=$matchPe2;
$BP4=$butp2;
$BC4=$butc2;
$dif4=$dif2;
$point4=$pntM2;
}

}else{
//Le quatrieme equip est le deuxieme du classement
$deuxieme=fgets($GroupA4);
$MG2=$matchGa4;
$MN2=$matchNu4;
$MP2=$matchPe4;
$BP2=$butp4;
$BC2=$butc4;
$dif2=$dif4;
$point2=$pntM4;

//La deuxieme est le troisieme du classement
if( ($pntM2>=$pntM3) || (($pntM2>=$pntM3) and ($dif2>$dif3))){
$troisieme=fgets($GroupA2);
$MG3=$matchGa2;
$MN3=$matchNu2;
$MP3=$matchPe2;
$BP3=$butp2;
$BC3=$butc2;
$dif3=$dif2;
$point3=$pntM2;

//Le troisieme est le quatrieme du classemet 
$quatrieme=fgets($GroupA3);
$MG4=$matchGa3;
$MN4=$matchNu3;
$MP4=$matchPe3;
$BP4=$butp3;
$BC4=$butc3;
$dif4=$dif3;
$point4=$pntM3;

}else{
//La troisieme est la troisieme du classement
$troisieme=fgets($GroupA3);
$MG3=$matchGa3;
$MN3=$matchNu3;
$MP3=$matchPe3;
$BP3=$butp3;
$BC3=$butc3;
$dif3=$dif3;
$point3=$pntM3;

// La deuxieme est le quatrieme du classement 
$quatrieme=fgets($GroupA2);
$MG4=$matchGa2;
$MN4=$matchNu2;
$MP4=$matchPe2;
$BP4=$butp2;
$BC4=$butc2;
$dif4=$dif2;
$point4=$pntM2;
}
}

// Le deuxieme equipe est le premier du classement 
}else if(($pntM2>$pntM1 and $pntM2>$pntM3 and $pntM2>$pntM4) || 
(($pntM2>=$pntM1 and $pntM2>=$pntM3 and $pntM2>=$pntM4) and 
($dif2>=$dif1 and $dif2>=$dif3 and $dif2>$dif4))){
$premier=fgets($GroupA2);
$MG=$matchGa2;
$MN=$matchNu2;
$MP=$matchPe2;
$BP=$butp2;
$BC=$butc2;
$dif=$dif2;
$point=$pntM2;

if(($pntM1>$pntM3 and $pntM1>$pntM4) ||
 (($pntM1>=$pntM3 and $pntM1>=$pntM4) && ($dif1>$dif3 and $dif1>$dif4))){
$deuxieme=fgets($GroupA1);
$MG2=$matchGA1;
$MN2=$matchNu1;
$MP2=$matchPe1;
$BP2=$butp1;
$BC2=$butc1;
$dif2=$dif1;
$point2=$pntM1;

if( ($pntM3>$pntM4) || (($pntM3>=$pntM4) && ($dif3>$dif4))){
$troisieme=fgets($GroupA3);
$MG3=$matchGa3;
$MN3=$matchNu3;
$MP3=$matchPe3;
$BP3=$butp3;
$BC3=$butc3;
$dif3=$dif3;
$point3=$pntM3;

$quatrieme=fgets($GroupA4);
$MG4=$matchGa4;
$MN4=$matchNu4;
$MP4=$matchPe4;
$BP4=$butp4;
$BC4=$butc4;
$dif4=$dif4;
$point4=$pntM4;

}else{
$troisieme=fgets($GroupA4);
$MG3=$matchGa4;
$MN3=$matchNu4;
$MP3=$matchPe4;
$BP3=$butp4;
$BC3=$butc4;
$dif3=$dif4;
$point3=$pntM4;

$quatrieme=fgets($GroupA3);
$MG4=$matchGa3;
$MN4=$matchNu3;
$MP4=$matchPe3;
$BP4=$butp3;
$BC4=$butc3;
$dif4=$dif3;
$point4=$pntM3;
}


}else if(($pntM3>$pntM1 and $pntM3>$pntM4) || 
(($pntM3>=$pntM1 and $pntM3>=$pntM4) && ($dif3>$dif1 and $dif3>$dif4))){
$deuxieme=fgets($GroupA3);
$MG2=$matchGa3;
$MN2=$matchNu3;
$MP2=$matchPe3;
$BP2=$butp3;
$BC2=$butc3;
$dif2=$dif3;
$point2=$pntM3;

if(($pntM1>$pntM4) || (($pntM1>=$pntM4) && ($dif1>$dif4))){
$troisieme=fgets($GroupA1);
$MG3=$matchGA1;
$MN3=$matchNu1;
$MP3=$matchPe1;
$BP3=$butp1;
$BC3=$butc1;
$dif3=$dif1;
$point3=$pntM1;

$quatrieme=fgets($GroupA4);
$MG4=$matchGa4;
$MN4=$matchNu4;
$MP4=$matchPe4;
$BP4=$butp4;
$BC4=$butc4;
$dif4=$dif4;
$point4=$pntM4;

}else{
$troisieme=fgets($GroupA4);
$MG3=$matchGa4;
$MN3=$matchNu4;
$MP3=$matchPe4;
$BP3=$butp4;
$BC3=$butc4;
$dif3=$dif4;
$point3=$pntM4;

$quatrieme=fgets($GroupA1);
$MG4=$matchGA1;
$MN4=$matchNu1;
$MP4=$matchPe1;
$BP4=$butp1;
$BC4=$butc1;
$dif4=$dif1;
$point4=$pntM1;
}

}else{
$deuxieme=fgets($GroupA4);
$MG2=$matchGa4;
$MN2=$matchNu4;
$MP2=$matchPe4;
$BP2=$butp4;
$BC2=$butc4;
$dif2=$dif4;
$point2=$pntM4;


if(($pntM1>$pntM3) || (($pntM1>=$pntM3) && ($dif1>=$dif3))){
$troisieme=fgets($GroupA1);
$MG3=$matchGA1;
$MN3=$matchNu1;
$MP3=$matchPe1;
$BP3=$butp1;
$BC3=$butc1;
$dif3=$dif1;
$point3=$pntM1;

$quatrieme=fgets($GroupA3);
$MG4=$matchGa3;
$MN4=$matchNu3;
$MP4=$matchPe3;
$BP4=$butp3;
$BC4=$butc3;
$dif4=$dif3;
$point4=$pntM3;

}else{
$troisieme=fgets($GroupA3);
$MG3=$matchGa3;
$MN3=$matchNu3;
$MP3=$matchPe3;
$BP3=$butp3;
$BC3=$butc3;
$dif3=$dif3;
$point3=$pntM3;

$quatrieme=fgets($GroupA1);
$MG4=$matchGA1;
$MN4=$matchNu1;
$MP4=$bmatchPe1;
$BP4=$butp1;
$BC4=$butc1;
$dif4=$dif1;
$point4=$pntM1;
}
}

// Le troisieme equipe est le premier du classment 
}else if(($pntM3>$pntM2 and $pntM3>$pntM1 and $pntM3>$pntM4) || 
(($pntM3>=$pntM2 and $pntM3>=$pntM1 and $pntM3>=$pntM4) && 
($dif3>$dif2 and $dif3>$dif1 and $dif3>$dif4))){
$premier=fgets($GroupA3);
$MG=$matchGa3;
$MN=$matchNu3;
$MP=$matchPe3;
$BP=$butp3;
$BC=$butc3;
$dif=$dif3;
$point=$pntM3;

if( ($pntM1>$pntM2 and $pntM1>$pntM4) || 
(($pntM1>=$pntM2 and $pntM1>=$pntM4) && ($dif1>$dif2 and $dif1>$dif4))){
$deuxieme=fgets($GroupA1);
$MG2=$matchGA1;
$MN2=$matchNu1;
$MP2=$matchPe1;
$BP2=$butp1;
$BC2=$butc1;
$dif2=$dif1;
$point2=$pntM1;

if(($pntM2>$pntM4) || (($pntM2>=$pntM4) && ($dif2>$dif4 ))){
$troisieme=fgets($GroupA2);
$MG3=$matchGa2;
$MN3=$matchNu2;
$MP3=$matchPe2;
$BP3=$butp2;
$BC3=$butc2;
$dif3=$dif2;
$point3=$pntM2;

$quatrieme=fgets($GroupA4);
$MG4=$matchGa4;
$MN4=$matchNu4;
$MP4=$matchPe4;
$BP4=$butp4;
$BC4=$butc4;
$dif4=$dif4;
$point4=$pntM4;

}else{
$troisieme=fgets($GroupA4);
$MG3=$matchGa4;
$MN3=$matchNu4;
$MP3=$matchPe4;
$BP3=$butp4;
$BC3=$butc4;
$dif3=$dif4;
$point3=$pntM4;

$quatrieme=fgets($GroupA2);
$MG4=$matchGa2;
$MN4=$matchNu2;
$MP4=$matchPe2;
$BP4=$butp2;
$BC4=$butc2;
$dif4=$dif2;
$point4=$pntM2;
}


}else if(($pntM2>$pntM1 and $pntM2>$pntM4) || 
(($pntM2>=$pntM1 and $pntM2>=$pntM4) && ($dif2>$dif1 and $dif2>$dif4))){
$deuxieme=fgets($GroupA2);
$MG2=$matchGa2;
$MN2=$matchNu2;
$MP2=$matchPe2;
$BP2=$butp2;
$BC2=$butc2;
$dif2=$dif2;
$point2=$pntM2;

if(($pntM1>$pntM4) || (($pntM1>=$pntM4) and ($dif1>$dif4))){
$troisieme=fgets($GroupA1);
$MG3=$matchGA1;
$MN3=$matchNu1;
$MP3=$matchPe1;
$BP3=$butp1;
$BC3=$butc1;
$dif3=$dif1;
$point3=$pntM1;

$quatrieme=fgets($GroupA4);
$MG4=$matchGa4;
$MN4=$matchNu4;
$MP4=$matchPe4;
$BP4=$butp4;
$BC4=$butc4;
$dif4=$dif4;
$point4=$pntM4;

}else{
$troisieme=fgets($GroupA4);
$MG3=$matchGa4;
$MN3=$matchNu4;
$MP3=$matchPe4;
$BP3=$butp4;
$BC3=$butc4;
$dif3=$dif4;
$point3=$pntM4;

$quatrieme=fgets($GroupA1);
$MG4=$matchGA1;
$MN4=$matchNu1;
$MP4=$matchPe1;
$BP4=$butp1;
$BC4=$butc1;
$dif4=$dif1;
$point4=$pntM1;
}



}else{
$deuxieme=fgets($GroupA4);
$MG2=$matchGa4;
$MN2=$matchNu4;
$MP2=$matchPe4;
$BP2=$butp4;
$BC2=$butc4;
$dif2=$dif4;
$point2=$pntM4;


if( ($pntM1>$pntM2) || (($pntM1>=$pntM2) && ($dif1>$dif2))){
$troisieme=fgets($GroupA1);
$MG3=$matchGA1;
$MN3=$matchNu1;
$MP3=$matchPe1;
$BP3=$butp1;
$BC3=$butc1;
$dif3=$dif1;
$point3=$pntM1;

$quatrieme=fgets($GroupA2);
$MG4=$matchGa2;
$MN4=$matchNu2;
$MP4=$matchPe2;
$BP4=$butp2;
$BC4=$butc2;
$dif4=$dif2;
$point4=$pntM2;

}else{
$troisieme=fgets($GroupA2);
$MG3=$matchGa2;
$MN3=$matchNu2;
$MP3=$matchPe2;
$BP3=$butp2;
$BC3=$butc2;
$dif3=$dif2;
$point3=$pntM2;

$quatrieme=fgets($GroupA1);
$MG4=$matchGA1;
$MN4=$matchNu1;
$MP4=$matchPe1;
$BP4=$butp1;
$BC4=$butc1;
$dif4=$dif1;
$point4=$pntM1;
}
}

}else{

// Le quatrieme equipe est le premier du classement
$premier=fgets($GroupA4);
$MG=$matchGa4;
$MN=$matchNu4;
$MP=$matchPe4;
$BP=$butp4;
$BC=$butc4;
$dif=$dif4;
$point=$pntM4;

if( ($pntM1>$pntM2 and $pntM1>$pntM3) || 
(($pntM1>=$pntM2 and $pntM1>=$pntM3) && ($dif1>$dif2 and $dif1>$dif3))){
$deuxieme=fgets($GroupA1);
$MG2=$matchGA1;
$MN2=$matchNu1;
$MP2=$matchPe1;
$BP2=$butp1;
$BC2=$butc1;
$dif2=$dif1;
$point2=$pntM1;

if( ($pntM2>$pntM3) || (($pntM2>=$pntM3) && ($dif2>$dif3))){
$troisieme=fgets($GroupA2);
$MG3=$matchGa2;
$MN3=$matchNu2;
$MP3=$matchPe2;
$BP3=$butp2;
$BC3=$butc2;
$dif3=$dif2;
$point3=$pntM2;

$quatrieme=fgets($GroupA3);

$MG4=$matchGa3;
$MN4=$matchNu3;
$MP4=$matchPe3;
$BP4=$butp3;
$BC4=$butc3;
$dif4=$dif3;
$point4=$pntM3;

}else{
$troisieme=fgets($GroupA3);

$MG3=$matchGa3;
$MN3=$matchNu3;
$MP3=$matchPe3;
$BP3=$butp3;
$BC3=$butc3;
$dif3=$dif3;
$point3=$pntM3;

$quatrieme=fgets($GroupA2);
$MG4=$matchGa2;
$MN4=$matchNu2;
$MP4=$matchPe2;
$BP4=$butp2;
$BC4=$butc2;
$dif4=$dif2;
$point4=$pntM2;
}


}else if( ( $pntM2>$pntM3 and $pntM2>$pntM1) || 
(($pntM2>=$pntM3 and $pntM2>=$pntM1) && ($dif2>$dif3 and $dif2>$dif1))){
$deuxieme=fgets($GroupA2);
$MG2=$matchGa2;
$MN2=$matchNu2;
$MP2=$matchPe2;
$BP2=$butp2;
$BC2=$butc2;
$dif2=$dif2;
$point2=$pntM2;

if(($pntM1>=$pntM3) || (($pntM1>=$pntM3) && ($dif1>$dif3))){
$troisieme=fgets($GroupA1);
$MG3=$matchGA1;
$MN3=$matchNu1;
$MP3=$matchPe1;
$BP3=$butp1;
$BC3=$butc1;
$dif3=$dif1;
$point3=$pntM1;

$quatrieme=fgets($GroupA3);
$MG4=$matchGa3;
$MN4=$matchNu3;
$MP4=$matchPe3;
$BP4=$butp3;
$BC4=$butc3;
$dif4=$dif3;
$point4=$pntM3;

}else{
$troisieme=fgets($GroupA3);
$MG3=$matchGa3;
$MN3=$matchNu3;
$MP3=$matchPe3;
$BP3=$butp3;
$BC3=$butc3;
$dif3=$dif3;
$point3=$pntM3;

$quatrieme=fgets($GroupA1);
$MG4=$matchGA1;
$MN4=$matchNu1;
$MP4=$matchPe1;
$BP4=$butp1;
$BC4=$butc1;
$dif4=$dif1;
$point4=$pntM1;
}

}else{
$deuxieme=fgets($GroupA3);
$MG2=$matchGa3;
$MN2=$matchNu3;
$MP2=$matchPe3;
$BP2=$butp3;
$BC2=$butc3;
$dif2=$dif3;
$point2=$pntM3;


if(($pntM1>$pntM2) || (($pntM1>=$pntM2) && ($dif1>$dif2))){
$troisieme=fgets($GroupA1);
$MG3=$matchGA1;
$MN3=$matchNu1;
$MP3=$matchPe1;
$BP3=$butp1;
$BC3=$butc1;
$dif3=$dif1;
$point3=$pntM1;

$quatrieme=fgets($GroupA2);
$MG4=$matchGa2;
$MN4=$matchNu2;
$MP4=$matchPe2;
$BP4=$butp2;
$BC4=$butc2;
$dif4=$dif2;
$point4=$pntM2;

}else{
$troisieme=fgets($GroupA2);
$MG3=$matchGa2;
$MN3=$matchNu2;
$MP3=$matchPe2;
$BP3=$butp2;
$BC3=$butc2;
$dif3=$dif2;
$point3=$pntM2;

$quatrieme=fgets($GroupA1);
$MG4=$matchGA1;
$MN4=$matchNu1;
$MP4=$bmatchPe1;
$BP4=$butp1;
$BC4=$butc1;
$dif4=$dif1;
$point4=$pntM1;
}
}
}   

// Partie fichier
$PremierGroupeA=fopen('fichier/premiergroupeA.txt',"w");
fwrite($PremierGroupeA,$premier);
fclose($PremierGroupeA);

$deuxiemeGroupeA=fopen('fichier/deuxiemeGroupeA.txt',"w");
fwrite($deuxiemeGroupeA,$deuxieme);
fclose($deuxiemeGroupeA);

fclose($GroupA1);
fclose($GroupA2);
fclose($GroupA3);
fclose($GroupA4);


//Condition pour le classement du Groupe B
$GroupB1=fopen("fichier/GroupeB1.txt","r");
$GroupB2=fopen("fichier/GroupeB2.txt","r");
$GroupB3=fopen("fichier/GroupeB3.txt","r");
$GroupB4=fopen("fichier/GroupeB4.txt","r");
//Condition pour gerer le classement pour le groupe A
//Le premierM equipe est  le premierM du classement  
if( ($bpntM1>$bpntM2 and $bpntM1>$bpntM3 and $bpntM1>$bpntM4) || 
(($bpntM1>=$bpntM2 and $bpntM1>=$bpntM3 and $bpntM1>=$bpntM4) && 
($dif1b>=$dif2b and $dif1b>=$dif3b and $dif1b>=$dif4b))){
$premierM=fgets($GroupB1);
$MGb=$bmatchGa1;
$MNb=$bmatchNu1;
$MPb=$bmatchPe1;
$BPb=$bbutp1;
$BCb=$bbutc1; 
$difb=$dif1b;
$pointb=$bpntM1;

//Le deuxiemeM equipe est  le deuxiemeM du classement 
if( ($bpntM2>$bpntM3 and $bpntM2>$bpntM4) || 
(($bpntM2>=$bpntM3 and $bpntM2>=$bpntM4) && ($dif2b>=$dif3b and $dif2b>=$dif4b))){
$deuxiemeM=fgets($GroupB2);
$MG2b=$bmatchGa2;
$MN2b=$bmatchNu2;
$MP2b=$bmatchPe2;
$BP2b=$bbutp2;
$BC2b=$bbutc2;
$dif2b=$dif2b;
$point2b=$bpntM2;

//Le troisiemeM equipe est  le troisiemeM du classement
if(($bpntM3>$bpntM4) || (($bpntM3>=$bpntM4) && ($dif3b>=$dif4b))){
$troisiemeM=fgets($GroupB3);
$MG3b=$bmatchGa3;
$MN3b=$bmatchNu3;
$MP3b=$bmatchPe3;
$BP3b=$bbutp3;
$BC3b=$bbutc3;
$dif3b=$dif3b;
$point3b=$bpntM3;

//Le quatriemeM equipe est le quatriemeM du classement
$quatriemeM=fgets($GroupB4);
$MG4b=$bmatchGa4;
$MN4b=$bmatchNu4;
$MP4b=$bmatchPe4;
$BP4b=$bbutp4;
$BC4b=$bbutc4;
$dif4b=$dif4b;
$point4b=$bpntM4;

//Le quatriemeM equipe est le troisiemeM du classement
}else{
$troisiemeM=fgets($GroupB4);
$MG3b=$bmatchGa4;
$MN3b=$bmatchNu4;
$MP3b=$bmatchPe4;
$BP3b=$bbutp4;
$BC3b=$bbutc4;
$dif3b=$dif4b;
$point3b=$bpntM4;

//Le troisiemeM equipe est le quatriemeM du classement
$quatriemeM=fgets($GroupB3);
$MG4b=$bmatchGa3;
$MN4b=$bmatchNu3;
$MP4b=$bmatchPe3;
$BP4b=$bbutp3;
$BC4b=$bbutc3;
$dif4b=$dif3b;
$point4b=$bpntM3;
}

//La troisiemeM equipe est le deuxiemeM du classement
}else if(($bpntM3>$bpntM2 and $bpntM3>$bpntM4) || 
(($bpntM3>=$bpntM2 and $bpntM3>=$bpntM4) && ($dif3b>$dif2b and $dif3b>$dif4b))){
$deuxiemeM=fgets($GroupB3);
$MG2b=$bmatchGa3;
$MN2b=$bmatchNu3;
$MP2b=$bmatchPe3;
$BP2b=$bbutp3;
$BC2b=$bbutc3;
$dif2b=$dif3b;
$point2b=$bpntM3;

//La deuxiemeM equipe est est troisiemeM dans le classement
if(($bpntM2>$bpntM4) || (($bpntM2>=$bpntM4) && ($dif2b>$dif4b))){
$troisiemeM=fgets($GroupB2);
$MG3b=$bmatchGa2;
$MN3b=$bmatchNu2;
$MP3b=$bmatchPe2;
$BP3b=$bbutp2;
$BC3b=$bbutc2;
$dif3b=$dif2b;
$point3b=$bpntM2;

//La quatriemeM equipe est quatriemeM dans le classement                
$quatriemeM=fgets($GroupB4);
$MG4b=$bmatchGa4;
$MN4b=$bmatchNu4;
$MP4b=$bmatchPe4;
$BP4b=$bbutp4;
$BC4b=$bbutc4;
$dif4b=$dif4b;
$point4b=$bpntM4;

}else{
//La quatrieme equipe est troisieme dans le classement
$troisiemeM=fgets($GroupB4);
$MG3b=$bmatchGa4;
$MN3b=$bmatchNu4;
$MP3b=$bmatchPe4;
$BP3b=$bbutp4;
$BC3b=$bbutc4;
$dif3b=$dif4b;
$point3b=$bpntM4;

//La deuxieme equipe est quatrieme dans le classement 
$quatriemeM=fgets($GroupB2);
$MG4b=$bmatchGa2;
$MN4b=$bmatchNu2;
$MP4b=$bmatchPe2;
$BP4b=$bbutp2;
$BC4b=$bbutc2;
$dif4b=$dif2b;
$point4b=$bpntM2;
}

}else{
//Le quatrieme equipe est le deuxieme du classement
$deuxiemeM=fgets($GroupB4);
$MG2b=$bmatchGa4;
$MN2b=$bmatchNu4;
$MP2b=$bmatchPe4;
$BP2b=$bbutp4;
$BC2b=$bbutc4;
$dif2b=$dif4b;
$point2b=$bpntM4;

//La deuxieme est le troisieme du classement
if( ($bpntM2>=$bpntM3) || (($bpntM2>=$bpntM3) and ($dif2b>$dif3b))){
$troisiemeM=fgets($GroupB2);
$MG3b=$bmatchGa2;
$MN3b=$bmatchNu2;
$MP3b=$bmatchPe2;
$BP3b=$bbutp2;
$BC3b=$bbutc2;
$dif3b=$dif2b;
$point3b=$bpntM2;

//Le troisieme est le quatrieme du classemet 
$quatriemeM=fgets($GroupB3);
$MG4b=$bmatchGa3;
$MN4b=$bmatchNu3;
$MP4b=$bmatchPe3;
$BP4b=$bbutp3;
$BC4b=$bbutc3;
$dif4b=$dif3b;
$point4b=$bpntM3;

}else{

//La troisieme est la troisieme du classement
$troisiemeM=fgets($GroupB3);
$MG3b=$bmatchGa3;
$MN3b=$bmatchNu3;
$MP3b=$bmatchPe3;
$BP3b=$bbutp3;
$BC3b=$bbutc3;
$dif3b=$dif3b;
$point3b=$bpntM3;

//La deuxieme est le quatrieme du classement 
$quatriemeM=fgets($GroupB2);
$MG4b=$bmatchGa2;
$MN4b=$bmatchNu2;
$MP4b=$bmatchPe2;
$BP4b=$bbutp2;
$BC4b=$bbutc2;
$dif4b=$dif2b;
$point4b=$bpntM2;
}
}

//Le deuxieme equipe est le premier du classement 
}else if(($bpntM2>$bpntM1 and $bpntM2>$bpntM3 and $bpntM2>$bpntM4) 
|| (($bpntM2>=$bpntM1 and $bpntM2>=$bpntM3 and $bpntM2>=$bpntM4) and
 ($dif2b>=$dif1b and $dif2b>=$dif3b and $dif2b>$dif4b))){
$premierM=fgets($GroupB2);
$MGb=$bmatchGa2;
$MNb=$bmatchNu2;
$MPb=$bmatchPe2;
$BPb=$bbutp2;
$BCb=$bbutc2;
$difb=$dif2b;
$pointb=$bpntM2;

if(($bpntM1>$bpntM3 and $bpntM1>$bpntM4) || 
(($bpntM1>=$bpntM3 and $bpntM1>=$bpntM4) && ($dif1b>$dif3b and $dif1b>$dif4b))){
$deuxiemeM=fgets($GroupB1);
$MG2b=$bmatchGa1;
$MN2b=$bmatchNu1;
$MP2b=$bmatchPe1;
$BP2b=$bbutp1;
$BC2b=$bbutc1;
$dif2b=$dif1b;
$point2b=$bpntM1;

if( ($bpntM3>$bpntM4) || (($bpntM3>=$bpntM4) && ($dif3b>$dif4b))){
$troisiemeM=fgets($GroupB3);
$MG3b=$bmatchGa3;
$MN3b=$bmatchNu3;
$MP3b=$bmatchPe3;
$BP3b=$bbutp3;
$BC3b=$bbutc3;
$dif3b=$dif3b;
$point3b=$bpntM3;

$quatriemeM=fgets($GroupB4);
$MG4b=$bmatchGa4;
$MN4b=$bmatchNu4;
$MP4b=$bmatchPe4;
$BP4b=$bbutp4;
$BC4b=$bbutc4;
$dif4b=$dif4b;
$point4b=$bpntM4;

}else{
$troisiemeM=fgets($GroupB4);
$MG3b=$bmatchGa4;
$MN3b=$bmatchNu4;
$MP3b=$bmatchPe4;
$BP3b=$bbutp4;
$BC3b=$bbutc4;
$dif3b=$dif4b;
$point3b=$bpntM4;

$quatriemeM=fgets($GroupB3);
$MG4b=$bmatchGa3;
$MN4b=$bmatchNu3;
$MP4b=$bmatchPe3;
$BP4b=$bbutp3;
$BC4b=$bbutc3;
$dif4b=$dif3b;
$point4b=$bpntM3;
}


}else if(($bpntM3>$bpntM1 and $bpntM3>$bpntM4) || 
(($bpntM3>=$bpntM1 and $bpntM3>=$bpntM4) && ($dif3b>$dif1b and $dif3b>$dif4b))){
$deuxiemeM=fgets($GroupB3);
$MG2b=$bmatchGa3;
$MN2b=$bmatchNu3;
$MP2b=$bmatchPe3;
$BP2b=$bbutp3;
$BC2b=$bbutc3;
$dif2b=$dif3b;
$point2b=$bpntM3;

if(($bpntM1>$bpntM4) || (($bpntM1>=$bpntM4) && ($dif1b>$dif4b))){
$troisiemeM=fgets($GroupB1);
$MG3b=$bmatchGa1;
$MN3b=$bmatchNu1;
$MP3b=$bmatchPe1;
$BP3b=$bbutp1;
$BC3b=$bbutc1;
$dif3b=$dif1b;
$point3b=$bpntM1;

$quatriemeM=fgets($GroupB4);
$MG4b=$bmatchGa4;
$MN4b=$bmatchNu4;
$MP4b=$bmatchPe4;
$BP4b=$bbutp4;
$BC4b=$bbutc4;
$dif4b=$dif4b;
$point4b=$bpntM4;

}else{
$troisiemeM=fgets($GroupB4);
$MG3b=$bmatchGa4;
$MN3b=$bmatchNu4;
$MP3b=$bmatchPe4;
$BP3b=$bbutp4;
$BC3b=$bbutc4;
$dif3b=$dif4b;
$point3b=$bpntM4;

$quatriemeM=fgets($GroupB1);
$MG4b=$bmatchGa1;
$MN4b=$bmatchNu1;
$MP4b=$bmatchPe1;
$BP4b=$bbutp1;
$BC4b=$bbutc1;
$dif4b=$dif1b;
$point4b=$bpntM1;
}

}else{
$deuxiemeM=fgets($GroupB4);
$MG2b=$bmatchGa4;
$MN2b=$bmatchNu4;
$MP2b=$bmatchPe4;
$BP2b=$bbutp4;
$BC2b=$bbutc4;
$dif2b=$dif4b;
$point2b=$bpntM4;


if(($bpntM1>$bpntM3) || (($bpntM1>=$bpntM3) && ($dif1b>=$dif3b))){
$troisiemeM=fgets($GroupB1);
$MG3b=$bmatchGa1;
$MN3b=$bmatchNu1;
$MP3b=$bmatchPe1;
$BP3b=$bbutp1;
$BC3b=$bbutc1;
$dif3b=$dif1b;
$point3b=$bpntM1;

$quatriemeM=fgets($GroupB3);
$MG4b=$bmatchGa3;
$MN4b=$bmatchNu3;
$MP4b=$bmatchPe3;
$BP4b=$bbutp3;
$BC4b=$bbutc3;
$dif4b=$dif3b;
$point4b=$bpntM3;

}else{
$troisiemeM=fgets($GroupB3);
$MG3b=$bmatchGa3;
$MN3b=$bmatchNu3;
$MP3b=$bmatchPe3;
$BP3b=$bbutp3;
$BC3b=$bbutc3;
$dif3b=$dif3b;
$point3b=$bpntM3;

$quatriemeM=fgets($GroupB1);
$MG4b=$bmatchGa1;
$MN4b=$bmatchNu1;
$MP4b=$bmatchPe1;
$BP4b=$bbutp1;
$BC4b=$bbutc1;
$dif4b=$dif1b;
$point4b=$bpntM1;
}
}

//Le troisiemeM equipe est le premierM du classment 

}else if(($bpntM3>$bpntM2 and $bpntM3>$bpntM1 and $bpntM3>$bpntM4) 
|| (($bpntM3>=$bpntM2 and $bpntM3>=$bpntM1 and $bpntM3>=$bpntM4) && 
($dif3b>$dif2b and $dif3b>$dif1b and $dif3b>$dif4b))){
$premierM=fgets($GroupB3);
$MGb=$bmatchGa3;
$MNb=$bmatchNu3;
$MPb=$bmatchPe3;
$BPb=$bbutp3;
$BCb=$bbutc3;
$difb=$dif3b;
$pointb=$bpntM3;

if( ($bpntM1>$bpntM2 and $bpntM1>$bpntM4) || 
(($bpntM1>=$bpntM2 and $bpntM1>=$bpntM4) && ($dif1b>$dif2b and $dif1b>$dif4b))){
$deuxiemeM=fgets($GroupB1);
$MG2b=$bmatchGa1;
$MN2b=$bmatchNu1;
$MP2b=$bmatchPe1;
$BP2b=$bbutp1;
$BC2b=$bbutc1;
$dif2b=$dif1b;
$point2b=$bpntM1;

if(($bpntM2>$bpntM4) || (($bpntM2>=$bpntM4) && ($dif2b>$dif4b ))){
$troisiemeM=fgets($GroupB2);
$MG3b=$bmatchGa2;
$MN3b=$bmatchNu2;
$MP3b=$bmatchPe2;
$BP3b=$bbutp2;
$BC3b=$bbutc2;
$dif3b=$dif2b;
$point3b=$bpntM2;

$quatriemeM=fgets($GroupB4);
$MG4b=$bmatchGa4;
$MN4b=$bmatchNu4;
$MP4b=$bmatchPe4;
$BP4b=$bbutp4;
$BC4b=$bbutc4;
$dif4b=$dif4b;
$point4b=$bpntM4;

}else{
$troisiemeM=fgets($GroupB4);
$MG3b=$bmatchGa4;
$MN3b=$bmatchNu4;
$MP3b=$bmatchPe4;
$BP3b=$bbutp4;
$BC3b=$bbutc4;
$dif3b=$dif4b;
$point3b=$bpntM4;

$quatriemeM=fgets($GroupB2);
$MG4b=$bmatchGa2;
$MN4b=$bmatchNu2;
$MP4b=$bmatchPe2;
$BP4b=$bbutp2;
$BC4b=$bbutc2;
$dif4b=$dif2b;
$point4b=$bpntM2;
}


}else if(($bpntM2>$bpntM1 and $bpntM2>$bpntM4) || 
(($bpntM2>=$bpntM1 and $bpntM2>=$bpntM4) && ($dif2b>$dif1b and $dif2b>$dif4b))){
$deuxiemeM=fgets($GroupB2);
$MG2b=$bmatchGa2;
$MN2b=$bmatchNu2;
$MP2b=$bmatchPe2;
$BP2b=$bbutp2;
$BC2b=$bbutc2;
$dif2b=$dif2b;
$point2b=$bpntM2;

if(($bpntM1>$bpntM4) || (($bpntM1>=$bpntM4) and ($dif1b>$dif4b))){
$troisiemeM=fgets($GroupB1);
$MG3b=$bmatchGa1;
$MN3b=$bmatchNu1;
$MP3b=$bmatchPe1;
$BP3b=$bbutp1;
$BC3b=$bbutc1;
$dif3b=$dif1b;
$point3b=$bpntM1;

$quatriemeM=fgets($GroupB4);
$MG4b=$bmatchGa4;
$MN4b=$bmatchNu4;
$MP4b=$bmatchPe4;
$BP4b=$bbutp4;
$BC4b=$bbutc4;
$dif4b=$dif4b;
$point4b=$bpntM4;

}else{
$troisiemeM=fgets($GroupB4);
$MG3b=$bmatchGa4;
$MN3b=$bmatchNu4;
$MP3b=$bmatchPe4;
$BP3b=$bbutp4;
$BC3b=$bbutc4;
$dif3b=$dif4b;
$point3b=$bpntM4;

$quatriemeM=fgets($GroupB1);
$MG4b=$bmatchGa1;
$MN4b=$bmatchNu1;
$MP4b=$bmatchPe1;
$BP4b=$bbutp1;
$BC4b=$bbutc1;
$dif4b=$dif1b;
$point4b=$bpntM1;
}



}else{
$deuxiemeM=fgets($GroupB4);
$MG2b=$bmatchGa4;
$MN2b=$bmatchNu4;
$MP2b=$bmatchPe4;
$BP2b=$bbutp4;
$BC2b=$bbutc4;
$dif2b=$dif4b;
$point2b=$bpntM4;


if( ($bpntM1>$bpntM2) || (($bpntM1>=$bpntM2) && ($dif1b>$dif2b))){
$troisiemeM=fgets($GroupB1);
$MG3b=$bmatchGa1;
$MN3b=$bmatchNu1;
$MP3b=$bmatchPe1;
$BP3b=$bbutp1;
$BC3b=$bbutc1;
$dif3b=$dif1b;
$point3b=$bpntM1;

$quatriemeM=fgets($GroupB2);
$MG4b=$bmatchGa2;
$MN4b=$bmatchNu2;
$MP4b=$bmatchPe2;
$BP4b=$bbutp2;
$BC4b=$bbutc2;
$dif4b=$dif2b;
$point4b=$bpntM2;

}else{
$troisiemeM=fgets($GroupB2);
$MG3b=$bmatchGa2;
$MN3b=$bmatchNu2;
$MP3b=$bmatchPe2;
$BP3b=$bbutp2;
$BC3b=$bbutc2;
$dif3b=$dif2b;
$point3b=$bpntM2;

$quatriemeM=fgets($GroupB1);
$MG4b=$bmatchGa1;
$MN4b=$bmatchNu1;
$MP4b=$bmatchPe1;
$BP4b=$bbutp1;
$BC4b=$bbutc1;
$dif4b=$dif1b;
$point4b=$bpntM1;
}
}

}else{

//Le quatrieme equipe est le premier du classement

$premierM=fgets($GroupB4);
$MGb=$bmatchGa4;
$MNb=$bmatchNu4;
$MPb=$bmatchPe4;
$BPb=$bbutp4;
$BCb=$bbutc4;
$difb=$dif4b;
$pointb=$bpntM4;

if( ($bpntM1>$bpntM2 and $bpntM1>$bpntM3) || 
(($bpntM1>=$bpntM2 and $bpntM1>=$bpntM3) && ($dif1b>$dif2b and $dif1b>$dif3b))){
$deuxiemeM=fgets($GroupB1);
$MG2b=$bmatchGa1;
$MN2b=$bmatchNu1;
$MP2b=$bmatchPe1;
$BP2b=$bbutp1;
$BC2b=$bbutc1;
$dif2b=$dif1b;
$point2b=$bpntM1;

if( ($bpntM2>$bpntM3) || (($bpntM2>=$bpntM3) && ($dif2b>$dif3b))){
$troisiemeM=fgets($GroupB2);
$MG3b=$bmatchGa2;
$MN3b=$bmatchNu2;
$MP3b=$bmatchPe2;
$BP3b=$bbutp2;
$BC3b=$bbutc2;
$dif3b=$dif2b;
$point3b=$bpntM2;

$quatriemeM=fgets($GroupB3);

$MG4b=$bmatchGa3;
$MN4b=$bmatchNu3;
$MP4b=$bmatchPe3;
$BP4b=$bbutp3;
$BC4b=$bbutc3;
$dif4b=$dif3b;
$point4b=$bpntM3;

}else{
$troisiemeM=fgets($GroupB3);

$MG3b=$bmatchGa3;
$MN3b=$bmatchNu3;
$MP3b=$bmatchPe3;
$BP3b=$bbutp3;
$BC3b=$bbutc3;
$dif3b=$dif3b;
$point3b=$bpntM3;

$quatriemeM=fgets($GroupB2);
$MG4b=$bmatchGa2;
$MN4b=$bmatchNu2;
$MP4b=$bmatchPe2;
$BP4b=$bbutp2;
$BC4b=$bbutc2;
$dif4b=$dif2b;
$point4b=$bpntM2;
}


}else if( ( $bpntM2>$bpntM3 and $bpntM2>$bpntM1) || 
(($bpntM2>=$bpntM3 and $bpntM2>=$bpntM1) && ($dif2b>=$dif3b and $dif2b>=$dif1b))){
$deuxiemeM=fgets($GroupB2);
$MG2b=$bmatchGa2;
$MN2b=$bmatchNu2;
$MP2b=$bmatchPe2;
$BP2b=$bbutp2;
$BC2b=$bbutc2;
$dif2b=$dif2b;
$point2b=$bpntM2;

if(($bpntM1>=$bpntM3) || (($bpntM1>=$bpntM3) && ($dif1b>$dif3b))){
$troisiemeM=fgets($GroupB1);
$MG3b=$bmatchGa1;
$MN3b=$bmatchNu1;
$MP3b=$bmatchPe1;
$BP3b=$bbutp1;
$BC3b=$bbutc1;
$dif3b=$dif1b;
$point3b=$bpntM1;

$quatriemeM=fgets($GroupB3);
$MG4b=$bmatchGa3;
$MN4b=$bmatchNu3;
$MP4b=$bmatchPe3;
$BP4b=$bbutp3;
$BC4b=$bbutc3;
$dif4b=$dif3b;
$point4b=$bpntM3;

}else{
$troisiemeM=fgets($GroupB3);
$MG3b=$bmatchGa3;
$MN3b=$bmatchNu3;
$MP3b=$bmatchPe3;
$BP3b=$bbutp3;
$BC3b=$bbutc3;
$dif3b=$dif3b;
$point3b=$bpntM3;

$quatriemeM=fgets($GroupB1);
$MG4b=$bmatchGa1;
$MN4b=$bmatchNu1;
$MP4b=$bmatchPe1;
$BP4b=$bbutp1;
$BC4b=$bbutc1;
$dif4b=$dif1b;
$point4b=$bpntM1;
}

}else{
$deuxiemeM=fgets($GroupB3);
$MG2b=$bmatchGa3;
$MN2b=$bmatchNu3;
$MP2b=$bmatchPe3;
$BP2b=$bbutp3;
$BC2b=$bbutc3;
$dif2b=$dif3b;
$point2b=$bpntM3;


if(($bpntM1>$bpntM2) || (($bpntM1>=$bpntM2) && ($dif1b>$dif2b))){
$troisiemeM=fgets($GroupB1);
$MG3b=$bmatchGa1;
$MN3b=$bmatchNu1;
$MP3b=$bmatchPe1;
$BP3b=$bbutp1;
$BC3b=$bbutc1;
$dif3b=$dif1b;
$point3b=$bpntM1;

$quatriemeM=fgets($GroupB2);
$MG4b=$bmatchGa2;
$MN4b=$bmatchNu2;
$MP4b=$bmatchPe2;
$BP4b=$bbutp2;
$BC4b=$bbutc2;
$dif4b=$dif2b;
$point4b=$bpntM2;

}else{
$troisiemeM=fgets($GroupB2);
$MG3b=$bmatchGa2;
$MN3b=$bmatchNu2;
$MP3b=$bmatchPe2;
$BP3b=$bbutp2;
$BC3b=$bbutc2;
$dif3b=$dif2b;
$point3b=$bpntM2;

$quatriemeM=fgets($GroupB1);
$MG4b=$bmatchGa1;
$MN4b=$bmatchNu1;
$MP4b=$bmatchPe1;
$BP4b=$bbutp1;
$BC4b=$bbutc1;
$dif4b=$dif1b;
$point4b=$bpntM1;
}
}
}  

// Partie fichier
$PremierGroupeB=fopen('fichier/premiergroupeB.txt',"w");
fwrite($PremierGroupeB,$premierM);
fclose($PremierGroupeB);

$deuxiemeGroupeB=fopen('fichier/deuxiemeGroupeB.txt',"w");
fwrite($deuxiemeGroupeB,$deuxiemeM);
fclose($deuxiemeGroupeB);

fclose($GroupB1);
fclose($GroupB2);
fclose($GroupB3);
fclose($GroupB4);


}
?>

