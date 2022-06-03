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
           <div id="day"></div> it's Currently
           <div id="zegar"></div> 
            <h3><?php echo getLocation(); ?></h3>
        <form action="CityView.php" method="GET">
                <input type="text" name="city">
                <input class="btn btn-primary btn-sm" value="Search city" type="submit" name="citySubmit">
        </form>
    </div>
</div>
</main>
<?php 

      ?>