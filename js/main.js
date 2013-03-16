
function getAllCategories()
{
                 for(var i=0;i<3;i++)
                 {
                 
                 $('#CateSlider'+i).movingBoxes({
                                                            /* width and panelWidth options deprecated, but still work to keep the plugin backwards compatible
                                                             width: 500,
                                                             panelWidth: 0.5,
                                                             */
                                                            startPanel   : 2,      // start with this panel
                                                            wrap         : false,  // if true, the panel will infinitely loop
                                                            buildNav     : true,   // if true, navigation links will be added
                                                            navFormatter : function(){ return "&#9679;"; } // function which returns the navigation text for each panel
                                                            });
                 }
    
}