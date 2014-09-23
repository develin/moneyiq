<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
<div class="<?php print $classes; ?>">
<table border ="0">
<tr>
  <td width="200" align="left" valign="top">
      <!-- TOP LEFT -->
      <div id="ccviewtopleftbox">
        <b>Student cards</b><br>
        Compare the best credit cards and find the right deal for you - whether you're spending overseas, looking to improve your credit rating, or simply want to earn rewards.
      </div>
      <br>   
        <img src="/app/<?php print $base_path.path_to_theme();?>/images/asianwomencreditcard_200_wide.jpg">

      <div id="categorysearch">   
        <div id="categorysearchheader">Search criteria</div>
        <div id="category-searchcriteria">
          <div class="category-searchcriteria-header">Income</div>
          <div class="category-searchcriteria-content">Average student</div>

          <div class="category-searchcriteria-header">Every day usage</div>
          <div class="category-searchcriteria-content">Occasional</div>

          <div class="category-searchcriteria-header">Travel abroad</div>
          <div class="category-searchcriteria-content">Occasional</div>      
          
          <div class="category-searchcriteria-header">Cards loan usage</div>
          <div class="category-searchcriteria-content">Nearly never</div>
        </div>
      </div>
  </td>
  <td width="20"></td>
  <td>
      <!-- Main header -->
    
    <?php if ($title): ?>
    <?php print render($title_prefix); ?>
      <?php print $title; ?>
      <?php print render($title_suffix); ?>
    <?php endif; ?>
    <div align="center">
      <img src="/app/<?php print $base_path.path_to_theme();?>/images/studentbanner.png">
    </div>
    <?php if ($header): ?>
      <div class="view-header">
        <?php print $header; ?>
      </div>
    <?php endif; ?>
      <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="view-content">
      <?php print $rows; ?>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>
  </td>
</tr>
</table>

</div><?php /* class view */ ?>
