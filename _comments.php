<?php
if (!defined('VERSIONCT')) {
    die;
}


if (($config['ENABLE_COMMENTS'] == 1) && ($session->logged_in)) {

$_SESSION['cururl'] = preg_replace("/\?.+/", "", 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>

    <div class="row">
	<div class="col-md-12">
<!-- COMMENTS START -->
<h2><?php echo $lang['COMMENT_TITLE']; ?></h2>

      <?php if( (isset($_GET['comment']) && ($_GET['comment'] ) == 1) ) { ?>

       <div class="errno">
           <div class="alert alert-success alert-dismissible fadeInRight animated" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
              <?php echo $lang['COMMENT_POSTED'];?>
            </div>
           </div>

      <?php } else if( (isset($_GET['comment']) && ($_GET['comment']) == 2)) {  ?>

      <div class="errno">
           <div class="alert alert-danger alert-dismissible fadeInRight animated" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
              <?php echo $lang['ERROR'];?>
            </div>
           </div>


      <?php } else if( (isset($_GET['comment']) && ($_GET['comment']) == 3)) {  ?>

      <div class="errno">
           <div class="alert alert-warning alert-dismissible fadeInRight animated" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
              <?php echo $lang['COMMENT_DELETED'];?>
            </div>
           </div>


      <?php } else if( (isset($_GET['comment']) && ($_GET['comment']) == 4)) {  ?>

      <div class="errno">
           <div class="alert alert-success alert-dismissible fadeInRight animated" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
              <?php echo $lang['SUCCESS'];?>
            </div>
           </div>


      <?php } ?>


      <form class="form-horizontal" role="form" action="admin/process.php" method="POST">
          <div class="form-group">
                      <label for="msg" class="col-md-12 control-label text-left"><?php echo $lang['COMMENT_MESSAGE']; ?></label>
                      <div class="col-md-12">
                        <textarea name="msg" id="msg" class="form-control" maxlength="250" onkeyup="countChar(this)"></textarea>
                        <div id="charNum">&nbsp;</div>
                        <?php echo $form->error("msg"); ?>
                        <input type="hidden" name="status" value="1">
                        <input type="hidden" name="subcomment" value="1">

                        <?php include ('_captcha.php');?>

                        <button class="btn btn-success col-md-12" type="submit"><?php echo $lang['COMMENT_SEND']; ?></button>
                      </div>
          </div>




      </form>

      <h3><?php echo $lang['COMMENT_LATEST']; ?></h3>
      <hr />


       <?php
        $cmt = $database->showComment($_SESSION['cururl']);

        if (!$cmt) {
          echo $lang['COMMENT_EMPTY'];
        } else {

            echo "<ul class='paging'>";

        foreach ($cmt as $value) {
            $cmt_info = $database->getUserInfo($value['user']);
            echo "<li id='comment".$value['id']."'><div class='media'>";
            echo "<a class='media-left' href='userinfo.php?user=".$cmt_info["username"]."'>";
            echo "<img src='https://www.gravatar.com/avatar/".md5( strtolower( trim($cmt_info["email"] ) ) )."?s=80' class='thumbnail' alt='Gravatar'/></a>";
            echo "<div class='media-body'>";
            echo "<h4 class='media-heading'><a class='media-left' href='userinfo.php?user=".$cmt_info["username"]."'>".$value['user']."</a></h4>";
            echo "<small>".$value['ctime']."</small>";
            echo "<p>".$value['msg']."</p>";
            echo "<div class='tools'>";


            $cmt_ider = $value['id'];

                  if(($value['status'] == 1) && ($session->logged_in) ){
                      echo "

                          <form action='admin/process.php' method='POST'>
                              <input type='hidden' name='cmt_notid' value='".$cmt_ider."'>
                              <input type='hidden' name='cmt_status' value='2'>
                              <input type='hidden' name='subcomment' value='3'>
                              <button class='btn btn-info btn-xs' type='submit'>".$lang['COMMENT_REPORT']."</button>
                          </form>

                      ";
                  }


                  if(($value['status'] == 2) && ($session->logged_in) && (!$session->isAdmin())) {
                    echo "<span class='btn btn-primary btn-xs'>".$lang['COMMENT_REPORTED']."</span>";
                    }

                  // If you want to allow users to unflag comments, comment line below
                  if(($value['status'] == 2) && ($session->isAdmin()) ) {
                  echo "

                          <form action='admin/process.php' method='POST'>
                              <input type='hidden' name='cmt_notid' value='".$cmt_ider."'>
                              <input type='hidden' name='cmt_status' value='1'>
                              <input type='hidden' name='subcomment' value='3'>
                              <button class='btn btn-warning btn-xs' type='submit'>".$lang['COMMENT_REPORTED'].": ".$value['reporter']." </button>
                          </form>

                      ";

                  }
              // If you want to allow users to delete their own comments, uncomment line below
              //    if(($session->isAdmin()) || (($session->username) == $cmt_info["username"] )){

              // If you want to allow users to delete their own comments, comment line below
              if(($session->isAdmin())){
                      echo "

                          <form action='admin/process.php' method='POST'>
                              <input type='hidden' name='cmt_delid' value='".$cmt_ider."'>
                              <input type='hidden' name='subcomment' value='2'>
                              <button class='btn btn-danger btn-xs' type='submit'>".$lang['DELETE']."</button>
                          </form>

                      ";
                  }

            echo "</div></div></div></li>";
         }

        }
        ?>
        </ul>

<?php } ?>
</div>
</div>
<!-- COMMENTS END -->