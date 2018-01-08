<?php ?>
<h2 class="title-font"><?= $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["formulas"] ?></h2>
<div id="formulas-homepage-container" class="">
    <p class="font-description"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["formulas"]["intro"]["content"]; ?></p>

    <div class="equation">
        <div class="square-border">
            <h4 class="font-medium-title"><?= $dictionnaries[$_SESSION["locale"]]["homePageContent"]["formulas"]["value1"] ?></h4>
        </div>
        <span class="symbol font-medium-title">+</span>
        <div class="square-border ">
            <h4 class="font-medium-title"><?= $dictionnaries[$_SESSION["locale"]]["homePageContent"]["formulas"]["value2"] ?></h4>
        </div>
        <span class="symbol font-medium-title">=</span>
        <div class="square-border">
            <h4 class="font-medium-title"><?= $dictionnaries[$_SESSION["locale"]]["homePageContent"]["formulas"]["value3"] ?></h4>
        </div>

    </div>
</div>