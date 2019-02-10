/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function(){
    jQuery('#parent-100').show();
   jQuery('.parent_click').click(function(){
       var id = "#parent-" + jQuery(this).attr('data-id');
       jQuery('.child-right').hide();
       jQuery(id).show();
   }); 
});