<?php
        require_once "../partials/footer.php";
        require_once "../partials/header.php";
        require_once "../API/ShowWheater.php";
        require_once "../helpers/temp_conv.php";
        require_once "../database/pageinfo.php";
?>
<main class="Pagemain">
    <div class="MainInnerwrapper">
        <div class="mainTop">
            <p class="Topsentence"><?php echo $pageInfo['homeInfo']['sentence']; ?></p>
            <p class="Topauthor"><?php echo $pageInfo['homeInfo']['author']; ?></p>
        </div>
<?php
    if(isset($weatherDecode)) {
        $temp = $weatherDecode['main']['temp'];
        $icon = "http://openweathermap.org/img/w/" . $weatherDecode['weather'][0]['icon'] . ".png";

?>
    <div class="info">
        <h2>Informacje o pogodzie w mieście:</h2>
        <h1><?php echo $weatherDecode['name']?></h1><br>
        <h3><?php echo Tempconvert(round($temp))?></h3><br>
        <h3><?php echo $weatherDecode['main']['humidity']."&nbsp%"?></h3><br>
        <h3><?php echo $weatherDecode['main']['pressure']."&nbsphPa"?></h3><br>
        <h3><?php echo $weatherDecode['weather']['0']['description']."<img src='".$icon."'>"?></h3>
    </div>
<?php    
    }
    else {
?>
    <div>
            <h2><?php echo $error ?> </h2>
    </div>
<?php
    }
    ?>
    <button class="back"><a href="HomeView.php">Go Back</a></button>
    </div>