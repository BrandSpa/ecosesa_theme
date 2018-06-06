<footer class="footer">
  <div class="container">
    <div class="row">
    <div class="col-md-3 col-sm-12 text-center">
      <?php  require('templates/logo.php') ?>
    </div>
    <div class="col-md-3 col-sm-12 btop">
      <ul>
        <li>Gloria Maria Sierra Londoño</li>
        <li> Directora Ejecutiva</li>
        <li> 4701010</li>
        <li> Ext. 126-115</li>
        <li> 3174391675 </li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-12 btop">
      <ul>
        <li>Sede Administrativa Medellín</li>
        <li> Carrera 69A #92C-21</li>
        <li> PBX: 470 1010</li>
        <li> Ext. 115-126-129</li>
        <li> comunicaciones@ecosesa.org </li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-12 social-networks">
      <?php 
        include_once('templates/logo_footer.php');
      ?>
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
