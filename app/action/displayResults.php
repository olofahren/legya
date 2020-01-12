<div class="lego-container">
    <?php 
    if(!$results){
        echo "<h2>Your search did not return any results</h2>";
    }
    foreach ($results as $result) {
        
    
    ?>

    
        <div class="lego-box">
            <div class="lego-pic-container">
                <img src="http://weber.itn.liu.se/~stegu76/img.bricklink.com/SL/<?php echo $result["SetID"]?>.jpg" alt="set-image" class="lego-pic">          
            </div>
            <div class="lego-info">
                <h4 class="setName"><?php $result["Setname"]?></h4>
                <h5 class="set-title">Setname:</h5>
                    <p><?php echo $result["Setname"]?></p>
                <h5 class="set-title">Release year:</h5>
                    <p><?php echo $result["Year"] ?></p>
            
            </div>
            
            <a class="more-info" href="app/action/getParts.php?SetID=<?php echo $result["SetID"]?>"><h5> More info </h5></a>
            
        </div>
       <?php  
        }
       ?>
    </div>