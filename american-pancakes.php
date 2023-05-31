

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/css/recipes.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Еда</title>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="header-line">
          <div class="nav">
            <a class="nav-item" href="../index.php">ГЛАВНАЯ</a>
          </div>
          <div class="menu">
            <button id="button-menu">
              <img src="/image/Group.png" alt="" />
            </button>
            <div id="slide-menu" class="slide disp">
              <a class="nav-item block" href="../index.php">ГЛАВНАЯ</a>
              <a class="nav-item block" href="../auth.php">Вход</a>
               
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="recipe-information">
      <div class="container">
      <?php
          
          include "include/connect.php";
          $id = $_GET["id"];
          $new = mysqli_query($connection, "SELECT `id`, `title`, `ingredients`, `Instruction`, `time`, `filename`, `amount` FROM `recipe` WHERE id = $id");
          while($music_new = mysqli_fetch_assoc($new)){
            $ing = $music_new['ingredients'];
            $keywords = preg_split("/[\s,]+/", $ing );
            
            $value = $music_new['amount'];
            $keywords_value = preg_split("/[\s,]+/", $value );
            
      ?>
          <div class="recipe-info">
          <div class="recipe-title"><?php echo $music_new['title'];?></div> 
          <p class="time">Время готовки: <?php echo $music_new['time'];?>m</зclass=>
          <div class="info-image">
            <img class="info-img" src="../recipe_img/<?php echo $music_new['filename'];?>"/>
          </div>
          <div class="ingredients">
            <div class="ingredients-title">ИНГРЕДИЕНТЫ</div>
            <div class="emotion-7yevpr">
              <div class="emotion-ydhjlb">
                <div class="emotion-bjn8wh">
                  <span title="" class="emotion-mdupit"
                    ><span itemprop="recipeIngredient"> <?php echo $keywords[0];?> </span></span
                  >
                </div>
                <span class="emotion-1f5cedg"></span
                ><span title="" class="emotion-bsdd3p"><?php echo $keywords_value[0];?></span>
              </div>
            </div>
            <div class="emotion-7yevpr">
              <div class="emotion-ydhjlb">
                <div class="emotion-bjn8wh">
                  <span title="" class="emotion-mdupit"
                    ><span itemprop="recipeIngredient"
                      ><?php echo $keywords[1];?>
                    </span></span
                  >
                </div>
                <span class="emotion-1f5cedg"></span
                ><span title="" class="emotion-bsdd3p"><?php echo $keywords_value[1];?></span>
              </div>
            </div>
            <div class="emotion-7yevpr">
              <div class="emotion-ydhjlb">
                <div class="emotion-bjn8wh">
                  <span title="" class="emotion-mdupit"
                    ><span itemprop="recipeIngredient"><?php echo $keywords[2];?></span></span
                  >
                </div>
                <span class="emotion-1f5cedg"></span
                ><span title="" class="emotion-bsdd3p"><?php echo $keywords_value[2];?></span>
              </div>
            </div>
            <div class="emotion-7yevpr">
              <div class="emotion-ydhjlb">
                <div class="emotion-bjn8wh">
                  <span title="" class="emotion-mdupit"
                    ><span itemprop="recipeIngredient"
                      >Разрыхлитель
                    </span></span
                  >
                </div>
                <span class="emotion-1f5cedg"></span
                ><span title="" class="emotion-bsdd3p">2 г </span>
              </div>
            </div>
            <div class="emotion-7yevpr">
              <div class="emotion-ydhjlb">
                <div class="emotion-bjn8wh">
                  <span title="" class="emotion-mdupit"
                    ><span itemprop="recipeIngredient"
                      >Ванильный сахар
                    </span></span
                  >
                </div>
                <span class="emotion-1f5cedg"></span
                ><span title="" class="emotion-bsdd3p">по вкусу </span>
              </div>
            </div>
            <div class="emotion-7yevpr">
              <div class="emotion-ydhjlb">
                <div class="emotion-bjn8wh">
                  <span title="" class="emotion-mdupit"
                    ><span itemprop="recipeIngredient"
                      >Пшеничная мука
                    </span></span
                  >
                </div>
                <span class="emotion-1f5cedg"></span
                ><span title="" class="emotion-bsdd3p">2 столовые ложки </span>
              </div>
            </div>
          </div>

          <div class="manual">
            <div class="cooking-instructions">ИНСТРУКЦИЯ ПРИГОТОВЛЕНИЯ</div>
            <div class="steps">
              <div class="step">
                1.Взбить яйца, влить молоко, добавить сахар и ванильный сахар.
                Взбить до однородности
              </div>
              <div class="step">
                2.Добавить муку и разрыхлитель. Снова хорошо взбить до
                однородной массы.
              </div>
              <div class="step">
                3.Формировать панкейки ложкой и жарить на слабом огне без масла.
                Можно добавить растительное масло в тесто, если блины прилипают
                к сковороде и подгорают.
              </div>
              <div class="step">
                4.Переворачивать панкейки после появления пузырьков, и жарить на
                каждой стороне около минуты.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
         }
?>
          </div>
        </div>
      </div>
    </div>
  </div>

  



    <script src="/script/script.js"></script>
  </body>
</html>
