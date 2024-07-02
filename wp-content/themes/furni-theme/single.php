<?php locate_template('layouts/header.php', true); ?>

<h1 id="singleTitle"><?php
the_title();
?></h1>

<div id="singleTitle">
<?php 
the_content(); 
?>
</div>

<?php locate_template('layouts/footer.php', true); ?>