<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale1.0">
    </head>
    <body>
       
    <!-- partie fichier -->
            <?php   
                $PetiteFinalA=fopen('fichier/petiteFinalA.txt',"r"); 
                $PetiteFinalB=fopen('fichier/petiteFinalB.txt',"r"); 
            ?><br><br>
    <h1>Petite-Finale</h1>
        <hr>
        <center><form action="" method="Post">
                
        <table>
            <tbody>

                <tr>
                    <th>Petite-Finale</th>
                    <th>Affiche</th>
                    <th>Score</th>
                </tr>

                <tr>
                    <td>Match 15</td>
                    <td><?php  echo $premier=fgets($PetiteFinalA);  ?> -VS- <?php echo $deuxiemeb=fgets($PetiteFinalB);  ?></td>
                    <td><input type="number" name="demiScore1" min="0"  max="10"> - <input type="number" name="demiScore2"  min="0" max="10"></td>
                    
                </tr>

                <tr>
                    <td colspan="3"><input  type="submit" name='envoyer' value="valider"> </td>
                </tr>

           </tbody>
        </table>
    </form></center>

    <?php  
            $troisieme="vide";
            $quatrieme="vide"; 
               if(isset($_POST['envoyer'])){
                   $score1=$_POST['demiScore1'];
                   $score2=$_POST['demiScore2'];
                   if($score1>$score2){
                       $troisieme=$premier;
                       $quatrieme=$deuxiemeb;
                   }elseif($score1<$score2){
                    $troisieme=$deuxiemeb;
                    $quatrieme=$premier;
                   }else{
                       ?>
                            <script>
                                alert("Prolongation, il faut reentrer les scores");
                            </script>
                       <?php
                   }
               }
            ?>
      
        <?php if(isset($_POST['envoyer'])):  ?>    
                <?php if(!($score1==$score2)):  ?>
                    <form method="post" action="final.php">
            <table> <br> <br> <br>

                <center>
                    <h2>Troisieme Place</h2>
                    <img src="./imagetournoi/med3.jpg" width="50px"> <br>  <?php echo $troisieme ?>  
                </center> <br><br>

                <center>
                    <h2>Quatrieme Place</h2>
                     <?php echo $quatrieme ?>
                </center> <br> <br>
                
               <center><input  type="submit" name='envoyer' value="Final"></center>
           
        </table>
                </form>
        <?php endif    ?>
        <?php endif    ?>
    
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
        background-image: url(./imagetournoi/ecran2.jpg);
        background-size: cover;
    }

    table{
        width: 80%;
        margin-top: 40px;
        border-collapse: collapse;
    }

    table td,table th{
        padding: 12px 15px;
        border: 1px solid black;
        text-align: center;
        font-size: 20px;
        color: black;
    }

    table th{
      background-color: gray;
      color: black;
      font-size: 25px;
    }

    h1{
        margin-left: 40px;
        color: white;
        font-size: 35px;
    }

</style>

</html>