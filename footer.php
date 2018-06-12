<footer class="footer">
  <div class="container">
    <div class="row">
    <div class="footer-logo col-md-2 col-sm-12 mt-3 text-center">
      <?php  require('templates/logo_footer.php') ?>
    </div>
    <div class="col-6 col-sm-6 col-md-3 mt-3 btop">
      <ul>
        <li>SEDE MEDELLÍN</li>
        <li>Carrera 69A #92C-21</li>
        <li> PBX: 470 1010</li>
        <li> Ext. 111-129</li>
        <li> mercadeo@ecosesa.com.co </li>
      </ul>
    </div>
    <div class="col-6 col-sm-6 col-md-3 mt-3 btop">
      <ul>
        <li>Sede Apartadó</li>
        <li>Calle 102 # 111-17</li>
        <li> PBX: 828 2098</li>
        <li> Fax   828-1758</li>
        <li> ccree@ecosesa.com.co </li>
      </ul>
    </div>
    <div class="col-md-4 col-sm-12 mt-3 social-networks">
      <div class="social-container">
        <ul class="footer-social-menu">
          <li>VISITA NUESTRAS REDES SOCIALES</li>
          <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
          <li><a href=""><i class="fab fa-twitter"></i></a> </li>
          <li><a href=""><i class="fab fa-youtube"></i></a> </li>
        </ul>
      </div>
      <div class="footer-menu">
        <?php
            	$nav = wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_class' => 'app-footer__menu',
                'menu_id' => '',
                'container' => false,
                'echo' => false
              ));
    
            echo clean_menu($nav);
        ?>
      </div>

    </div>
    </div>
  </div>
  
</footer>
<!--wordpress files-->
<?php wp_footer() ?>
<!-- /wordpress files-->
<script src="<?php echo get_template_directory_uri() ?>/client/dist/vendor.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
  onLoad(function() {
    jQuery(window).on('scroll', function(e) {
      var $header = jQuery('.app-header');
      if(jQuery(window).scrollTop() > $header.height()) {
        $header.addClass('app-header--scrolling');
      } else {
        $header.removeClass('app-header--scrolling');
      }
    });
  });
</script>

<!--async load app-->
<script type="text/javascript">
function appendScript(src) {
  var element = document.createElement("script");
  element.src = src;
  document.body.appendChild(element);
}

function downloadJS (){
  [
    "<?php echo get_template_directory_uri() ?>/client/dist/client.js?v=<?php echo filemtime(get_template_directory() . '/client/dist/client.js') ?>"
  ]
  .forEach(function(src) {
    appendScript(src);
  });
}

if (window.addEventListener) {
  window.addEventListener("load", downloadJS, false);
} else if (window.attachEvent) {
  window.attachEvent("onload", downloadJS);
} else {
  window.onload = downloadJS;
}
</script>
<!--/async load app-->

<!--google rich-->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://<?php echo $_SERVER['HTTP_HOST'] ?>",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+57-031-636-1051",
    "contactType": "sales",
    "areaServed": "CO"
  },{
    "@type": "ContactPoint",
    "telephone": "+57-320-636-1051",
    "contactType": "customer service",
    "areaServed": "CO"
  }]
}
</script>

</body>
</html>
