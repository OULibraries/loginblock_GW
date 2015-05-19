<?php
/**
 * You can override this templated globally, or for specific regions.
 * user_login_block--REGION_NAME.tpl.php will work for specific instances of the block,
 * while this one will work when it's displayed inside of a panel.
 */
?>
<div id="user-login-block-container">
  <div id="user-login-block-form-fields">
    <?php print $name; // Display username field ?>
    <?php print $pass; // Display Password field ?>
    <?php print $submit; // Display submit button ?>
    <?php print $links; // Display links ?>
    <?php print $rendered; // Display hidden elements (required for successful login) ?>
  </div>
</div>
