<?php
/**
 * Shortcuts element
 *
 * @copyright   2010 (c) Greenpeace International
 * @author      remy.bertot@greenpeace.org
 * @package     app.views.elements.shortcuts.ctp
 */
 $class = $this->DisplaySettings->useIcons();
?>
<?php if(!User::isGuest()): ?>
  <div id="userbadge">
    <p><?php echo __('Welcome back')?> <strong><?php echo User::get('Person.fname').' '.User::get('Person.lname').' ('.User::get('Role.name').')'; ?></strong>: </p>
    <span>
      <a href="<?php echo Router::Url('/users/preferences',true) ?>" class="preferences <?php e($class); ?>"><?php echo __('preferences',true);?></a>|
      <a href="<?php echo Router::Url('/users/logout',true) ?>" class="logout <?php e($class); ?>"><?php echo __('logout',true);?></a>
    </span>
  </div>
<?php endif; ?>