<?php 
    global $post;
    $post_slug = $post->post_name;
?>
<div class="service-menu">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 d-flex">
          <ul class="list-unstyled">
            <li class="<?php if($post_slug == 'select-tier'){ echo 'active'; } ?>"><a href="https://kitchen.neshallweb.com/select-tier/">Select Tier</a></li>
            <li class="<?php if($post_slug == 'select-cabinate'){ echo 'active'; } ?>"><a href="https://kitchen.neshallweb.com/select-cabinate/">Select Cabinets</a></li>
            <li class="<?php if($post_slug == ''){ echo 'active'; } ?>"><a href="">Select Add-ons</a></li>
            <li class="<?php if($post_slug == 'checkout'){ echo 'active'; } ?>"><a href="https://kitchen.neshallweb.com/checkout/">Checkout</a></li>
          </ul>
          <div class="call-detail">
            <div class="call-icon"><i class="fas fa-phone-alt"></i></div>
            <div class="call-number">
              <a href="#">+1 (854) 123-9870</a>
              <span>Monday to Friday</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>