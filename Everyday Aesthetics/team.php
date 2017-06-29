<?php
define("TITLE", "Team | Everyday Aesthetics");
include('header.php');


?>

<div id="team-members" class="cf">
    <h1>Backbone of Everyday Aesthetics</h1>
    <p>We are a new startup company located in Los Angeles and Santa Clara in California. Everyday Aesthetics was started to provide customers nutritious, healthy food that takes care of their bodies and gives them a delicious meal and a great time. We focus on the health benefits of food and aim to provide clean meals daily.</p>
    <hr>
    
    <?php
    foreach($teamMembers as $member){
        
    
    ?>
    
    <div class="member">
        <img src="img/<?php echo $member[img];?>.png" alt="<?php echo $member[name]; ?>">
        <h2><?php echo $member[name]; ?></h2>
        <p><?php echo $member[bio];?></p> 
    </div>
    
    <?php
    }
    ?>
    
</div>

<?php
include('footer.php');
?>