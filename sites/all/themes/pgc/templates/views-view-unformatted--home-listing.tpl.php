<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="<?php print $event_class; ?> <?php print $classes[$id]; ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>

<?php
 //print print_r(get_defined_vars());
  // If you have devel.module installed, comment the line above and uncomment the line below
  //dsm(get_defined_vars()); 
?>