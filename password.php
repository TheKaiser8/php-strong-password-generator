<?php 
session_start();
?>
<!-- Campo output con controllo: password generata o messaggio informativo -->
<?php if( !empty($_SESSION['$generated_pw']) ) { ?>
    <h3><?php echo "La password generata è:" . $_SESSION['$generated_pw'] ?></h3>
    <?php } else { ?>
    <h3><?php echo "Nessun parametro valido inserito" ?></h3>
<?php } ?>
<!-- /Campo output con controllo: password generata o messaggio informativo -->