var pciInformationDate="";



var isAllowed=false;


(function($) {
  
  //'use strict';
 
  var validationForm = $("#example-form");
  
  validationForm.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function(event, currentIndex, newIndex) {
    
      if(currentIndex==0)
      {
       isAllowed=val1();
  
      }else if(currentIndex==1)
      {
       
       isAllowed= val2();
  //isAllowed=false;
    
      }else if(currentIndex==2)
      {
      isAllowed=  val3();
       //isAllowed=false;
     
      }else if(currentIndex==3)
      {
        isAllowed=val4();
       //isAllowed=false;
     
      }else if(currentIndex==4)
      {
        
       //isAllowed=val5();
    
       
      
      }else if(currentIndex==5)
      {
       
      isAllowed=val6();
       //isAllowed=false;
      // $('#example-form').submit();
       //isAllowed=true;
      }
      if(isAllowed)
      {
        validationForm.val({
          ignore: [":disabled", ":hidden"]
        })
        return validationForm.val();
      }
    
     
    },
    onFinishing: function(event, currentIndex) {
      validationForm.val({
        ignore: [':disabled']
      })
      return validationForm.val();
    },
    onFinished: function(event, currentIndex) {
     val7();
    }
  });
  
 
})(jQuery);
