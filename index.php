<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Slideshow | David Kolář</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>

<div class="content">
    <div class="slideshow slideshow--top">
        <div class="slideshow__item">
            <img src="http://placehold.it/600x300/009639/fff" alt="zelena" width="600" height="300">
        </div>
        <div class="slideshow__item">
            <img src="http://placehold.it/600x300/0F2465/fff" alt="modra" width="600" height="300">
        </div>
        <div class="slideshow__item">
            <img src="http://placehold.it/600x300/F9423A/fff" alt="cervena" width="600" height="300">
        </div>
        <div class="slideshow__item">
            <img src="http://placehold.it/600x300/009CDE/fff" alt="svetleModra" width="600" height="300">
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="slideshow slideshow--left">
        <div class="slideshow__item">
            <img src="http://placehold.it/200x200/009639/fff" alt="zelena" width="200" height="200">
        </div>
        <div class="slideshow__item">
            <img src="http://placehold.it/200x200/0F2465/fff" alt="modra" width="200" height="200">
        </div>
        <div class="slideshow__item">
            <img src="http://placehold.it/200x200/F9423A/fff" alt="cervena" width="200" height="200">
        </div>
    </div>

    <div class="slideshow slideshow--right">
        <div class="slideshow__item">
            <img src="http://placehold.it/370x200/009639/fff" alt="zelena" width="370" height="200">
        </div>
        <div class="slideshow__item">
            <img src="http://placehold.it/370x200/F9423A/fff" alt="zelena" width="370" height="200">
        </div>
        <div class="slideshow__item">
            <img src="http://placehold.it/370x200/FFDE07/fff" alt="zelena" width="370" height="200">
        </div>
    </div>

    <div class="clearfix"></div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="slideshow.js" type="text/javascript"></script>
<script type="text/javascript">
// První slideshow
$(".slideshow--top").slideshow({
    "autoPlaySpeed" : 2500,
    "fadeSpeed"     : 500,
    "hoverStop"     : true,
    "nav"           : true,
    "dots"          : true
});

// Druhá slideshow
$(".slideshow--left").slideshow({
    "hoverStop" : true,
});

// Třetí slideshow
$(".slideshow--right").slideshow({
    "hoverStop" : true,
    "nav"       : true,
    "dots"      : true
});
</script>

</body>
</html>



<?php /*
vytvořit slideshow

ovládání šipkami + puntíky
*/?>