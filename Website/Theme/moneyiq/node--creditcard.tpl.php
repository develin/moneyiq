<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
require_once("sharedfunctions.tpl.php");


?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php //print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
  <!--
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    -->
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
  <div class="content"<?php print $content_attributes; ?>>
  <?php if ($teaser): ?>
  <?php 
    // format for teaser
      // We hide a lot of fields so we can handle them manually
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_company']);
      hide($content['field_picture']);
      hide($content['field_visa']);
      hide($content['field_master']);
      hide($content['field_jcb']);
      hide($content['field_amex']);
      hide($content['field_diners']);
      hide($content['field_card_name']);
      hide($content['field_minus_1']);  
      hide($content['field_minus_2']);  
      hide($content['field_minus_3']);
      hide($content['field_plus_1']);
      hide($content['field_plus_2']);
      hide($content['field_plus_3']);
      hide($content['field_totalvalue']);
      hide($content['field_pointrate']);
      hide($content['field_point_validity']);
      hide($content['field_initial_fee']);
      hide($content['field_yearly_fee']);
      hide($content['field_milage_airline']);
      hide($content['field_milage_percentage']);
      hide($content['field_cardload_rate']);
      hide($content['field_card_loan_max_amount']);
      hide($content['field_user_rating']);
  ?>
    <div>
<H2 class="teasersave">Save* <?php print number_format(getfieldvalue($node,'field_totalvalue'),0,".",","); ?>円</H2>
      <div class="floatleft">
<!--    <table> -->

<table class="teasertable" height="650">
    <tr>
      <td align="center" height="60" valign="center" colspan="2" class="teaser-table-field-outline">
        <a href="<?php print $node_url; ?>">
          <?php print render($content['field_picture']); ?>
        </a>
      </td>      
    </tr>
        <tr>
        <td align="center" height="10" colspan="2" class="teaser-table-field-outline">
            <h3 class="teasercreditcardtitle"><?php print getfieldvalue($node,'field_company' ) . " " . getfieldvalue($node,'field_card_name'); ?>
              </h3>
        </td>
    </tr>
   <!--
       <tr>
      <td align="center" height="60" valign="center">

   <table class="teasertable" height="550">-->
    <tr>
        <td colspan="2" valign="top" height="70" class="teaser-table-field-outline">      
          <div class="teasertablefieldheader plus">
              Great for
          </div>
          <?php
            print getpluspoints($content, $node);
          ?>        
        </td>
        </tr>
    </tr>
    <tr>
        <td colspan="2" valign="top" height="70"  class="teaser-table-field-outline">
        <div class="teasertablefieldheader minus">
          Be aware of
          </div>
          <?php
            print getminuspoints($content, $node);
          ?>            
        </td>
        </tr>
    </tr>
    <tr class="teaser-table-field-outline" height="25" valign="middle">
      <td colspan="2" valign="top" class="teaser-table-field-generalheader">
          Yearly fees
      </td>
    </tr>
     <tr height="35">
      <td valign="top" class="teaser-table-field-outline" width="50%">
          <?php print render($content['field_initial_fee']); ?>
      </td>
      <td valign="top" class="teaser-table-field-outline" width="50%">
          <?php print render($content['field_yearly_fee']); ?>
      </td>
    </tr>
    <tr class="teaser-table-field-outline" height="25" valign="middle">
      <td colspan="2" valign="top" class="teaser-table-field-generalheader">
          Bonus point system
      </td>
    </tr>
     <tr height="35">
      <td valign="top" class="teaser-table-field-outline" width="50%">
          <?php print render($content['field_pointrate']); ?>
      </td>
      <td valign="top" class="teaser-table-field-outline" width="50%">
          <?php print render($content['field_point_validity']); ?>
      </td>
    </tr>

    <tr class="teaser-table-field-outline" height="25" valign="middle">
      <td colspan="2" valign="top" class="teaser-table-field-generalheader">
          Other bonus systems
      </td>
    </tr>
     <tr height="35">
      <td valign="top" class="teaser-table-field-outline" width="50%">
          <?php print render($content['field_milage_airline']); ?>
      </td>
      <td valign="top" class="teaser-table-field-outline" width="50%">
          <?php print render($content['field_milage_percentage']); ?>
      </td>
    </tr>

    <tr class="teaser-table-field-outline" height="25" valign="middle">
      <td colspan="2" valign="top" class="teaser-table-field-generalheader">
          Credit Card loan
      </td>
    </tr>
     <tr height="35">
      <td valign="top" class="teaser-table-field-outline" width="50%">
          <?php print render($content['field_cardload_rate']); ?>
      </td>
      <td valign="top" class="teaser-table-field-outline" width="50%">
          <?php print render($content['field_card_loan_max_amount']); ?>
      </td>
    </tr>

    <tr class="teaser-table-field-outline" height="25" valign="middle">
      <td colspan="2" valign="top" class="teaser-table-field-generalheader">
          Conclusion
      </td>
    </tr>
     <tr height="100">
      <td valign="top" class="teaser-table-field-outline" colspan="2">
          <?php print render($content['field_conclusion']); ?>
      </td>
    </tr>

<!--
    <tr class="teaser-table-field-outline" height="25" valign="middle">
      <td colspan="2" valign="top" class="teaser-table-field-generalheader">
          Conclusion
      </td>
    </tr>
-->
     <tr height="30">
      <td valign="top" class="teaser-table-field-outline" colspan="2" align="center">
          <?php print render($content['field_user_rating']); ?>
      </td>
    </tr>

    
    <tr>
      <td colspan="2" valign="top">
      <?php            
      print render($content);
      ?>
      </td>
      </tr>
  </table>
<!--
      </td>
      </tr>
  </table>
-->
</div>
<div class="floatleft">
  <table border="0" width="32">
  <tr>
  <td valign="top">
        <?php print renderCCImage($content, $node); ?>
      </td>
      </tr>
    </table>
  </div>
</div>
<?php else: ?>
  <?php
  //formating for full content nodesdd
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>

<?php endif; ?>
  </div>
<!--
  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>
-->
</div>
