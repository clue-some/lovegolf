<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-30 22:17:04
  from 'c:\vhosts\lovegolf\templates\modules\ch-flash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5abeb760750b01_85733417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f50e8ff0b79cf15b29a1212365cda41eec4975d' => 
    array (
      0 => 'c:\\vhosts\\lovegolf\\templates\\modules\\ch-flash.tpl',
      1 => 1403646462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abeb760750b01_85733417 (Smarty_Internal_Template $_smarty_tpl) {
?>		<div class="page_carousel">

            <div class="arrow_left"></div>

            <div class="carousel_content">
                <ul>
                    <li>
                        <div style="width: 800px;">
                        
                        	<div style="float: left; width: 450px; height: 317px; background: url(/tracker/wl/lovegolf/images/im-carousel-ch-01-a-1.gif) no-repeat 0 0; text-indent: -9999px;">
                        	
                        		<h1>Everything golf.</h1>
                        		<p>The Love Golf Blog contains lots of help, tips and advice for getting the most out of Love Golf. We'll also keep you up to date on our great products.</p>
                        		<p>You'll also find latest news from the world of golf, courtesy of BBC Sport.</p>
                        		
                        	</div>
                        	
                        	<div style="float: right; width: 350px; background: url(/tracker/wl/lovegolf/images/im-carousel-ch-01-a-2.jpg) no-repeat 0 0;">
                        	
                        		<p><img src="/tracker/wl/lovegolf/images/blank.gif" height="263" width="350" alt="Visit the Love Golf Blog" /></p>
                        		<p align="right"><a href="/blog/">&raquo; Visit the Love Golf Blog</a></p>
                        	
                        	</div>
                        	
                        	<div class="floatEnder"></div>
                        
                        </div>
                    </li>
                    <li>
                        <div style="width: 800px;">
                        
                        	<div style="float: left; width: 450px; height: 317px; background: url(/tracker/wl/lovegolf/images/im-carousel-ch-02-a-1.gif) no-repeat 0 0; text-indent: -9999px;">
                        	
                        		<h1>Time to tee off.</h1>
                        		<p>Q. What makes a round of golf even better?</p>
                        		<p>A. Getting a discount on your green fees with Love Golf and Tee Off Times!</p>
                        		<p>We have over 400 clubs offering online tee booking at discounted rates.</p>
                        		
                        	</div>
                        	
                        	<div style="float: right; width: 350px; background: url(/tracker/wl/lovegolf/images/im-carousel-ch-02-a-2.jpg) no-repeat 0 0;">
                        	
                        		<p><img src="/tracker/wl/lovegolf/images/blank.gif" height="263" width="350" alt="Search clubs with online tee booking" /></p>
                        		<p align="right"><a href="/clubs/bookable/">&raquo; Search clubs with online tee booking</a></p>
                        	
                        	</div>
                        	
                        	<div class="floatEnder"></div>
                        
                        </div>
                    </li>
                    
                </ul>

            </div>

            <div class="arrow_right"></div>
            
            <div class="floatEnder"></div>
            
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
                    
                    jQuery(document).ready(function(){
                        jQuery(function() {
                            jQuery(".carousel_content").jCarouselLite({
                                btnNext: ".arrow_right",
                                btnPrev: ".arrow_left",
                                visible: 1,
                                auto:12000,
                                speed: 700
                                // easing: "easeinout"
                            });
                        });
                    });
                    
        <?php echo '</script'; ?>
>
        <?php }
}
