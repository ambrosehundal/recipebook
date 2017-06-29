
<ul>
    <?php
    foreach($navItems as $food){
        echo "<li><a href=\"$food[slug]\">$food[title]</a></li>";
    }
    ?>
</ul>