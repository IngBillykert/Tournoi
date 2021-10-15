<center><?php 
 include("classement1.php");
?></center> 

    <!-- Classement groupe -->

<?php echo'  <center>   
                  <div class="entete"> <h1> CLASSEMENT DU CHAMPIONNAT</h1> </div>
             </center><br>';
?>
       
       <center><table border="1px solid black" class="table" >
    <thead>
          <th colspan="10">Groupe A</th>      
    </thead>
    <tbody>
        <tr>
        <td>Classement</td>
        <td>Equipe</td>
        <td>MJ</td>
        <td>MG</td>
        <td>MN</td>
        <td>MP</td>
        <td>BP</td>
        <td>BC</td>
        <td>DIF</td>
        <td>POINT</td> 
        </tr>

        <tr> 
            <td>Premier</td>                
            <td><?php echo $premier ?></td>
            <td>3</td>
            <td><?php echo $MG ?></td>
            <td><?php echo $MN ?></td>
            <td><?php echo $MP ?></td>
            <td><?php echo $BP ?></td>
            <td><?php echo $BC ?></td>
            <td><?php echo $dif ?></td>
            <td><?php echo $point ?></td>
        </tr>

        <tr>   
            <td>Deuxieme</td>              
            <td><?php echo $deuxieme ?></td>
            <td>3</td>
            <td><?php echo $MG2 ?></td>
            <td><?php echo $MN2 ?></td>
            <td><?php echo $MP2 ?></td>
            <td><?php echo $BP2 ?></td>
            <td><?php echo $BC2 ?></td>
            <td><?php echo $dif2 ?></td>
            <td><?php echo $point2 ?></td>
        </tr>

        <tr>    
            <td>Troisieme</td>             
            <td><?php echo $troisieme ?></td>
            <td>3</td>
            <td><?php echo $MG3 ?></td>
            <td><?php echo $MN3 ?></td>
            <td><?php echo $MP3 ?></td>
            <td><?php echo $BP3 ?></td>
            <td><?php echo $BC3 ?></td>
            <td><?php echo $dif3 ?></td>
            <td><?php echo $point3 ?></td>
        </tr>

        <tr> 
            <td>Quatrieme</td>                
            <td><?php echo $quatrieme ?></td>
            <td>3</td>
            <td><?php echo $MG4 ?></td>
            <td><?php echo $MN4 ?></td>
            <td><?php echo $MP4 ?></td>
            <td><?php echo $BP4 ?></td>
            <td><?php echo $BC4 ?></td>
            <td><?php echo $dif4 ?></td>
            <td><?php echo $point4 ?></td>
        </tr>
    </tbody>
</table> </center>

<br>
<center><table border="1px solid black" >
    <thead>
          <th colspan="10">GroupeB</th>      
    </thead>
    <tbody>
        <tr>
        <td>Classement</td>
                <td>Equipe</td>
                <td>MJ</td>
                <td>MG</td>
                <td>MN</td>
                <td>MP</td>
                <td>BP</td>
                <td>BC</td>
                <td>DIF</td>
                <td>POINT</td>
        </tr>

        <tr> 
            <td>Premier</td>                
            <td><?php echo $premierM ?></td>
            <td>3</td>
            <td><?php echo $MGb ?></td>
            <td><?php echo $MNb ?></td>
            <td><?php echo $MPb ?></td>
            <td><?php echo $BPb ?></td>
            <td><?php echo $BCb ?></td>
            <td><?php echo $difb ?></td>
            <td><?php echo $pointb ?></td>
        </tr>

        <tr>
            <td>Deuxieme</td>                 
            <td><?php echo $deuxiemeM ?></td>
            <td>3</td>
            <td><?php echo $MG2b ?></td>
            <td><?php echo $MN2b ?></td>
            <td><?php echo $MP2b ?></td>
            <td><?php echo $BP2b ?></td>
            <td><?php echo $BC2b ?></td>
            <td><?php echo $dif2b ?></td>
            <td><?php echo $point2b ?></td>
        </tr>

        <tr>  
            <td>Troisieme</td>               
            <td><?php echo $troisiemeM ?></td>
            <td>3</td>
            <td><?php echo $MG3b ?></td>
            <td><?php echo $MN3b ?></td>
            <td><?php echo $MP3b ?></td>
            <td><?php echo $BP3b ?></td>
            <td><?php echo $BC3b ?></td>
            <td><?php echo $dif3b ?></td>
            <td><?php echo $point3b ?></td>
        </tr>

        <tr>  
            <td>Quatrieme</td>               
            <td><?php echo $quatriemeM ?></td>
            <td>3</td>
            <td><?php echo $MG4b ?></td>
            <td><?php echo $MN4b ?></td>
            <td><?php echo $MP4b ?></td>
            <td><?php echo $BP4b ?></td>
            <td><?php echo $BC4b ?></td>
            <td><?php echo $dif4b ?></td>
            <td><?php echo $point4b ?></td>
        </tr>
    </tbody>
</table> </center> <br> <br>

<center>
<li><a href="PhaseFinal.php">Phase Final</a></li>
</center>

<html>
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
        background-image: url(./imagetournoi/font1.jpg);
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

    a{
        font-size: 40px;
        color: black;
    }
</style>
</html>