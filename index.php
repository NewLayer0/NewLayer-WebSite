<?php
$input = array("music.mp3", "music2.mp3", "music3.mp3", "music4.mp3", "music5.mp3");
$rand_keys = array_rand($input, 2);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>NewLayer</title>

         <link href="./all/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
         <link href="./all/style.css" rel="stylesheet" >
         <script src="./all/6dbcb3829c.js" crossorigin="anonymous"></script>
         <script src="./all/jquery-3.5.1.min.js.download" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>

    <style>
        .imagem{
    transition: all .5s;
    border: 10px solid transparent;
}
.imagem:hover{
    border: 10px solid #ffffff;
    border-radius: 50%;
}
    </style>
<body>

<div id="hero">
    
    <img class="giphy" src="./all/anime-depressed.gif">
        <div class="content d-flex align-items-center">
            <div id="center" class="container text-center">
                <h1 style="color:white; padding-bottom: 6px">NewLayer#0333</h1> 
                    <span class="icons">
                        <span id="block">
                            <a class="imagem" style="color: rgb(0, 0, 0);" href="https://discord.gg/AbZNHamYh4"><i class="fab fa-discord fa-2x" aria-hidden="true"></i></a>
                            </span>
                            <span id="block">
                            <a class="imagem" style="color: rgb(0, 0, 0);" href="https://www.youtube.com/channel/UC4uzx_0vI3IVIpKkXVHhATg"><i class="fab fa-youtube fa-2x" aria-hidden="true"></i></a>
                            </span>
                            <span id="block">
                            <a class="imagem" style="color: rgb(0, 0, 0);" href="https://github.com/newlayer0"><i class="fab fa-github fa-2x" aria-hidden="true"></i></a>
                            <br>
                            <br>
                            &nbsp;&nbsp;&nbsp;<button onclick="playsound()" type="button" class="btn btn-dark">My Mind</button>
                            <audio id="sfx"> <source src="<?php echo $input[$rand_keys[0]]; ?>" type="audio/mp3"> </audio>
                        </span>
        </span>
    </div>
</div>
</body>

<script>
    function playsound() {
        var sfx = document.getElementById("sfx");
        sfx.autoplay = 'true';
        sfx.load();
    }
</script>
</html>
