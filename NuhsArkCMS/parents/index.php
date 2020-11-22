<?php
  include_once "header.php";
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p>Welcome <?php echo $_SESSION["username"]; ?>!</p>
				<p>[for testing purpose] <?php print_r($_SESSION); ?><p/>
            </div>
        </div>
    </div>
<main/>
<?php 
  include_once "footer.php";
?>