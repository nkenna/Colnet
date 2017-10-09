/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $(".hmodal").hide();
       
               $(".smodal").click(function() {
                  
                 $(".hmodal").show(); 
  $(".modal").addClass("is-active"); 
   $(".hmodal").show(); 
    $(".smodal").hide(); 
});

$(".hmodal").click(function() {
   $(".modal").removeClass("is-active");
    $(".hmodal").hide(); 
    $(".smodal").show();
});
          
})

