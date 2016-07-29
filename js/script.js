jQuery(document).ready(function(){
    function sameHeight(parentSelector, childrenNeedToEqualize){
      jQuery(parentSelector).each(function(){  
        
        // Cache the highest
        var highestBox = 0;
        
        // Select and loop the elements you want to equalise
        jQuery(childrenNeedToEqualize, this).each(function(){
          
          // If this box is higher than the cached highest then store it
          if(jQuery(this).height() > highestBox) {
            highestBox = jQuery(this).height(); 
          }
        
        });  
              
        // Set the height of all those children to whichever was highest 
        jQuery(childrenNeedToEqualize,this).height(highestBox);
      }); 
    }
    var linksReplacement = function(fromSelector, commonParent, toSelector){
      var linksDist = jQuery(fromSelector);
      var linksDistArr = [];

      (function(){
        linksDistArr.push(linksDist);
        console.log(linksDistArr);
      }());

      function insetLinkHref(obj){
        var linksFrom = jQuery(obj).closest(commonParent).find(toSelector).attr('href') || "##";
        console.log(jQuery(obj));
        jQuery(obj).attr('href', linksFrom);
        console.log(linksFrom);
      }
      // linksDistArr.forEach(insetLinkHref());
      for (var i = linksDist.length - 1; i >= 0; i--){
        var temporary = linksDist[i];
        insetLinkHref(linksDist[i]);
      }
    }
    // Select and loop the container element of the elements you want to equalise
    
    var equalizeFunctions = function(){
      sameHeight('.two-columns.same-height-parent', '.content-holder');
      sameHeight('.slideset', '.slide');
      sameHeight('.promo-block .two-cols ', '.info-content .text-wrap p');
    }


    var mobileScripts = {
      mediaMaxScreenSize: 768,
    }


    if(jQuery(window).width() < mobileScripts.mediaMaxScreenSize){
      // mobileScripts.frontPageNewsVideosLink();

      linksReplacement('.three-columns .column a.hover-mobile', '.column', 'ul.links li:last-child a');
      // linksReplacement('.who-we-are .tabset li a', '.tab-container', '.tab > a');
      
    }

    if(jQuery(window).width() > 736){ //iphone 6 plus height dimension

      equalizeFunctions();

      jQuery(window).on('resize', function(){
        equalizeFunctions();
      });
    }
    


    (function(){
      var startPageHeroText = jQuery('.promo-block .two-cols .text-wrap').height();
      console.log(startPageHeroText);
    }())

});