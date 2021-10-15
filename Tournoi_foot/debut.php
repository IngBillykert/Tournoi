<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coupe 3eme INFO Tournoi</title>
</head>
<body>
<br><br><br><br>
<center><h1 class="titre">Tournoi Football</h1></center><br><br>

    <center><table >
    <thead>
          <th colspan="9"> Lots </th>      
    </thead>
    <tbody>
        <tr>
            <th>Lot #1 (1e tete de serie)</th>
            <th>Lot #2 (2eme tete de serie)</th>
            <th>Lot #3 (3eme tete de serie)</th>
            <th>Lot #4 (4eme tete de serie)</th>
        </tr>

        <tr>
            <td><img src="./imagetournoi/brazil.png" width="15px"> Brezil</td>
            <td><img src="./imagetournoi/france.svg" width="15px"> France</td>
            <td><img src="./imagetournoi/spain.svg"width="15px"> Espagne</td>
            <td><img src="./imagetournoi/portugal.svg" width="15px"> Portugal</td>
        </tr>

        <tr>
            <td><img src="./imagetournoi/germany.svg"width="15px"> Allemagne</td>
            <td><img src="./imagetournoi/italy.svg" width="15px"> Italie</td>
            <td><img src="./imagetournoi/argentina.svg"width="15px"> Argentine</td>
            <td><img src="./imagetournoi/haiti.svg" width="15px"> Haiti</td>
        </tr>
    </tbody>
    
    </table> </center> <br><br>

    <center><a href="tirage.php">TIRAGE</a></center>

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
        font-size: 1.2rem;
        background-image: url(./imagetournoi/font1.jpg);
        background-size: cover;
    }

    .titre{  
        color: rgb(109, 4, 4);
    }

    table{
        width: 80%;
        margin-top: 5rem;
        border-collapse: collapse;
    }

    table td,table th{
        padding: 12px 15px;
        text-align: center;
        font-size: 1.2rem;
        border: 1px black solid;
    }

    table th{
      background-color: gray;
      color: black;
    }

    a{
        font-size: 40px;
        color: black;
    }
    a:hover{
        font-size: 50px;
        color: rgb(109, 4, 4);
    }
    
</style>

</body>
</html>