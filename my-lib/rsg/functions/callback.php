<?php

function rsgcld_callback(){

    ?>
    <div class="rsg-body rsg-padding_20 rsgcld_callback">
        <img src="<?php echo CLD_LIB;?>rsg/banner-1544x500.png" class="rsg-block">
        <hr>
        <div class="rsg-block">
            <strong class="rsg-p_18">Libraries included</strong>
            <table border=0 class="rsg-block" style="width: 100%; font-size: 15px;">
                <thead>
                    <th>Library</th> <th>Version</th> <th>JS enqueue name</th> <th> CSS enqueue name</th><th></th>
                </thead>
                <tbody>
                    <tr> <td> LITY </td> <td> 2.3.1 </td> <td> lity_js </td> <td> lity </td> 
                        <td>
                            <?php if( get_option('rsgcld_lity')==false ): ?>
                                Status: <span style="color:#a4a4a4;">Inactive</span><br><br>
                                <form method="post">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_lity_add" type="submit" value="rsgcld_lity_add">Activate</button>
                                </form>
                            <?php elseif( get_option('rsgcld_lity') ): ?>
                                Status: <span class="hightlight">Active</span><br><br>
                                <form method="post">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_lity_remove" type="submit" value="rsgcld_lity_remove">Deactivate</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="rsg-tright">
                            <a href="<?php esc_url_raw('https://sorgalla.com/lity/'); ?>" target="_blank">Link</a></td>
                        <td colspan=4>
                            <a href="<?php esc_url_raw('https://sorgalla.com/lity/'); ?>" target="_blank">https://sorgalla.com/lity/</a></td>
                    </tr>

                    <tr> <td> FONT AWESOME </td> <td> 5.6.3 </td> <td>  </td> <td> font_awesome </td> 
                        <td>Status: <span class="hightlight">Active</span></td>
                    </tr>
                    <tr>
                        <td class="rsg-tright">
                            <a href="<?php esc_url_raw('https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use/'); ?>" target="_blank">Link</a></td>
                        <td colspan=4>
                            <a href="<?php esc_url_raw('https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use/'); ?>" target="_blank">https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use/</a></td>
                    </tr>

                    <tr> <td> BOOTSTRAP </td> <td> 4.3.1 </td> <td> bs_js_4.3.1 </td> <td> bs_css_4.3.1 </td>
                        <td>
                            <?php if( get_option('rsgcld_bs')==false ): ?>
                                Status: <span style="color:#a4a4a4;">Inactive</span><br><br>
                                <form method="post">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_bs_add" type="submit" value="rsgcld_bs_add">Activate</button>
                                </form>
                            <?php elseif( get_option('rsgcld_bs') ): ?>
                                Status: <span class="hightlight">Active</span><br><br>
                                <form method="post">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_bs_remove" type="submit" value="rsgcld_bs_remove">Deactivate</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="rsg-tright">
                            <a href="<?php esc_url_raw('https://getbootstrap.com/docs/4.3/getting-started/introduction/'); ?>" target="_blank">Link</a></td>
                        <td colspan=4>
                            <a href="<?php esc_url_raw('https://getbootstrap.com/docs/4.3/getting-started/introduction/'); ?>" target="_blank">https://getbootstrap.com/docs/4.3/getting-started/introduction/</a></td>
                    </tr>

                    <tr> <td> SLICK </td> <td> 1.8.1 </td> <td> slick-css </td> <td> slick-js </td> 
                        <td>
                            <?php if( get_option('rsgcld_slick')==false ): ?>
                                Status: <span style="color:#a4a4a4;">Inactive</span><br><br>
                                <form method="post">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_slick_add" type="submit" value="rsgcld_slick_add">Activate</button>
                                </form>
                            <?php elseif( get_option('rsgcld_slick') ): ?>
                                Status: <span class="hightlight">Active</span><br><br>
                                <form method="post">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_slick_remove" type="submit" value="rsgcld_slick_remove">Deactivate</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="rsg-tright">
                            <a href="<?php esc_url_raw('http://kenwheeler.github.io/slick/'); ?>" target="_blank">Link</a></td>
                        <td colspan=4>
                            <a href="<?php esc_url_raw('http://kenwheeler.github.io/slick/'); ?>" target="_blank">http://kenwheeler.github.io/slick/</a></td>
                    </tr>

                    <tr> <td> TABLESORTER </td> <td> 2.31.1 </td> <td> rsg_tbls_js </td> <td> rsg_tbls_css </td> 
                        <td>
                            <?php if( get_option('rsgcld_tbls')==false ): ?>
                                Status: <span style="color:#a4a4a4;">Inactive</span><br><br>
                                <form method="post">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_tbls_add" type="submit" value="rsgcld_tbls_add">Activate</button>
                                </form>
                            <?php elseif( get_option('rsgcld_tbls') ): ?>
                                Status: <span class="hightlight">Active</span><br><br>
                                <form method="post">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_tbls_remove" type="submit" value="rsgcld_tbls_remove">Deactivate</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="rsg-tright">
                            <a href="<?php esc_url_raw('https://mottie.github.io/tablesorter/docs/'); ?>" target="_blank">Link</a></td>
                        <td colspan=4>
                            <a href="<?php esc_url_raw('https://mottie.github.io/tablesorter/docs/'); ?>" target="_blank">https://mottie.github.io/tablesorter/docs/</a></td>
                    </tr>
                    <tr> <td> RSG </td> <td> 0.0.3 </td> <td> rsg_js </td> <td> rsg_css </td> 
                        <td> Status: <span class="hightlight">Active</span> </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="rsg-block rsg-padding_30_0">
            <strong class="rsg-p_18 rsg-block">Functions Included</strong>
            <div class="rsg-block" style="font-size: 15px; border: 1px solid #a4a4a4; margin: 5px 1px 10px;">
                <div class="rsg-padding_10">
                    <?php
                    $choice = get_option('rsgcld_login_modal_template');
                    ?>
                    <b class="rsg-p_18 rsg-block">Login Function</b>
                    Status: <span class="hightlight">Active</span><br>
                    rsg-wp_login_toggle: <br><span style="color:#a4a4a4;">Add this class name to your link or to the container of your link. It will automatically toggle a login modal upon click.<br>You can change the template by copying from the plugin templates folder the file with <i class="hightlight">rsg-login</i> at their name to yourtheme/rsg/templates/<br>You can choose which template to use below.</span><br>
                    
                    <div class="rsg-tcenter">
                        <div class="rsg-checkboxes single-check rsg-iblock" style="padding:20px; vertical-align: top;">
                            
                            <?php if($choice == 'template-blue'): ?>
                                <a href="<?php echo CLD_LIB;?>rsg/default-login-modal.png" data-lity target="_blank" class="rsg-block">
                                    <img src="<?php echo CLD_LIB;?>rsg/default-login-modal.png" style="max-width: 300px;">
                                </a>
                                <form method="post" class="rsg-block">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_login_modal_default" type="submit" value="rsgcld_login_modal_default">Choose Default</button>
                                </form>
                            <?php else: ?>
                                <a href="<?php echo CLD_LIB;?>rsg/default-login-modal.png" data-lity target="_blank" class="rsg-block" style="padding: 2px; border: 2px solid #e39d1b;">
                                    <img src="<?php echo CLD_LIB;?>rsg/default-login-modal.png" style="max-width: 300px;">
                                </a>
                            <?php endif; ?>
                            
                        </div>
                        <div class="rsg-checkboxes single-check rsg-iblock" style="padding:20px; vertical-align: top;">

                            <?php if($choice != 'template-blue'): ?>
                                <a href="<?php echo CLD_LIB;?>rsg/blue-login-modal.png" data-lity target="_blank" class="rsg-block" style="padding: 2px;">
                                    <img src="<?php echo CLD_LIB;?>rsg/blue-login-modal.png" style="max-width: 300px;">
                                </a>
                                <form method="post" class="rsg-block">
                                    <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsgcld_login_modal_blue" type="submit" value="rsgcld_login_modal_blue">Choose Blue Template</button>
                                </form>
                            <?php else: ?>
                                <a href="<?php echo CLD_LIB;?>rsg/blue-login-modal.png" data-lity target="_blank" class="rsg-block" style="padding: 2px; border: 2px solid #e39d1b;">
                                    <img src="<?php echo CLD_LIB;?>rsg/blue-login-modal.png" style="max-width: 300px;">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="rsg-block" style="font-size: 15px; border: 1px solid #a4a4a4; margin: 5px 1px 10px;">
                <div class="rsg-padding_10">
                    <b class="rsg-p_18 rsg-block">Logout Function</b>
                    Status: <span class="hightlight">Active</span><br>
                    rsg_wp_logout_link: <br><span style="color:#a4a4a4;">Add this class name to your link or to the container of your link. It will automatically logout the user on click.
                </div>
            </div>
            <div class="rsg-block" style="font-size: 15px; border: 1px solid #a4a4a4; margin: 5px 1px 10px; ">
                <div class="rsg-padding_10">
                    <b class="rsg-p_18 rsg-block">Popup Menu Function</b>
                    Status: <span class="hightlight">Active</span><br>
                    rsg-wp_menupopup_toggle: <br><span style="color:#a4a4a4;">Add this class name to your link or to the container of your link. It will automatically toggle a menu modal upon click.<br>You can change the template by copying the file <i class="hightlight">rsg-popup_menu.php</i> from the templates folder to yourtheme/rsg/templates/</span>
                    <hr>
                    <a href="<?php echo CLD_LIB;?>rsg/screenshot-5.png" data-lity>
                        <img src="<?php echo CLD_LIB;?>rsg/screenshot-5.png" class="rsg-block" style="max-width:300px;">
                    </a>
                </div>
            </div>
            
            <div class="rsg-block" style="font-size: 15px; border: 1px solid #a4a4a4; margin: 5px 1px 10px;">
                <div class="rsg-padding_10">
                    <b class="rsg-p_18 rsg-block">Get Menu Function</b>
                    Status: <span class="hightlight">Active</span><br>
                    <span style="color:#a4a4a4;">Function Parameters:<br></span> <span class="hightlight">rsg_get_menu</span>(String Menu slug, String Menu Name, 'Menu Classname/s separated by space'); 
                    <br>
                    <span style="color:#a4a4a4;">Sample Code:<br></span> echo rsg_get_menu('primary-menu', 'Main Menu Online', 'menu-class rsg-vertical-menu-popup'); 
                </div>
            </div>
            
            <div class="rsg-block" style="font-size: 15px; border: 1px solid #a4a4a4; margin: 5px 1px 10px;">
                <div class="rsg-padding_10">
                    <b class="rsg-p_18 rsg-block">Random String Generator</b>
                    Status: <span class="hightlight">Active</span><br>
                    <span style="color:#a4a4a4;">Function:<br></span> <span class="hightlight">rsg_generate_random_string</span>(int $Length); 
                    <br>
                    <span style="color:#a4a4a4;">Sample Code:<br></span> echo rsg_generate_random_string(10); code block will generate this:<br>
                    <?php echo rsg_generate_random_string(10); ?><br>Refreshing the page will also change the generated values.<br> Contents generated are A-Z, a-z, 0-9, and special characters -_#*
                </div>
            </div>
            <div class="rsg-block" style="font-size: 15px; border: 1px solid #a4a4a4; margin: 5px 1px 10px;">
                <div class="rsg-padding_10">
                    <b class="rsg-p_18 rsg-block">Back to top Function</b>
                    <?php if( get_option('rsg_backtotop')==false ): ?>
                        Status: <span style="color:#a4a4a4;">Inactive</span><br><br>
                        <form method="post">
                            <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsg_backtotop_add" type="submit" value="rsg_backtotop">Add Back To Top Button</button>
                        </form>
                    <?php elseif( get_option('rsg_backtotop') ): ?>
                        Status: <span class="hightlight">Active</span><br><br>
                        <form method="post">
                            <button class="rsg-button_main rsg-btn_gray rsg-display-preload-onclick" name="rsg_backtotop_remove" type="submit" value="rsg_backtotop">Remove Back To Top Button</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="rsg-block rsg-padding_30_0">
            <strong class="rsg-p_18 rsg-block">RSG Stylesheet Perks</strong>
            <div class="rsg-iblock rsg-block-floats">
                <div class="rsg-padding_10">
                    <b class="rsg-p_18 rsg-block">Buttons</b>
                    <span style="color:#a4a4a4;">Hover to see effect. The text on each buttons are their classnames.</span><br>
                    <div class="rsg-padding_5" style="background: #fff; margin:1px;">
                        <span style="color:#222;">Class: rsg-button_main</span><br>
                        <span class="rsg-button_main">rsg-button_main</span>
                    </div>
                    <br>
                    <div class="rsg-padding_5" style="background: #fff; margin:1px;">
                        <span style="color:#222;">Class: rsg-button_main and rsg-btn_white</span><br>
                        <span class="rsg-button_main rsg-btn_white">rsg-button_main.rsg-btn_white</span>
                    </div>
                    <br>
                    <div class="rsg-padding_5" style="background: #fff; margin:1px;">
                        <span style="color:#222;">Class: rsg-button_main and rsg-btn_gray</span><br>
                        <span class="rsg-button_main rsg-btn_gray">rsg-button_main.rsg-btn_gray</span>
                    </div>
                    <br>
                    <div class="rsg-padding_5" style="background: #fff; margin:1px;">
                        <span style="color:#222;">Class: rsg-button_1</span><br>
                        <span class="rsg-button_1">rsg-button_1</span>
                    </div><br>
                    <div class="rsg-padding_5" style="background: #fff; margin:1px;">
                        <span style="color:#222;">Class: rsg-button_2</span><br>
                        <span class="rsg-button_2">rsg-button_2</span>
                    </div><br>
                    <div class="rsg-padding_5" style="background: #fff; margin:1px;">
                        <span style="color:#222;">Class: rsg-button_3</span><br>
                        <span class="rsg-button_3">rsg-button_3</span>
                    </div>
                </div>
            </div>
            <div class="rsg-iblock rsg-block-floats">
                <div class="rsg-padding_10">
                    <b class="rsg-p_18 rsg-block">Display Class Names</b>
                    rsg-hide: <span style="color:#a4a4a4;">display:none;</span><br>
                    rsg-block: <span style="color:#a4a4a4;">display:block; width:100%; position:relative;</span><br>
                    rsg-iblock: <span style="color:#a4a4a4;">display:inline-block; position:relative;</span><br>
                    rsg-itable: <span style="color:#a4a4a4;">display:inline-table; position:relative;</span><br>
                    rsg-tcenter: <span style="color:#a4a4a4;">text-align: center;</span><br>
                    rsg-tleft: <span style="color:#a4a4a4;">text-align: left;</span><br>
                    rsg-tright: <span style="color:#a4a4a4;">text-align: right;</span><br>
                    rsg-sticky-top: <span style="color:#a4a4a4;">position: sticky; top: 0;</span>
                </div>
            </div>
            <div class="rsg-iblock rsg-block-floats">
                <div class="rsg-padding_10">
                    <b class="rsg-p_18 rsg-block">Preloaders</b>
                    Code: <br><span style="color:#a4a4a4;">< div class="rsg-loading-container_white">< div class="rsg-loading">< div class="rsg-loading-in">< div>< div>< div></span>
                    <br>Result:
                    <div style="position:relative; overflow:hidden; width:300px; height:100px;">
                        <div class="rsg-loading-container_white"><div class="rsg-loading"><div class="rsg-loading-in"></div></div></div>
                    </div>
                    <br><br>
                    Code: <br><span style="color:#a4a4a4;">< div class="rsg-loading-container_black">< div class="rsg-loading">< div class="rsg-loading-in">< div>< div>< div></span>
                    <br>Result:
                    <div style="position:relative; overflow:hidden; width:300px; height:100px;">
                        <div class="rsg-loading-container_black"><div class="rsg-loading"><div class="rsg-loading-in"></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['rsg_backtotop_add'])){ update_option('rsg_backtotop','yes'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    elseif(isset($_POST['rsg_backtotop_remove'])){ delete_option('rsg_backtotop'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    elseif(isset($_POST['rsgcld_lity_add'])){ update_option('rsgcld_lity','yes'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    elseif(isset($_POST['rsgcld_lity_remove'])){ delete_option('rsgcld_lity'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    elseif(isset($_POST['rsgcld_bs_add'])){ update_option('rsgcld_bs','yes'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    elseif(isset($_POST['rsgcld_bs_remove'])){ delete_option('rsgcld_bs'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    elseif(isset($_POST['rsgcld_slick_add'])){ update_option('rsgcld_slick','yes'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    elseif(isset($_POST['rsgcld_slick_remove'])){ delete_option('rsgcld_slick'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    elseif(isset($_POST['rsgcld_tbls_add'])){ update_option('rsgcld_tbls','yes'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    elseif(isset($_POST['rsgcld_tbls_remove'])){ delete_option('rsgcld_tbls'); 
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }elseif( isset($_POST['rsgcld_login_modal_default']) ){
        update_option('rsgcld_login_modal_template','default');
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }elseif( isset($_POST['rsgcld_login_modal_blue']) ){
        update_option('rsgcld_login_modal_template','template-blue');
        ?> <script> (function($) { location.reload(); }(jQuery)); </script> <?php
    }
    
    

}