<?php
        require_once "../partials/footer.php";
        require_once "../partials/header.php";
        require_once "../API/ShowWheater.php";
        require_once "../helpers/temp_conv.php";
        require_once "../database/pageinfo.php";
        require_once "../helpers/location.php";

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
        <div class="card" style="width: 25rem;">
            <div class="card-header"><h2>Karta Pogodowa Miasta:</h2></div>
            <div class="card-header"><h1><?php echo $weatherDecode['name']?></h1></div>
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item"><h3><?php echo Tempconvert(round($temp))?></h3></li>
                    <li class="list-group-item"> <h3><?php echo $weatherDecode['main']['humidity']."&nbsp%"?></h3></li>
                    <li class="list-group-item"><h3><?php echo $weatherDecode['main']['pressure']."&nbsphPa"?></h3></li>
                    <li class="list-group-item"><h3><?php echo $weatherDecode['weather']['0']['description']."<img src='".$icon."'>"?></h3></li>
                </ul>
            </div>
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
<div class="mainBottom">
            <p><div id="day"></div> it's Currently</p>
           <div id="zegar"></div> 
            <h3><?php echo getLocation(); ?></h3>
                <form action="HomeView.php">
                <div class="d-grid gap-1 col-2">
                    <input type="submit" class="btn-primary btn-lg" value="Go Back">
                </div>
                </form>
   
    </div>