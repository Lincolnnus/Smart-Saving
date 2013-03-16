<!DOCTYPE html>
<html lang="en" class="en js csstransforms3d">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Smart Saving </title>
            <link rel="stylesheet" href="<?php echo base_url();?>css/pinboard_6cd463fc.css" type="text/css" media="all">

                <link href="<?php echo base_url();?>css/movingboxes.css" rel="stylesheet">
               <script src="<?php echo base_url();?>js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.carouFredSel-6.2.0-packed.js"></script>
                    <script src="<?php echo base_url();?>js/jquery.movingboxes.js"></script>
                      <script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/helper-plugins/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/helper-plugins/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/helper-plugins/jquery.transit.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
     <script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/main.js"></script>
   
                <!--<script src="js/bundle_pin_55af0956.js" type="text/javascript" charset="utf-8"></script>-->
                
                <style type="text/css">
                /* Dimensions set via css in MovingBoxes version 2.2.2+ */
    #slider1 { width: 800px; }
    #slider2 li { width: 250px; }
        #zoomScroll,#zoomScroll.visible #zoom,#zoomScroll.visible .PinImage img,#zoom .PriceContainer,#zoom .PriceContainer *,#zoom .convo .ImgLink,#zoom .convo .ImgLink img,#zoom .comments .comment,#zoom #loading img{-moz-transition: all 0.22s ease-out;-webkit-transition: all 0.22s ease-out;}
        </style>
        <script>
        $(document).ready(function() {
    getAllCategories();
    $('#slider').movingBoxes({
      /* width and panelWidth options deprecated, but still work to keep the plugin backwards compatible
      width: 500,
      panelWidth: 0.5,
      */
      startPanel   : 1,      // start with this panel
      wrap         : false,  // if true, the panel will infinitely loop
      buildNav     : true,   // if true, navigation links will be added
      navFormatter : function(){ return "&#9679;"; } // function which returns the navigation text for each panel

    });


     // put all your jQuery goodness in here.
 });
  </script>

