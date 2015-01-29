<?php
if (!defined('VERSIONCT')) {
    die;
}?>
<!-- Cache Clear -->
<div class="modal fade" id="cacheclear" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CLOSE']; ?></span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $lang['CLEAR']; ?> <?php echo $lang['CACHE']; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $lang['SUCCESS']; ?>! <?php echo $lang['CLOSE_WIN']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><?php echo $lang['CLOSE']; ?></button>
      </div>
    </div>
  </div>
</div>
<!-- Backup Clear -->
<div class="modal fade" id="backclear" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CLOSE']; ?></span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $lang['CLEAR']; ?> <?php echo $lang['BACKUP']; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $lang['SUCCESS']; ?>! <?php echo $lang['CLOSE_WIN']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><?php echo $lang['CLOSE']; ?></button>
      </div>
    </div>
  </div>
</div>
<!-- Backup Finished -->
<div class="modal fade" id="backupdone" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php echo $lang['CLOSE']; ?></span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $lang['BACKUP']; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $lang['SUCCESS']; ?>! <?php echo $lang['CLOSE_WIN']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><?php echo $lang['CLOSE']; ?></button>
      </div>
    </div>
  </div>
</div>