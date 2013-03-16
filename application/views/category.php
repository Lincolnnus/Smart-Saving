<!DOCTYPE html>
<html lang="en" class="en js csstransforms3d"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Shaohuan Li / Pinterest </title>
            <link rel="stylesheet" href="<?php echo base_url();?>css/pinboard_6cd463fc.css" type="text/css" media="all">
                <script type="text/javascript">window.userIsAuthenticated = true;
                    </script>
                <script type="text/javascript" src="js/jquery.min.js"></script>
                <script src="js/bundle_pin_55af0956.js" type="text/javascript" charset="utf-8"></script>
                
                <style type="text/css">#zoomScroll,#zoomScroll.visible #zoom,#zoomScroll.visible .PinImage img,#zoom .PriceContainer,#zoom .PriceContainer *,#zoom .convo .ImgLink,#zoom .convo .ImgLink img,#zoom .comments .comment,#zoom #loading img{-moz-transition: all 0.22s ease-out;-webkit-transition: all 0.22s ease-out;}</style>
</head>
    <body id="CategoriesBarPage" class="hidefixed repin_memo_on">
        
      <div id="Header" style="height:80px;">
            <div class="LiquidContainer HeaderContainer" style="width: 933px;">
                
                <a href="<?php echo base_url().'index.php/promotion';?>" id="Pinterest">
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
        
        
   
        <div id="Repin" class="ModalContainer">
            
            <div class="modal wide PostSetup">
                
                <div class="ImagePicker">
                    <img src="http://media-cache-ec6.pinterest.com/avatars/load2.gif" class="load" alt="Loading Indicator">
                        <div class="Images pin">
                            <div class="price"></div>
                            
                            <ul>
                                
                                <li><img src="http://media-cache-ec6.pinterest.com/avatars/DefaultPin.gif" alt="Media"></li>
                                
                            </ul>
                        </div>
                        <div class="Arrows">
                            <a href="http://pinterest.com/#" class="imagePickerNext picker">
                                
                                Next →<span class="imagePickerNextArrow"></span>
                            </a>
                            <a href="http://pinterest.com/#" class="imagePickerPrevious picker">
                                
                                ← Prev<span class="imagePickerPreviousArrow"></span>
                            </a>
                        </div>
                </div>
                
                <div class="PinForm">
                    
                    <div class="BoardListOverlay"></div>
                    
                    
                    <div class="BoardPicker  ">
                        <div class="current">
                            <span class="CurrentBoard">Test</span>
                            <span class="CurrentBoardStatus "></span>
                            <span class="DownArrow"></span>
                        </div>
                        <div class="BoardList">
                            <div class="wrapper">
                                <ul class="BoardListUl">
                                    
                                    <li data="332985034887681179">
                                        <span>Test</span>
                                        
                                        
                                        
                                    </li>
                                    
                                </ul>
                                
                                <div class="CreateBoard">
                                    <input name="title" type="text" class="BoardName" value="Create New Board">
                                        <button class="Button WhiteButton Button18 noFloat" type="button">Create</button>
                                        
                                        <div class="CreateBoardStatus"></div>
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="InputArea">
                        <ul class="Form FancyForm ControlGroups">
                            <li class="noMarginBottom">
                                <textarea class="DescriptionTextarea" data-text-error-empty="Please enter a description." rows="2" name="caption"></textarea>
                                <label>Describe your pin…</label>
                                <span class="fff"></span>
                            </li>
                        </ul>
                        <p class="CharacterHelp">Type <strong>@</strong> to mention people, <strong>$</strong> or <strong>£</strong> to add price.</p>
                    </div>
                    
                    <div class="CreateBoardStatus error mainerror"></div>
                    
                    <div class="Buttons">
                        <button class="Button Button18 RedButton" data-text-pin-it="Pin It" data-text-pinning="Pinning…" type="button">Pin It</button>
                        <span class="CharacterCount colorless">500</span>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <script type="text/javascript">
                            $(function() {
                              $("#publish_to_facebook").click(function() {
                                                              Facebook.startFacebookConnect('publish_stream', false, false);
                                                              });
                              });
                            </script>
                        
                        <label class="facebook colorless" style="display:block">
                            <input id="publish_to_facebook" type="checkbox" name="publish_to_facebook" class="publish_to_facebook">
                                <span>Facebook</span>
                                </label>
                        
                        
                    </div>
                    
                </div>
                
                <script type="text/javascript">
                    $(window).ready(function() {
                                    $('.PinForm .Buttons a.RedButton').click(function() {
                                                                             $('.PinForm .Buttons .CharacterCount').hide();
                                                                             });
                                    });
                    </script>
                
                <form action="" id="repinform" method="post">
                    <input type="hidden" name="board" id="repin_board" value="332985034887681179">
                        <input type="hidden" name="id" id="repin_pin_id">
                            <input type="hidden" name="tags" id="repin_tags">
                                <input type="hidden" name="replies" id="repin_comment_replies">
                                    <input type="hidden" name="details" id="repin_details" value="">
                                        <input type="hidden" name="buyable" id="repin_currency_holder">
                                            
                                            
                                            <input type="checkbox" name="publish_to_facebook" id="id_publish_to_facebook">
                                                
                                                
                                                
                                                <div style="display:none"><input type="hidden" name="csrfmiddlewaretoken" value="BKsPrJKoJPmgLRjwldmCf6lfuUsZpelH"></div>
                                                </form>
                
            </div><!-- .modal.wide.PostSetup -->
            
            <div class="modal wide PostSuccess">
                <input type="hidden" name="board" id="repin_success_board_id">
                    
                    Repinned to <span><a href="http://pinterest.com/#" class="BoardLink"></a><img src="http://media-cache-ec6.pinterest.com/avatars/lock_medium.png" alt="This board is secret. Only you can see this pin." class="repin_lock_icon"></span>.
                    <br>
                    <span class="repin_share_with_followers_msg"> Shared with your followers. </span>
                    
                    <a href="http://pinterest.com/#" class="PinLink">See it now</a>.
                    
                    <div class="suggestion" style="display:none">
                        <h4 class="colorless">Also pinned to:</h4>
                        <div class="boardHolder"></div>
                    </div>
                    
                    </div><!-- .modal.wide.PostSuccess -->
            
            <div class="overlay"></div>
            
        </div><!-- #Repin.ModalContainer -->
        <div id="ScrapePin" class="ModalContainer">
            
            <div class="modal wide">
                
                <div class="header lg">
                    <a href="http://pinterest.com/#" class="close" onclick="AddDialog.childClose(&#39;Add&#39;,&#39;ScrapePin&#39;); return false"><strong>Close</strong><span></span></a>
                    <h2>Add a Pin</h2>
                </div>
                
                <div class="PinTop inputHolder scrapePin">
                    <button id="ScrapeButton" class="Button WhiteButton Button18">Find Images</button>
                    <ul class="Form FancyForm GontrolGroups">
                        <li>
                            <img src="http://media-cache-ec6.pinterest.com/avatars/load2.gif" class="load" alt="Loading Indicator">
                                <input id="ScrapePinInput" type="text">
                                    <label>http://</label>
                                    <span class="fff"></span>
                                    </li>
                    </ul>
                </div>
                
                <div class="PinBottom">
                    <div class="ImagePicker">
                        <img src="http://media-cache-ec6.pinterest.com/avatars/load2.gif" class="load" alt="Loading Indicator">
                            <div class="Images pin">
                                <div class="price"></div>
                                
                                <ul>
                                    
                                    <li><img src="http://media-cache-ec6.pinterest.com/avatars/DefaultPin.gif" alt="Media"></li>
                                    
                                </ul>
                            </div>
                            <div class="Arrows">
                                <a href="http://pinterest.com/#" class="imagePickerNext picker">
                                    
                                    Next →<span class="imagePickerNextArrow"></span>
                                </a>
                                <a href="http://pinterest.com/#" class="imagePickerPrevious picker">
                                    
                                    ← Prev<span class="imagePickerPreviousArrow"></span>
                                </a>
                            </div>
                    </div>
                    
                    <div class="PinForm">
                        
                        <div class="BoardListOverlay"></div>
                        
                        
                        <div class="BoardPicker  ">
                            <div class="current">
                                <span class="CurrentBoard">Test</span>
                                <span class="CurrentBoardStatus "></span>
                                <span class="DownArrow"></span>
                            </div>
                            <div class="BoardList">
                                <div class="wrapper">
                                    <ul class="BoardListUl">
                                        
                                        <li data="332985034887681179">
                                            <span>Test</span>
                                            
                                            
                                            
                                        </li>
                                        
                                    </ul>
                                    
                                    <div class="CreateBoard">
                                        <input name="title" type="text" class="BoardName" value="Create New Board">
                                            <button class="Button WhiteButton Button18 noFloat" type="button">Create</button>
                                            
                                            <div class="CreateBoardStatus"></div>
                                            </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="InputArea">
                            <ul class="Form FancyForm ControlGroups">
                                <li class="noMarginBottom">
                                    <textarea class="DescriptionTextarea" data-text-error-empty="Please enter a description." rows="2" name="caption"></textarea><div class="tagmate-menu" style="position: absolute; display: none;"></div>
                                    <label>Describe your pin…</label>
                                    <span class="fff"></span>
                                </li>
                            </ul>
                            <p class="CharacterHelp">Type <strong>@</strong> to mention people, <strong>$</strong> or <strong>£</strong> to add price.</p>
                        </div>
                        
                        <div class="CreateBoardStatus error mainerror"></div>
                        
                        <div class="Buttons">
                            <button class="Button Button18 RedButton" data-text-pin-it="Pin It" data-text-pinning="Pinning…" type="button">Pin It</button>
                            <span class="CharacterCount colorless">500</span>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <script type="text/javascript">
                                $(function() {
                                  $("#publish_to_facebook").click(function() {
                                                                  Facebook.startFacebookConnect('publish_stream', false, false);
                                                                  });
                                  });
                                </script>
                            
                            <label class="facebook colorless" style="display:block">
                                <input id="publish_to_facebook" type="checkbox" name="publish_to_facebook" class="publish_to_facebook">
                                    <span>Facebook</span>
                                    </label>
                            
                            
                        </div>
                        
                    </div>
                    
                    <script type="text/javascript">
                        $(window).ready(function() {
                                        $('.PinForm .Buttons a.RedButton').click(function() {
                                                                                 $('.PinForm .Buttons .CharacterCount').hide();
                                                                                 });
                                        });
                        </script>
                </div>
                
                <form method="POST">
                    <input type="hidden" name="board" id="id_board" value="332985034887681179">
                        <input type="hidden" name="details" value="" id="id_details">
                            <input type="hidden" name="link" value="" id="id_link">
                                <input type="hidden" name="img_url" id="id_img_url">
                                    <input type="hidden" name="tags" id="id_tags">
                                        <input id="peeps_holder" type="hidden" name="replies">
                                            <input id="currency_holder" type="hidden" name="buyable">
                                                
                                                
                                                <input type="checkbox" name="publish_to_facebook" id="id_publish_to_facebook" style="display:none;">
                                                    
                                                    
                                                    
                                                    <div style="display:none"><input type="hidden" name="csrfmiddlewaretoken" value="BKsPrJKoJPmgLRjwldmCf6lfuUsZpelH"></div>
                                                    </form>
                
            </div><!-- .modal.wide -->
            
            <div class="overlay"></div>
            
        </div><!-- #ScrapePin.ModalContainer -->
        <div id="UploadPin" class="ModalContainer">
            
            <div class="modal wide">
                
                <div class="header lg">
                    <a href="http://pinterest.com/#" class="close" onclick="AddDialog.childClose(&#39;Add&#39;,&#39;UploadPin&#39;); return false"><strong>Close</strong><span></span></a>
                    <h2>Upload a Pin</h2>
                </div>
                
                <div class="PinTop">
                    <form action="http://pinterest.com/post/" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="board" id="id_board" value="332985034887681179">
                            <input type="hidden" name="details" value="" id="id_details">
                                <input type="hidden" name="link" value="" id="id_link">
                                    <input type="hidden" name="img_url" id="id_img_url">
                                        <input type="hidden" name="tags" id="id_tags">
                                            <input id="peeps_holder" type="hidden" name="replies">
                                                <input id="currency_holder" type="hidden" name="buyable">
                                                    <input type="file" name="img">
                                                        
                                                        
                                                        <input type="checkbox" name="publish_to_facebook" id="id_publish_to_facebook" style="display: none;">
                                                            
                                                            
                                                            
                                                            <div style="display:none"><input type="hidden" name="csrfmiddlewaretoken" value="BKsPrJKoJPmgLRjwldmCf6lfuUsZpelH"></div>
                                                            </form>
                </div>
                
                <div class="PinBottom">
                    <div class="ImagePicker">
                        <img src="http://media-cache-ec6.pinterest.com/avatars/load2.gif" class="load" alt="Loading Indicator">
                            <div class="Images pin">
                                <div class="price"></div>
                                
                                <ul>
                                    
                                    <li><img src="http://media-cache-ec6.pinterest.com/avatars/DefaultPin.gif" alt="Media"></li>
                                    
                                </ul>
                            </div>
                            <div class="Arrows">
                                <a href="http://pinterest.com/#" class="imagePickerNext picker">
                                    
                                    Next →<span class="imagePickerNextArrow"></span>
                                </a>
                                <a href="http://pinterest.com/#" class="imagePickerPrevious picker">
                                    
                                    ← Prev<span class="imagePickerPreviousArrow"></span>
                                </a>
                            </div>
                    </div>
                    
                    <div class="PinForm">
                        
                        <div class="BoardListOverlay"></div>
                        
                        
                        <div class="BoardPicker  ">
                            <div class="current">
                                <span class="CurrentBoard">Test</span>
                                <span class="CurrentBoardStatus "></span>
                                <span class="DownArrow"></span>
                            </div>
                            <div class="BoardList">
                                <div class="wrapper">
                                    <ul class="BoardListUl">
                                        
                                        <li data="332985034887681179">
                                            <span>Test</span>
                                            
                                            
                                            
                                        </li>
                                        
                                    </ul>
                                    
                                    <div class="CreateBoard">
                                        <input name="title" type="text" class="BoardName" value="Create New Board">
                                            <button class="Button WhiteButton Button18 noFloat" type="button">Create</button>
                                            
                                            <div class="CreateBoardStatus"></div>
                                            </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="InputArea">
                            <ul class="Form FancyForm ControlGroups">
                                <li class="noMarginBottom">
                                    <textarea class="DescriptionTextarea" data-text-error-empty="Please enter a description." rows="2" name="caption"></textarea><div class="tagmate-menu" style="position: absolute; display: none;"></div>
                                    <label>Describe your pin…</label>
                                    <span class="fff"></span>
                                </li>
                            </ul>
                            <p class="CharacterHelp">Type <strong>@</strong> to mention people, <strong>$</strong> or <strong>£</strong> to add price.</p>
                        </div>
                        
                        <div class="CreateBoardStatus error mainerror"></div>
                        
                        <div class="Buttons">
                            <button class="Button Button18 RedButton" data-text-pin-it="Pin It" data-text-pinning="Pinning…" type="button">Pin It</button>
                            <span class="CharacterCount colorless">500</span>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <script type="text/javascript">
                                $(function() {
                                  $("#publish_to_facebook").click(function() {
                                                                  Facebook.startFacebookConnect('publish_stream', false, false);
                                                                  });
                                  });
                                </script>
                            
                            <label class="facebook colorless" style="display:block">
                                <input id="publish_to_facebook" type="checkbox" name="publish_to_facebook" class="publish_to_facebook">
                                    <span>Facebook</span>
                                    </label>
                            
                            
                        </div>
                        
                    </div>
                    
                    <script type="text/javascript">
                        $(window).ready(function() {
                                        $('.PinForm .Buttons a.RedButton').click(function() {
                                                                                 $('.PinForm .Buttons .CharacterCount').hide();
                                                                                 });
                                        });
                        </script>
                </div>
                
            </div><!-- .modal.wide -->
            
            <div class="overlay"></div>
            
        </div><!-- #UploadPin.ModalContainer -->
        <span id="create-board-dialog-container"></span>
        <div id="CaptchaDialog" class="ModalContainer">
            
            <div class="modal wide">
                
                <div class="header lg">
                    <a href="http://pinterest.com/#" class="close" onclick="Modal.close(&#39;CaptchaDialog&#39;); return false"><strong>Close</strong><span></span></a>
                    <h2>Are You a Human?</h2>
                </div>
                
                <div>
                    <div id="Captcha"></div>
                </div>
                
                <div class="footer lg">
                    <button class="Button RedButton Button18" type="button">Submit</button>
                    <span class="error"></span>
                </div>
                
            </div>
            
            <div class="overlay"></div>
            
        </div><!-- #Captcha.ModalContainer -->
        
        <script type="text/javascript">
            $(document).ready(function(){
                              ScrapePinDialog.setup();
                              UploadPinDialog.setup();
                              FancyForm.setup();
                              });
            </script>
        
        <button id="NewIndicator" class="Button WhiteButton Offscreen Indicator" onclick="GetNewPins.showNewPins(); return false"></button>
        
        
        
        <div id="wrapper" class="BoardLayout" style="width: 933px; opacity: 1; visibility: visible;">
            
            <div id="ColumnContainer" style="margin-top: 49px; height: 5059px;">
                
                <div id="memo_2" class="memo memo_header_only pin" data-force-col="0" style="top: 0px; left: 0px;" data-col="0">
                    
                    <style>
                        
                        .repin_memo_on .actions .repin_link {background-color: #000000; background-image: none; display: block; opacity: 0.3; -ms-filter:"prodid:DxImageTransform.Microsoft.Alpha(opacity=30)"; filter: alpha(opacity=30);}
                        .repin_memo_on .pin:hover .actions .repin_link {opacity: 1.0; -webkit-transition: none; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fdfafb', endColorstr='#f0eded');}
                        .repin_memo_on .actions .repin_link span {visibility: hidden; border: 0;}
                        .repin_memo_on .pin:hover .actions .repin_link span {visibility: visible;}
                        .repin_memo_on .actions .repin_link em {visibility: hidden;}
                        .repin_memo_on .pin:hover .actions .repin_link em {visibility: visible;}
                        .repin_memo_show_button .actions .repin_link {display: block;}
                        .repin_memo_repin_word {font-weight: bold;}
                        </style>
                    
                    <div class="memo_close">×</div>
                    <div class="memo_header">
                        <div class="memo_title">
                            
                            Follow!
                            
                        </div>
                        <div class="memo_call_to_action">
                            
                            Looking forward to some specific promotion click FOLLOW button below to add it to your following list.
                            
                        </div>
                    </div>
                    <div class="memo_bottom">
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                </div>
                
                <div class="feed news_locator pin" style="top: 108px; left: 0px;" data-force-col="0" data-col="0">
                    
                    
                    <div class="section" id="UserRecommendations">
					 
                  
							<h2> <?php
                    switch($promotion[0]->cateid)
                    {
                        case 1:
                        echo "Groceries";
                        break;
                        case 2:
                        echo "Beverages";
                        break;
                        case 3:
                        echo "Snacks";
                        break;

                    }?>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<a class="Button Button11 RedButton followuserbutton" data-elementtype="SUGGESTED_USER" data-text-follow="Follow" data-text-unfollow="Unfollow" href="<?php echo base_url().'index.php/follow/1/'.$promotion[0]->cateid;?>">
                               Follow
                            </a></h2>
                       
                        
                        
                        <span class="story nohover FollowStory" id="follow-255509116267531024" data-user-id="255509116267531024">
                           

                            
                         
                                <a href="http://pinterest.com/sclrax/"><img alt="Profile picture of Rax Suen" src="
                            <?php
                    echo base_url().'images/';
                    switch($promotion[0]->cateid)
                    {
                        case 1:
                        echo "groceries.jpg";
                        break;
                        case 2:
                        echo "beveragies.jpg";
                        break;
                        case 3:
                        echo "snacks.jpg";
                        break;

                    }?>" style="height:100px; width:100px;" data-elementtype="SUGGESTED_USER"></a>
                            
                        </span>
                        
                        
                    </div>
                </div>              
                
               
            <?php

           // var_dump($promotion[0]);
            for ($i=0;$i<count($promotion);$i++)
            {
                echo 
                '
                <div class="pin" data-id="178173728980050005" data-closeup-url="http://media-cache-ec3.pinterest.com/550x/8b/2b/c7/8b2bc7820487be973d5bd9e1f585ba14.jpg" data-width="500" data-height="375" style="top:';echo ((int)($i/4))*350; echo 'px; left:'; echo (($i%4)*250+250); echo 'px;" data-col="2">
                    
                    
                    <div class="PinHolder">
                        
                        <div class="actions">
                            
                            <a class="Button Button11 WhiteButton ContrastButton repin_link" data-componenttype="MODAL_REPIN" data-id="178173728980050005" href="http://pinterest.com/pin/178173728980050005/repin/">
                                <em></em><span>Share</span>
                            </a>
                            
                            
                            
                            <a class="Button WhiteButton ContrastButton Button11 likebutton" data-id="178173728980050005" data-text-like="Like" data-text-unlike="Unlike" href="http://pinterest.com/#">
                                <em></em>Like
                            </a>
                            
                            
                            
                            <a class="Button Button11 WhiteButton ContrastButton comment" data-id="178173728980050005" href="http://pinterest.com/#">
                                <em></em>Add
                            </a>
                            
                        </div>
                        
                        
                        
                        
                        
                        
                        <a href="'; echo base_url().'index.php/promotionDetail/pid/'.$promotion[$i]->pid; echo'" class="PinImage ImgLink">
                            
                            
                            
                            
                            
                            <img src="';
                            echo base_url().'upload/'.$promotion[$i]->coverImg;

                            echo '" alt="Using manipulatives and a play mat to learn about writing number sentences- This Reading Mama" data-componenttype="MODAL_PIN" class="PinImageImg" style="height: 144px;">
                                
                                
                                
                                
                                
                                
                                </a>
                    </div>
                    
                    
                    
                    
                    
                    <p class="description">Usual Price:S$'; echo $promotion[$i]->usualPrice; echo'</p>
                    <p class="description">Offer Price:S$'; echo $promotion[$i]->discountPrice; echo'</p>                    
                    <p class="description">Period: '; echo $promotion[$i]->startDate.'--'.$promotion[$i]->endDate; 
                    echo'</p> 
                    
                    
                    
                    
                    
                    
                    
                    <p class="stats colorless">
                    <span class="LikesCount">
                        
                        ';
                        echo $promotion[$i]->numberofLikes;

                         echo'likes
                        
                    </span>
                    
                    
                    </p>
                    
                    
                    
                    
                    
                    
                    <div class="convo attribution clearfix">
                        
                        
                        <a href="http://pinterest.com/thisreadingmama/" title="FairPrice" class="ImgLink">
                            <img src="'.base_url().'images/';
                    switch($promotion[$i]->sid)
                    {
                        case 1:
                        echo "giant.gif";
                        break;
                        case 2:
                        echo "shengsong.jpg";
                        break;
                        case 3:
                        echo "fairprice.jpg";
                        break;

                    }
                    echo '" alt="fairprice" >
                                </a>
                        <p class="NoImage">
                        
                        Provided by<a href="http://pinterest.com/thisreadingmama/"> ';
                        switch($promotion[$i]->sid)
                    {
                        case 1:
                        echo "Giant";
                        break;
                        case 2:
                        echo "Sheng Siong";
                        break;
                        case 3:
                        echo "Fair Price";
                        break;

                    }
                    echo '</a> 
                            
                            
                            
                            </p>
                            
                            </div>
                    
                    
                    
                    
                    
                    
                    <div class="write convo clearfix" style="display: none;">
                        <a href="http://pinterest.com/lincolnnus/" class="ImgLink">
                            <img src="http://media-cache-ec6.pinterest.com/avatars/lincolnnus_1354711928.jpg" alt="Profile picture of you">
                                </a>
                        <form action="http://pinterest.com/pin/178173728980050005/comment/" method="POST">
                            <input type="hidden" name="replies" class="pin_comment_replies">
                                <textarea class="GridComment" maxlength="1000" placeholder="Add a comment..."></textarea>
                                <button class="Button WhiteButton Button11 grid_comment_button" type="button">Comment</button>
                                </form>
                    </div>
                    
                    
                </div>';
            }
            ?>

  </div>           		




    
   




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