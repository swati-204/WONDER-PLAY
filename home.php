<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/play-button-o.css' rel='stylesheet'>

    <style>
        .gg-play-button-o {
            box-sizing: border-box;
            position: relative;
            display: block;
            transform: scale(var(--ggs,2));
            width: 22px;
            height: 22px;
            border: 2px solid yellow;
            border-radius: 20px;
            
           }
           
           .gg-play-button-o::before {
            content: "";
            display: block;
            box-sizing: border-box;
            position: absolute;
            width: 0;
            height: 10px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 6px solid ;
            top: 4px;
            left: 7px
           } 
    </style>
 
</head>
<body>

    <img class="img-style" src="/images/Play! (1) (1).png" alt="">
  <img class="img-style" src="/images/Play! (2).png" alt="">
  <img class="img-style" src="/images/Untitled design (1) (1).png" alt="">
  <img class="img-style" src="/images/Untitled design (2) (1).png" alt="">
  <img class="img-style" src="/images/Untitled design (3) (1).png" alt="">
  <img class="img-style" src="/images/Untitled design (4) (1).png" alt="">
  <img class="img-style" src="/images/Untitled_design-removebg.png" alt="">

    <div id="homePage" class="home-page" style="display: block">
    
        <h2 class="Heading"><?php echo $_POST['user']; ?>
        Welcome to Wonder Play!</h2>
        <p>Choose a game to play:</p>
        <div class="game-container">
            <div class="game-card"> 
                <p class="game-title">Sudoku</p>
                <a class="game-buttons" href="/sudoku/index.html"><i class="gg-play-button-o"></i></a>
            </div>
            <div class="game-card"> 
                <p class="game-title">Tic-Tac-Toe</p>
                <a class="game-buttons" href="/tic-tac-toe/index.html"><i class="gg-play-button-o"></i></a>
            </div>
            <div class="game-card"> 
                <p class="game-title">Guess Word</p>
                <a class="game-buttons" href="/Word-Game/index.html"><i class="gg-play-button-o"></i></a>
            </div>
            <div class="game-card"> 
                <p class="game-title">Hanoi Tower</p>
                <a class="game-buttons" href="/hanoi game/hanoi.html"><i class="gg-play-button-o"></i></a>
            </div>
        </div>
        
      </div>
</body>
</html>