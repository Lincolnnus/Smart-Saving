<!DOCTYPE html>
<html lang="en" class="en js csstransforms3d">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Shaohuan Li / Pinterest </title>
            <link rel="stylesheet" href="<?php echo base_url();?>css/pinboard_6cd463fc.css" type="text/css" media="all">
                <script type="text/javascript">window.userIsAuthenticated = true;
                    </script>
                <script type="text/javascript" src="js/jquery.min.js"></script>
                <!--<script src="js/bundle_pin_55af0956.js" type="text/javascript" charset="utf-8"></script>-->
                
                <style type="text/css">
				#zoomScroll,#zoomScroll.visible #zoom,#zoomScroll.visible .PinImage img,#zoom .PriceContainer,#zoom .PriceContainer *,#zoom .convo .ImgLink,#zoom .convo .ImgLink img,#zoom .comments .comment,#zoom #loading img{-moz-transition: all 0.22s ease-out;-webkit-transition: all 0.22s ease-out;}</style>

</head>
    <body id="CategoriesBarPage" class="hidefixed repin_memo_on">
        
        <div id="Header">
            <div class="LiquidContainer HeaderContainer" style="width: 933px;">
                
                <a href="<?php echo base_url().'index.php/promotion';?>">
				<img alt="Logo" height="50px" src="<?php echo base_url();?>images/logo3.png" style="position:relative; left:100px; heigth:50px">
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
              Fair Price
            </a>
			<a href="<?php echo base_url().'index.php/store/sid/3';?>">
              Sheng Siong
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
            
            <div id="ColumnContainer" style="margin-top: 10px; left:-70px; height: 2000px;">
          
			
<div class="feed news_locator pin" style="top: 10px; left: 400px; width: 650px;">
 <div class="section" id="UserRecommendations">
  <a href="/invites/facebook/" id="SeeAllRecommendations">See All</a>
    <h2>Giant (5 items, saving S$24)</h2>
     <a href=""><img alt="" src="<?php echo base_url();?>images/giant.gif" style="height: 100px; width: 100px;"></a>
	</div>
 </div>
 <div class="feed news_locator pin" style="top: 170px; left: 400px; width: 650px;">
 <div class="section" id="UserRecommendations">
  <a href="/invites/facebook/" id="SeeAllRecommendations">See All</a>
    <h2>Fair Price (10 items, saving S$31)</h2>
     <a href="http://pinterest.com/larryxutong/"><img alt="" src="<?php echo base_url();?>images/fairprice.jpg" style="height: 100px; width: 100px;"></a>
	<a href="http://pinterest.com/larryxutong/"><img alt="Profile picture of Larry Xu Tong" src="<?php echo base_url();?>images/Tulips.jpg" style="height: 100px; width: 100px;"></a>
</div>
 </div>
  <div class="feed news_locator pin" style="top: 330px; left: 400px; width: 650px;">
 <div class="section" id="UserRecommendations">
  <a href="/invites/facebook/" id="SeeAllRecommendations">See All</a>
    <h2>Sheng Siong (14 items, saving S$19)</h2>
     <a href=""><img alt="" src="<?php echo base_url();?>images/shengsong.jpg" style="height: 100px; width: 100px;"></a>
	 <a href=""><img alt="Profile picture of Larry Xu Tong" src="<?php echo base_url();?>images/Tulips.jpg" style="height: 100px; width: 100px;"></a>   
</div>
 </div>
   <div class="feed news_locator pin" style="top: 10px; left: 10px; width: 310px;">
 <div class="section" id="UserRecommendations">
  <a href="/invites/facebook/" id="SeeAllRecommendations">See All</a>
    <h2>Following (21 items)</h2>
     <a href=""><img alt="Profile picture of Larry Xu Tong" src="<?php echo base_url();?>images/follow.gif" style="height: 100px; width: 305px;"></a>
	
 <a href=""><img alt="Profile picture of Larry Xu Tong" src="<?php echo base_url();?>images/Tulips.jpg" style="height: 100px; width: 100px;"></a> 
</div>
 </div>
                
	               
				
				<div id="pageless-loader" style="display:none;text-align:center;width:100%;"></div>
			</div><!-- #ColumnContainer -->
            
            <!-- Paginator -->
            
            
            <!-- Infinite scroll loading indicator -->
            
            <div id="LoadingPins" style="display: block;"><img src="http://media-cache-ec6.pinterest.com/avatars/BouncingLoader.gif" alt="Pin Loader Image"><span>Fetching pins…</span></div>
            
            
        </div><!-- #wrapper -->
        
        <script type="text/javascript">
            
            BoardLayout.setup();
            Home.setup();
            
            
            GetNewPins.marker = "178173728980050511";
            GetNewPins.trigerOnScroll();
            
            
            $.pageless.settings.complete = function() {
                
                
                
                BoardLayout.newPins();
            };
            
            $(document).ready(function() {
                              // iPad with iOS 4 doesn't like the lazy load
                              var params = {'lazy':'1'};
                              if (!useLazyLoad) {
                              params['lazy'] = 0
                              }
                              
                              $('#ColumnContainer').pageless({
                                                             "totalPages": 15,
                                                             "currentPage": 1,
                                                             "loader":"LoadingPins",
                                                             "distance": 3000,
                                                             "marker": "",
                                                             "params": params
                                                             });
                              
                              if (50 > 50) {
                              $('#LoadingPins').hide();
                              }
                              
                              });
            
            
            
            $.get("/recent_activity/", function(data) {
                  if (data && $.trim(data) != "") {
                  $('#ColumnContainer .news_locator').append(data).addClass('pin')
                  .attr('data-force-col', 0).show();
                  // Setup activity feed JS support and global scope off window
                  window.activity_feed = new Home.activityFeedSupport();
                  window.activity_feed.init();
                  BoardLayout.allPins();
                  }});
            
            
            
            
            var memosEnabled = true;
            
            
            // Request the anchored memo.
            (function() {
             
             var placement = memoManager.PLACEMENTS.HOME_FEED;
             
             var showFn = function(html) {
             $('#ColumnContainer .memo').replaceWith(html);
             $('#ColumnContainer .memo').addClass('pin')
             .attr('data-force-col', 0);
             BoardLayout.allPins();
             }
             var disposeFn = function () {
             BoardLayout.flowFirstColumn();
             };
             var feedPosition = MemoPlacement.createAnchorPlacement(
                                                                    memoManager, placement, showFn, disposeFn);
             feedPosition.requestMemo();
             })();
            
            // Request the screen memo.
            
            var detectExtension = function () {
                // return 'installed', 'not_installed', 'unknown'
                if (/Chrome/.test(navigator.userAgent)) {
                    var installed = document.body.getAttribute('data-pinterest-extension-installed');
                    if (installed) {
                        return 'installed';
                    } else {
                        return 'not_installed';
                    }
                }
                return 'unknown';
            };
            
            setTimeout(function() {
                       var showScreenMemoFn = function (html) {
                       $('#screen_memo').replaceWith(html);
                       }
                       var disposeScreenMemoFn = function () {
                       }
                       var screenPosition = MemoPlacement.createAnchorPlacement(
                                                                                memoManager, memoManager.PLACEMENTS.HOME_SCREEN, showScreenMemoFn, disposeScreenMemoFn);
                       screenPosition.requestMemo({
                                                  is_windows: /Windows/.test(navigator.userAgent),
                                                  extension_installed: detectExtension()
                                                  });
                       }, 500);  // wait 500ms to make sure extension is loaded.
            
            
            
            </script>
        
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