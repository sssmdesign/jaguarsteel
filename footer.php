<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */
namespace radiustheme\Koncrete;
?>
        <!-- Footer Area Strat Here -->
      <footer class="footer-wrap">
        <?php if ( Helper::has_footer_widget() ): ?>
          <div class="main-footer-wrap">
              <div class="container">
                  <div class="row">
                  <?php
                    for ( $i = 1; $i <= 4; $i++ ) {
                      echo '<div class="col-lg-3 col-md-6 col-sm-6 col-12">';
                      dynamic_sidebar( 'footer-'. $i );
                      echo '</div>';
                    }
                    ?>

                  </div>
              </div>
          </div>
        <?php endif ?>
        
        <?php if ( RDTheme::$options['copyright_area'] ): ?>
          <div class="footer-bottom-wrap">
              <div class="copyright">
                <?php echo wp_kses_post( RDTheme::$options['copyright_text'] );?>
              </div>
          </div>
        <?php endif; ?>
      </footer>
    </div>
    <?php wp_footer() ?>


    <a href="https://www.jaguarsteel.com/get-instant-quote/" class="item-menu-button query_popup pum-trigger bot aa" style="cursor: pointer;">
          Get A Quote        </a>

    <!-- GetButton.io widget -->
<script type="text/javascript">
(function () {
var options = {
whatsapp: "+91 9899747099", // WhatsApp number
call_to_action: "Message us", // Call to action
position: "right", // Position may be 'right' or 'left'
};
var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /GetButton.io widget -->
  </body>
</html>
