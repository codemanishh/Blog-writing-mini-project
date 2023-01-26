<?php
require_once './includes/header.inc.php'
?>

<style>
  .navbar {
    display: none;
    opacity: 0;
  }

  body {
    background-color: #efefef;
  }
</style>

<?php
$_SESSION['USER_ID'] = '';

session_destroy();

?>

<div class="container mt-5 text-center">
  <div class="row">
    <div class="col-md-8 offset-md-2 col-sm-12">
      <div class="jumbotron">
        <h1 class="display-3 text-success">Logout</h1>
        <p class="lead">you are logout.</p>
        <hr class="my-4">
        <p class="lead">
          <?php
          $link = str_replace("post.php", "index.php", $_SERVER["PHP_SELF"]);
          ?>
          
          <a class="btn btn-primary btn-lg" href="<?= $link ?>" role="button">Login</a>
        </p>
        <a href="" class="btn btn-outline-info btn-lg">Home Page</a>
      </div>
    </div>
  </div>
</div>
<footer>
  <div  style="display:flex; flex-direction: row; justify-content: center; align-items: center; gap: 30px; text-align:center;">
  Thank you for visiting our page. We hope you found the information you were looking for. Please come back soon!
  <br>
  contact & follow and join our community for more😁
  </div>
  <div style="display:flex; flex-direction: row; justify-content: center; align-items: center; gap: 30px; margin-top:40px;" >
         <a href="language__c?igshid=YmMyMTA2M2Y=">
                 <img src="./logos/instagram.png" style="width: 40px;" alt="Example">
         </a>
         <a href="https://hashnode.com/@codemanishh">
                 <img src="./logos/hashnode.png" style="width: 40px;" alt="Example">
         </a>
         <a href="www.linkedin.com/in/manish-kumar-82a8401b7/">
                 <img src="./logos/linkedin.png" style="width: 40px;" alt="Example">
         </a>
         <a href="https://t.me/servermonks">
                 <img src="./logos/teligram.png"  style="width: 60px;" alt="Example">
         </a>
         <a href="https://github.com/codemanishh">
                 <img src="./logos/github.png" style="width: 40px;" alt="Example">
         </a>

  </div>
</footer>