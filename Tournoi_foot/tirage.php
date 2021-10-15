<!-- Tirage des equipes -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirage et Confrontation</title>
</head>
<body>
<center > <?php 
    
    $equipe=
            [
            '<img src="./imagetournoi/brazil.png" width="15px"> Bresil',
             '<img src="./imagetournoi/argentina.svg"width="15px"> Argentine',

             '<img src="./imagetournoi/france.svg" width="15px"> France',
             '<img src="./imagetournoi/italy.svg" width="15px"> Italie',

             '<img src="./imagetournoi/spain.svg"width="15px"> Espagne',
             '<img src="./imagetournoi/germany.svg"width="15px"> Allemagne',

             '<img src="./imagetournoi/portugal.svg" width="15px"> Portugal',
             '<img src="./imagetournoi/haiti.svg" width="15px"> Haiti </div>'
            ];
   
    $equipex1=rand(0,1);
    $equipey1=rand(0,1);

    $equipex2=rand(2,3);
    $equipey2=rand(2,3);

    $equipex3=rand(4,5);
    $equipey3=rand(4,5);

    $equipex4=rand(6,7);  
    $equipey4=rand(6,7);


    while($equipex1==$equipey1){
         $equipex1=rand(0,1);
    }
    while($equipex2==$equipey2){
        $equipex2=rand(2,3);
    }
     while($equipex3==$equipey3){
       $equipex3=rand(4,5);
    }
     while($equipex4==$equipey4){
       $equipex4=rand(6,7);
     }   
?>   


<?php 
    if (isset($_POST['effectuer'])) {
?>
   <?php } ?> <br><br>
<table border="1px solid black" class="table">
   <thead >
            <th> Place </th>
            <th> GroupeA</th>
            <th>GroupeB</th>  
   </thead>
    <tbody>
        <tr>
          <td>  1e </td>
            <td> <?php  echo $equipe[$equipex1];?></td>
            <td> <?php  echo $equipe[$equipey1];?></td>
        </tr>
        <tr>
            <td>2e </td>
            <td> <?php  echo $equipe[$equipex2];?></td>
            <td> <?php  echo $equipe[$equipey2];?></td>
        </tr>
        <tr>
            <td> 3e </td>
            <td> <?php  echo $equipe[$equipex3];?></td>
            <td> <?php  echo $equipe[$equipey3];?></td>
        </tr>
        <tr>
            <td> 4e </td>
            <td> <?php  echo $equipe[$equipex4];?></td>
            <td> <?php  echo $equipe[$equipey4];?></td>
        </tr>
    </tbody>
</table><br><br><br></center>

<hr> 

<center>


<table border="1px solid black" class="table">
<form  method="Get" action="classement.php">
  <thead >
            <th> Groupe A</th>
            <th>Equipe -vs- Equipe </th>
            <th>Score</th>
            
   </thead>
   
    <tbody>

       <tr>
       <td> Match 1 </td>
            <td><?php echo "$equipe[$equipex1] -VS- $equipe[$equipex2] ";?> </td>
            <td><input type="number" name="score1" min="0" max="15" value=""> --
                       <input type="number"name="score2" min="0"max="15"> 
                </td> 
            
        </tr>

        <tr>
            <td> Match 2 </td>
            <td><?php echo" $equipe[$equipex4] -VS- $equipe[$equipex3]"; ?> </td>
            <td> <input type="number" name="score3" min="0" max="15" > --
                       <input type="number"name="score4"min="0"max="15"> 
                 </td>
        </tr>

        <tr>
            <td> Match 3 </td>
            <td><?php echo" $equipe[$equipex1] -VS- $equipe[$equipex3]";?> </td>
            <td> <input type="number" name="score5" min="0" max="15"> --
                       <input type="number"name="score6"min="0"max="15"> 
                 </td>
        </tr>

        <tr>
             <td> Match  4 </td>
            <td><?php echo" $equipe[$equipex2] -VS- $equipe[$equipex4]";?> </td>
            <td> <input type="number" name="score7" min="0" max="15"> --
                       <input type="number"name="score8"min="0"max="15"> 
                </td>
        </tr>

        <tr>
            <td> Match  5 </td>
            <td><?php echo" $equipe[$equipex1] -VS- $equipe[$equipex4]";?> </td>
            <td><input type="number" name="score9" min="0" max="15"> --
                       <input type="number"name="score10"min="0"max="15"> 
                 </td>
        </tr>

        <tr>
            <td> Match  6 </td>
            <td><?php echo" $equipe[$equipex2] -VS- $equipe[$equipex3]";?> </td>
            <td> <form method="POST"> <input type="number" name="score11" min="0" max="15"> --
                       <input type="number"name="score12"min="0"max="15"> 
                 </td>
        </tr>

    </tbody>
    
