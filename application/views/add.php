<html lang="en" class="en js csstransforms3d">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Add New</title>
                <link rel="stylesheet" href="<?php echo base_url();?>css/base.css" type="text/css" />
                 <script src="<?php echo base_url();?>js/jquery-1.9.1.js"></script>
                <script src="<?php echo base_url();?>js/jquery.ui.core.js"></script>
                <script src="<?php echo base_url();?>js/jquery.ui.widget.js"></script>
        
        <script src="<?php echo base_url();?>js/jquery.ui.datepicker.js"></script>
                     <link rel="stylesheet" href="<?php echo base_url();?>css/jquery.ui.all.css" type="text/css" />
                     <style>
                         .classname {
                             -moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
                             -webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
                             box-shadow:inset 0px 1px 0px 0px #f29c93;
                             background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100) );
                             background:-moz-linear-gradient( center top, #fe1a00 5%, #ce0100 100% );
                             filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100');
                             background-color:#fe1a00;
                             -moz-border-radius:6px;
                             -webkit-border-radius:6px;
                             border-radius:6px;
                             border:1px solid #d83526;
                             display:inline-block;
                             color:#ffffff;
                             font-family:arial;
                             font-size:24px;
                             font-weight:bold;
                             padding:6px 24px;
                             text-decoration:none;
                             text-shadow:1px 1px 0px #b23e35;
                         }.classname:hover {
                             background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ce0100), color-stop(1, #fe1a00) );
                             background:-moz-linear-gradient( center top, #ce0100 5%, #fe1a00 100% );
                             filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00');
                             background-color:#ce0100;
                         }.classname:active {
                             position:relative;
                             top:1px;
                         }
                         /* This imageless css button was generated by CSSButtonGenerator.com */
                         </style>
                     <script>
                         $(function() {
                           $( "#datePicker1" ).datepicker({
                                                         dateFormat: 'yy-mm-dd',
                                                         showOn: "button",
                                                         buttonImage: "<?php echo base_url();?>images/calendar.gif",
                                                         buttonImageOnly: true
                                                         });
                           $( "#datePicker2" ).datepicker({
                                                          dateFormat: 'yy-mm-dd',
                                                          showOn: "button",
                                                          buttonImage: "<?php echo base_url();?>images/calendar.gif",
                                                          buttonImageOnly: true
                                                          });
                           });
                         </script>
                         </script>
    </header>
    <body>
<div id="Add" class="ModalContainer visible" style="display: block; -webkit-transform: none;">
    <div class="modal wide PaddingLess" style="margin-bottom: -147px;">
        
        <!--<div id="OpenLinks" class="">
            <a href="#" id="OpenScrapePin" data-componenttype="MODAL_ADD_PIN" class="cell" onclick="AddDialog.close('Add', 'ScrapePin'); return false">
                <div class="icon" id="scrape" data-componenttype="MODAL_ADD_PIN"></div>
                <span data-componenttype="MODAL_ADD_PIN"></span>
            </a>
            
            
            <a id="OpenUploadPin" class="cell" data-componenttype="MODAL_ADD_PIN" onclick="AddDialog.close('Add', 'UploadPin'); return false">
                <div class="icon" id="upload" data-componenttype="MODAL_ADD_PIN"></div>
                <span data-componenttype="MODAL_ADD_PIN">Add</span>
            </a>
            
            
            <a id="OpenCreateBoard" class="cell" onclick="CreateBoardDialog.load(false, 'add_dialog'); return false">
                <div class="icon" id="board"></div>
                <span></span>
            </a>
        </div>-->
         <!-- #OpenLinks -->
        <form method="POST" action="<?php echo base_url();?>index.php/api/upload" enctype="multipart/form-data">
            <table border="0">
                <tr>
                    <td>Title: </td>
                    <td><input type="text" name="title"><br></td>
                </tr>
                <tr>
                    <td>Cover Image:</td>
                    <td><input type="file" name="file"><br></td>
                </tr>
                <tr>
                    <td>Ususal Price:</td>
                    <td><input type ="text" name ="usualPrice"><br></td>
                </tr>
                <tr>
                    <td>Discount Price:</td>
                    <td><input type ="text" name ="discountPrice"><br></td>
                </tr>
                <tr>
                    <td>BarCode:</td>
                    <td><input type ="text" name="barcode"><br></td>
                </tr>
                <tr>
                    <td>Start Date:</td>
                    <td><input type="text" name="startDate" id="datePicker1"><br></td>
                </tr>
                <tr>
                    <td>End Date:</td>
                    <td><input type="text" name="endDate" id="datePicker2"><br></td>
                </tr>
                <tr>
                    <td>Category Name:</td>
                    <td>
                        <select name="cateid">
                            <option value="1">Groceries</option>
                            <option value="2">Wine</option>
                            <option value="3">Snacks</option>
                        </select>
                    <br>
                    </td>
                </tr>
                <tr>
                    <td>Store:</td>
                    <td><select name="sid">
                        <option value="1">Giant</option>
                        <option value="2">SS</option>
                        <option value="3">FairPrice</option>
                    </select><br>
                    </td>
                </tr>
                <tr>
                    <td>Submit:</td>
                    <td><input type="submit" value="Submit"><br></td>
                </tr>
            </table>
        </form>
    </div><!-- .modal.wide.PaddingLess-->
    
    <div class="overlay"></div>
    
</div>
        </body>
</html>