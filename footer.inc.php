<?php
if (!defined('VERSIONCT')) {
    die;
}
include ('admin/versioncontrol.php');
?>

<footer><hr />
    <p class="copyright">
    &copy; <?php echo date("Y"); ?> <?php echo $config['SITE_NAME'];?> - <?php echo $config['SITE_DESC'];?>. All Rights Reserved.
    <br />
    <!-- DO NOT REMOVE! LICENCE REQUIREMENT! -- START -->
    <a href="http://redicon.eu/"><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title"><?php echo SHORTNAME; ?> (v<?php echo VERSIONCT; ?>)</span></a> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://redicon.eu" property="cc:attributionName" rel="cc:attributionURL">RedIcon</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a><br />
    <!-- DO NOT REMOVE! LICENCE REQUIREMENT! -- END -->

    </p>
</footer>
    <?php include "_stats.php";?>

    </body>
</html>