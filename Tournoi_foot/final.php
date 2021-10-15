<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale1.0">
    </head>
    <body>
        <section class="img">

            <?php   
                $GrandeFinalA=fopen('fichier/GrandeFinalA.txt',"r"); 
                $GrandeFinalB=fopen('fichier/GrandeFinalB.txt',"r"); 
            ?>
    <br> <br>
    <h1>Grande-Finale</h1>
        <hr>

        <center><form action="" method="Post">
                
        <table>

        <tbody>
            <tr>
                <th>Grande-Finale</th>
                <th>Affiche</th>
                <th>Score</th>
            </tr>

            <tr>
                <td>Match 16</td>
                <td><?php  echo $premierB=fgets($GrandeFinalA);  ?> -VS- <?php echo $deuxiemeB=fgets($GrandeFinalB);  ?></td>
                <td><input type="number" name="finalScore1" min="0"  max="10"> - <input type="number" name="finalScore2"  min="0" max="10"></td>
                
            </tr>

            <tr>
               <td colspan="3"><input  type="submit" name='envoyer' value="valider"> </td>
            </tr>

        </tbody>

        </table>

    </form></center>

            <?php  
                $premier="vide";
                $deuxieme="vide"; 
               if(isset($_POST['envoyer'])){
                   $score1=$_POST['finalScore1'];
                   $score2=$_POST['finalScore2'];
                   if($score1>$score2){
                       $premier=$premierB;
                       $deuxieme=$deuxiemeB;
                   }elseif($score1<$score2){
                    $premier=$deuxiemeB;
                    $deuxieme=$premierB;
                   }else{
                       ?>
                            <script>
                                alert("Prolongation, il faut re entrer les scores");
                            </script>
                       <?php
                   }
               }
            ?>
      
            <?php if(isset($_POST['envoyer'])):  ?>    
                <?php if(!($score1==$score2)):  ?>
                    <form method="post" action="final.php">
            <table> <br>

            <center>
                <h2>Deuxieme Place</h2> <br> <br>
                <img src="./imagetournoi/med2.jpg" width="50px"> <br> <?php echo $deuxieme ?>
            </center> <br><br> <br>
            
            <center>
                <h2>Le Champion du tournoi </h2> <br> <br>
                <img src="./imagetournoi/med1.jpg" width="50px"><br> <?php echo $premier ?>   
            </center>
           
        </table>
                </form>
            <?php endif    ?>
            <?php endif    ?>
                </section>
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
        background-image: url(./imagetournoi/cup.jpg);
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
    }

    h1{
        margin-left: 40px;
        color: white;
        font-size: 35px;
    }

</style>
</html>