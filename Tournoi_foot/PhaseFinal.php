<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale1.0">
    </head>
    <body>
        <!-- creation fichier -->
            <?php 
                $premier=fopen('fichier/premierGroupeA.txt',"r");  
                $premierB=fopen('fichier/premierGroupeB.txt',"r");   

                $deuxieme=fopen('fichier/deuxiemeGroupeA.txt',"r");  
                $deuxiemeb=fopen('fichier/deuxiemeGroupeB.txt',"r");  
            ?>
    <br> <br>
    <h1>Demi-Finale</h1>
        <hr>

            <form action="PhaseFinal1.php" methode="get">
                
        <center><table>

            <tbody>

            <tr >
                <th>Demi-Finale</th>
                <th>Affiche</th>
                <th>Score</th>
            </tr>
            <tr>
                <td>Match 13</td>
                <td><?php  echo $premier=fgets($premier);  ?> -VS- <?php echo $deuxiemeb=fgets($deuxiemeb);  ?></td>
                <td><input type="number" name="demiScore1" min="0"  max="10"> - <input type="number" name="demiScore2"  min="0" max="10"></td>
                
            </tr>
            <tr>
                <td>Match 14</td>
                <td><?php  echo $premierb=fgets($premierB);  ?> -VS- <?php  echo $deuxieme=fgets($deuxieme);  ?></td>
                <td><input type="number" name="demiScore1b" min="0"  max="10"> - <input type="number" name="demiScore2b"  min="0" max="10"></td>
                
            </tr>
            <tr>
               <td colspan="3"><input  type="submit" name='envoyer' value="valider"> </td>
           </tr>

           </tbody>

        </table></center>
      
    </form>

         
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
        background-image: url(./imagetournoi/foot1.jpg);
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