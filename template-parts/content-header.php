<?php 
    global $post;
    $post_slug = $post->post_name;
?>
<div class="service-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 d-lg-flex">
                <ul class="list-unstyled">
                    <li class="<?php if($post_slug == 'new-home'){ echo 'active'; } ?>"><a href="https://kitchen.neshallweb.com/">All Services</a></li>
                    <li class="<?php if($post_slug == 'select-tier'){ echo 'active'; } ?>"><a href="https://kitchen.neshallweb.com/select-tier/">RTA Kitchen Cabinets</a></li>
                    <li class="<?php if($post_slug == 'free-designing'){ echo 'active'; } ?>"><a href="https://kitchen.neshallweb.com/free-designing/">Free Designing</a></li>
                    <li class="<?php if($post_slug == 'installation'){ echo 'active'; } ?>"><a href="https://kitchen.neshallweb.com/installation/">Installation</a></li>
                    <li class="<?php if($post_slug == 'interior-trim'){ echo 'active'; } ?>"><a href="https://kitchen.neshallweb.com/interior-trim/">Interior Trim</a></li>
                    <li class="<?php if($post_slug == ''){ echo 'active'; } ?>"><a href="#">Cabinet Hardware</a></li>
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