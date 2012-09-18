<?php        defined('C5_EXECUTE') or die(_("Access Denied.")); ?> 


<div class="clear"></div>
</div> <!-- end main content -->


<div id="footer">
  <div class="left"></div>
  <div class="center">
    <div class="footer_logo"></div>
    <div class="footer_navigation">
    <?php 
      $bt = BlockType::getByHandle('autonav');
      $bt->controller->displayPages = 'top';
      $bt->controller->orderBy = 'display_asc';
      $bt->controller->displaySubPages = 'all'; 
      $bt->controller->displaySubPageLevels = 'custom';
      $bt->controller->displaySubPageLevelsNum = '0';   
      $bt->render('templates/footer_navigation');
    ?>
    </div>
    <div class="clear"></div>
    <div class="copyright">
      &copy;2012 Strong Foundation Films. All rights reserved.
    </div>
  </div>
  <div class="right"></div>
  <div class="clear"></div>
</div>



<?php
/*

    </div>
  </div>
 
</div>
  
  
  <footer>
    <?php 
    $bt = BlockType::getByHandle('autonav');
    $bt->controller->displayPages = 'top';
    $bt->controller->orderBy = 'display_asc';
    $bt->controller->displaySubPages = 'all'; 
    $bt->controller->displaySubPageLevels = 'custom';
    $bt->controller->displaySubPageLevelsNum = '0';   
    $bt->render('templates/footer_navigation');
    ?>	
  </footer> 
  
<div class="clear"></div>


</div>


<?php Loader::element('footer_required'); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5935682-15']);
  _gaq.push(['_setDomainName', 'sleepsolutionsmadeeasy.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

*/
?>

</div> <!-- /container -->

</body>
</html>