</head>
    <body id="CategoriesBarPage" class="hidefixed repin_memo_on">
        
        <div id="Header">
            <div class="LiquidContainer HeaderContainer" style="width: 933px;">
                
                <a href="/" id="Pinterest">
				Smart Saving
				</a>
                
                <ul id="Navigation">
                    
                    
                    <li><a href="http://pinterest.com/#" class="nav" onclick="Modal.show(&#39;Add&#39;); return false">Help<span class="PlusIcon"></span></a></li>
                    
                    <li id="UserNav">
                        <a href="http://pinterest.com/lincolnnus/" class="nav"><img src="http://media-cache-ec6.pinterest.com/avatars/lincolnnus_1354711928.jpg" alt="img">Shaohuan<span></span></a>
                        <ul>
                            <li><a href="http://pinterest.com/invites/">Invite Friends</a></li>
                            <li class="beforeDivider"><a href="http://pinterest.com/invites/facebook/">Find Friends</a></li>
                            
                            <li class="divider"><a href="http://pinterest.com/lincolnnus/">Boards</a></li>
                            
                            <li><a href="http://pinterest.com/lincolnnus/pins/">Pins</a></li>
                            <li><a href="http://pinterest.com/lincolnnus/pins/?filter=likes">Likes</a></li>
                            <li class="divider"><a href="http://pinterest.com/settings/">Settings</a></li>
                            <li><a href="javascript:void(0)" onclick="Logout.logout(); return false;">Logout</a></li>
                            
                        </ul>
                    </li>
                    
                </ul>
                
                <div id="Search">
                    
                    
                   <form action="<?php echo base_url().'index.php/search';?>" method="get" class="text">
                        <input type="text" id="query" name="q" size="27" value="" placeholder="Search" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                            <button id="query_button" href=""><img src="<?php echo base_url();?>images/search.gif" alt=""></button>
                            </form>
                </div>
                
            </div>
        </div>
        
        
        
 <div id="CategoriesBar" class="profile-exp">
  <ul class="LiquidContainer HeaderContainer" style="width: 933px;">
      <li>        
        <a href="<?php echo base_url().'index.php/user';?>" class="nav selected">  
          Mylist
        </a>&nbsp;&middot;
      </li>
   <li class="submenu">
        <a href="" class="nav">
          Categories
      <span></span></a>&nbsp;&middot;
      <ul id="CategoriesDropdown">
        <li>                           
                   <span class="SubmenuColumn">
                <a href="<?php echo base_url().'index.php/category/cateid/1';?>">
                   Groceries
                </a>           
            <a href="<?php echo base_url().'index.php/category/cateid/2';?>">
              Beverages
            </a>
			<a href="<?php echo base_url().'index.php/category/cateid/3';?>">
              Snacks / Tidbits
            </a>
          </span>
          
        </li>
      </ul>
    </li>
 <li class="submenu">
        <a href="" class="nav">
          Shops
      <span></span></a>&nbsp;&middot;
      <ul id="CategoriesDropdown">
        <li>                           
            <span class="SubmenuColumn">
            <a href="<?php echo base_url().'index.php/store/sid/1';?>">
                   Giant
                </a>           
            <a href="<?php echo base_url().'index.php/store/sid/2';?>">
              Sheng Siong
            </a>
            <a href="<?php echo base_url().'index.php/store/sid/3';?>">
              Fair Price
            </a>
          </span>
          
        </li>
      </ul>
    </li>  
    <li>
      <a href="<?php echo base_url().'index.php/newest';?>" class="nav">
        Newest
      </a>&nbsp;
    </li>              
            </ul>
        </div>
                   
        <div id="wrapper" class="BoardLayout" style="width: 933px; height: 500px; opacity: 1; visibility: visible;">
            
            <div id="ColumnContainer" style="margin-top: 10px; left:-70px; height: 1000px;">
          
                <div class="pin" style="top: 0px; left: 0px; width: 350px">
                        
                    <div class="PinHolder">                       
                            <ul id="slider">
                              <?php 
                              $newest=$allPromotions["newest"];
                              for ($i=0;$i<count($newest);$i++)
                              {
                                echo '<li>
        <a href="'.base_url().'index.php/promotionDetail/pid/'.$newest[$i]->pid.'"><img width="350px" src="'.base_url().'upload/'.$newest[$i]->coverImg.'" alt="picture">
        <h2>'.$newest[$i]->title.'</h2>
        <p>more</p></a>
      </li>';}?>
    </ul><!-- end Slider #1 -->
                    </div>
                    
                    <p class="description">Math games with leprechaun "gold": dividing the gold evenly, simple addition and subtraction, etc.</p>
                    
                </div>
<div id="allCategories">	
  <?php
    $category = $allPromotions["category"];
    $promotion = $allPromotions["promotion"];
    for($i=0;$i<count($category);$i++)
    {
       echo '<div class="feed news_locator pin" style="top: '.($i*350).'px; left: 430px; width: 650px;"><div class="section" id="UserRecommendations">';
       echo '<a href="'.base_url().'index.php/category/cateid/';
       echo $category[$i]->cateid.'" id="SeeAllRecommendations">See All</a><h2>'.
       $category[$i]->cateName.'</h2> <ul id="CateSlider'.
       $i.'">';
       for ($j=0;$j<count($promotion[$i]);$j++)
      {
          echo '<li><a href="'.base_url().'index.php/promotionDetail/pid/'.$promotion[$i][$j]->pid.'"><img width ="150px" height = "150px" src="'.base_url().'upload/'.$promotion[$i][$j]->coverImg.'" alt="picture"></a></li>';
      }
        echo '</ul></div></div>';
                
    }
   ?>
</div>
                <div id="pageless-loader" style="display:none;text-align:center;width:100%;"></div>
			</div><!-- #ColumnContainer -->
            
            <!-- Paginator -->
            
            
            <!-- Infinite scroll loading indicator -->
            
            <!--<div id="LoadingPins" style="display: block;"><img src="http://media-cache-ec6.pinterest.com/avatars/BouncingLoader.gif" alt="Pin Loader Image"><span>Fetching pins…</span></div>-->
            
            
        </div><!-- #wrapper -->
        
        <div id="screen_memo"></div>
        
        
        <div id="SearchAutocompleteHolder"><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 106; top: 0px; left: 0px; display: none;"></ul></div>
        <button id="ScrollToTop" class="Button WhiteButton Indicator Offscreen" type="button">
            Scroll to Top
        </button>
        
        <script type="text/javascript">
            $(document).ready(function() {
                              
                              if (top != self) {
                              $('body').html('<h1>Unauthorized</h1>')
                              }
                              });
            </script>
        
        
        <div id="ErrorDialog" class="ModalContainer alertBox">
            <div class="modal">
                <div class="closeBtn closeButton">&nbsp;</div>
                <div class="message"></div>
                <div class="footer">
                    <button class="Button RedButton Button18 closeButton" type="button">Close</button>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
        
        <div id="ConfirmationDialog" class="ModalContainer alertBox">
            <div class="modal">
                <div class="closeBtn closeButton">&nbsp;</div>
                <h2>Confirmation</h2>
                <div class="message"></div>
                <div class="footer">
                    <button class="Button RedButton Button18 okButton confOkButton" type="button">Ok</button>
                    <button class="Button RedButton Button18 okButton confOkButton2 hidden" type="button"></button>
                    <button class="Button WhiteButton Button18 closeButton confCloseButton" type="button">Cancel</button>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
        
    </body>
</html>