</table><br>


<!-- affichage pour le Groupe B -->

<table border="1px solid black" class="table">
  <thead >
            <th> Groupe B</th>
            <th>Equipe -vs- Equipe</th>
            <th>Score</th>
            
   </thead>
    <tbody>
        

        <tr>
            <td> Match 1 </td>
            <td><?php echo "$equipe[$equipey1] -VS- $equipe[$equipey2] ";?> </td>
            <td><input type="number" name="scoreb1" min="0" max="15"> --
                       <input type="number"name="scoreb2"min="0"max="15"> 
                </td>
        </tr>

        <tr>
            <td> Match 2 </td>
            <td><?php echo" $equipe[$equipey4] -VS- $equipe[$equipey3]"; ?> </td>
            <td> <input type="number" name="scoreb3" min="0" max="15"> --
                       <input type="number"name="scoreb4"min="0"max="15"> </td>
                 
        </tr>

        <tr>
        <td> Match 3 </td>
            <td><?php echo" $equipe[$equipey1] -VS- $equipe[$equipey3]"; ?> </td>
            <td> <input type="number" name="scoreb5" min="0" max="15"> --
                       <input type="number"name="scoreb6"min="0"max="15"> 
                 </td>
        </tr>

        <tr>
             <td> Match  4 </td>
            <td><?php echo" $equipe[$equipey2] -VS- $equipe[$equipey4]";?> </td>
            <td> <input type="number" name="scoreb7" min="0" max="15"> --
                       <input type="number"name="scoreb8"min="0"max="15"> 
                 </td>
        </tr>

        <tr>
            <td> Match  5 </td> 
            <td><?php echo" $equipe[$equipey1] -VS- $equipe[$equipey4]";?> </td>
            <td> <input type="number" name="scoreb9" min="0" max="15"> --
                       <input type="number"name="scoreb10"min="0"max="15"> 
                 </td>
        </tr>

        <tr>
            <td> Match  6 </td>
            <td><?php echo" $equipe[$equipey2] -VS- $equipe[$equipey3]";?> </td>
            <td><input type="number" name="scoreb11" min="0" max="15"> --
                       <input type="number" name="scoreb12" min="0"max="15"> 
                </td>
        </tr>
      
    
         <center><td colspan="3"> <input type="submit" name="Classement" value=" classement"></td></center>
    

    </form>

    </tbody>

</table><br><br><br> <hr>
</form> <br> <br> <br>

<!-- creation fichier -->
<?php
     $GroupA1=fopen("fichier/GroupeA1.txt","w");
     fwrite($GroupA1,$equipe[$equipex1]);
     fclose($GroupA1);

     $GroupA2=fopen("fichier/GroupeA2.txt","w");
     fwrite($GroupA2,$equipe[$equipex2]);
     fclose($GroupA2);

     $GroupA3=fopen("fichier/GroupeA3.txt","w");
     fwrite($GroupA3,$equipe[$equipex3]);
     fclose($GroupA3);

     $GroupA4=fopen("fichier/GroupeA4.txt","w");
     fwrite($GroupA4,$equipe[$equipex4]);
     fclose($GroupA4);


?>

<?php
     $GroupB1=fopen("fichier/GroupeB1.txt","w");
     fwrite($GroupB1,$equipe[$equipey1]);
     fclose($GroupB1);

     $GroupB2=fopen("fichier/GroupeB2.txt","w");
     fwrite($GroupB2,$equipe[$equipey2]);
     fclose($GroupB2);

     $GroupB3=fopen("fichier/GroupeB3.txt","w");
     fwrite($GroupB3,$equipe[$equipey3]);
     fclose($GroupB3);

     $GroupB4=fopen("fichier/GroupeB4.txt","w");
     fwrite($GroupB4,$equipe[$equipey4]);
     fclose($GroupB4);
?>

</body>

<style>
    *{
        padding: 0;
        margin: 0;
        list-style: none; 
        box-sizing: border-box;
        text-decoration: none;
        font-family: italic;
    }

    body{
        font-style: italic;
        font-size: 15px;
        background-image: url(./imagetournoi/foot2.jpg);
        background-size: cover;

    }

    .tete{
        margin-left: 45%;
        margin
        color: gray;
    }

    .tirage{
        margin-left: 50%;
    }
    .table{
        width: 80%;
        margin-top: 40px;
        border-collapse: collapse;
    }
    .table td,.table th{
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: center;
        font-size: 20px;
        color: white;
    }
    .table th{
      background-color: gray;
      color: black;
    }

    .boutton{
        width: 80%;
    }

    a{
        font-size: 40px;
    }
</style>


</html>



