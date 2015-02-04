<?php
if (!defined('VERSIONCT')) {
    die;
}
include ('admin/versioncontrol.php');
?>

<footer>
    <p class="copyright">
    <span class="pull-left">&copy; <?php echo date("Y"); ?> <?php echo $config['SITE_NAME'];?> - <?php echo $config['SITE_DESC'];?>. All Rights Reserved.</span>
    <!-- DO NOT REMOVE! LICENCE REQUIREMENT! -- START -->
    <span class="pull-right"><a href="http://redicon.eu/rumsy/" target="_blank"><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title"><?php echo SHORTNAME; ?> v<?php echo VERSIONCT; ?></span></a> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://redicon.eu" property="cc:attributionName" rel="cc:attributionURL" target="_blank">RedIcon</a> (<a rel="license" href="http://redicon.eu/rumsy/#buynow" target="_blank">License</a>)</span>
    <!-- DO NOT REMOVE! LICENCE REQUIREMENT! -- END -->

    </p>
</footer>
    <?php include "_stats.php";?>

    </body>
</html>