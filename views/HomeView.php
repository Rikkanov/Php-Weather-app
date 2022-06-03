<?php
    require_once "../partials/footer.php";
    require_once "../helpers/daytime.php";
    require_once "../partials/header.php";
    require_once "../database/pageInfo.php";
    require_once "../helpers/location.php";
?>

<main class="Pagemain">
    <div class="MainInnerwrapper">
        <div class="mainTop">
            <p class="Topsentence"><?php echo $pageInfo['homeInfo']['sentence']; ?></p>
            <p class="Topauthor"><?php echo $pageInfo['homeInfo']['author']; ?></p>
        </div>
        <div class="mainBottom">
            <p><div id="day" onLoad="daytime()"></div>it's Currently</p>
            <h1><div id="zegar"></div><span>CEST</span></h1>
            <h3><?php echo getLocation(); ?></h3>
        <form action="CityView.php" method="GET">
                <input type="text" name="city">
                <input value="Search city" type="submit" name="citySubmit">
        </form>
    </div>
</div>
</main>
<?php 

      ?>