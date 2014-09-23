<?php require_once("sharedfunctions.tpl.php"); ?>

<div id="header">   
  <div id="headerlogo">
<a href="<?php print $front_page;?>">
  <img src="<?php print $base_path.path_to_theme();?>/images/pileofyencoins_small.png" alt="<?php print $site_name;?>" height="80" width="90" />
</a>
  </div>
  <div id="headercontent">
    <div id="headertitle">
          MoneyIQ
    </div>
    <div id="headersubtitle">
      <?php print $breadcrumb;?>
    </div>
  
  </div>
 </div>

<div id="wrapper">
    <div id="content">
      <!--
            Variables for testing:<br>
      <ul>
          <li><?php print $directory;?></li>
          <li><?php print $breadcrumb;?></li>
          <li><?php print $base_path;?></li>
      </ul>
    -->

            <?php if ($main_menu): ?>
      <?php print theme('links', $main_menu); ?>
      <?php endif; ?>
    
      <br>

      <?php print render($page['content']); ?>
    </div>

<!--
    <?php if ($page['sidebar_first']): ?>    
      <div id="sidebar">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>  
  -->
</div>

<br><br>
  <div class="whatever">
<img src="<?php print $base_path.path_to_theme();?>/images/flyingyenbills_small.jpg" align="left">
<img src="<?php print $base_path.path_to_theme();?>/images/flyingyenbillsright_small.jpg" align="right">
</div>
<div id="footer">
  <div class="footercontent">
    <table border="0" width="100%">
      <tr>
        <td colspan="6" height="15"></td>
      </tr>
      <tr>
        <td width="10%"></td>  
        <td width="20%" valign="top" algin="center">
          About
          <ul type="none">
            <li>How it works</li>
            <li>Why use MoneyIQ</li>
          </ul>
        </td>
        <td width="20%" valign="top" algin="center">
          Stay updated
          <ul type="none">
            <li>Blog</li>
            <li>Twitter</li>
            <li>Facebook</li>
            <li>Google+</li>
          </ul>
        </td>
        <td width="20%" valign="top" algin="center">
          Support
          <ul type="none">
            <li>Contact</li>
            <li>FAQ</li>
          </ul>
        </td>
        <td width="20%" valign="top" algin="center">
          Legal
          <ul type="none">
            <li>Terms of use</li>
            <li>Privacy policy</li>
          </ul>
        </td>
      </tr>
    </table>
  </div>
</div>
  <?php if ($page['footer']): ?>    
    <?php print render($page['footer']); ?>
  <?php endif; ?>  