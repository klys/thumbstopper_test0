<?php
/*
    Write an executable php script that does the following:  
    Cycle through the numbers 3 through 103.  
    When the current number can be evenly divided by 3, 
    display the word “three”.  When the current number can 
    be evenly divided by 5, display the word “five”.  
    When the current number can be divided evenly by both 
    3 and 5, display the words “both three and five”.  
    If the current number isn’t divisible by either, 
    output the number itself.  Each output should be on its own line. 
*/

 ?>
 
 <ol start=3>
<?php
    for($i = 3; $i <= 103; $i++) {
        if ($i % 3 == 0) {
            ?>
            <li>three</li>
            <?php
        }else 
        if ($i % 5 == 0) {
            ?>
            <li>five</li>
            <?php
        }else
        if (($i % 3 == 0) && ($i % 5 == 0)) {
            ?>
            <li>both three and five</li>
            <?php
        } else {
            ?>
            <li><?= $i ?></li>
            <?php
        }
    }
?>
</ol>