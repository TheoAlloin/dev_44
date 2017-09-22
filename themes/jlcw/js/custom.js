    
$(document).ready(function(){
    
//    $(document).mouseup(function(e) {
//        // if the target of the click isn't the container nor a descendant of the container
//        if (!container.is(e.target) && container.has(e.target).length === 0) 
//        {
//            container.hide();
//        }
//    });

    /************* search ******************/
    var searchbox = $("i#appear_searchbox");
    $(searchbox).click(function(){
        if (searchbox.hasClass('loupe')) {
            searchbox.removeClass('loupe');
            searchbox.addClass('croix');
            $('form#searchbox').removeClass('closing');
            $('form#searchbox').addClass('openning');
            
        } else if (searchbox.hasClass('croix')) {
            searchbox.removeClass('croix');
            searchbox.addClass('loupe');
            $('form#searchbox').removeClass('openning');
            $('form#searchbox').addClass('closing');
        }
    });
    $(document).mouseup(function(e) {
        // if the target of the click isn't the container nor a descendant of the container
        if ((!searchbox.is(e.target) && searchbox.has(e.target).length === 0) && (!$('form#searchbox').is(e.target) && $('form#searchbox').has(e.target).length === 0))
        {
            searchbox.removeClass('croix');
            searchbox.addClass('loupe');
            $('form#searchbox').removeClass('openning');
            $('form#searchbox').addClass('closing');
        }
    });
        /************* fin search ******************/
        
        /************* devis en mode catalogue ************/
//        $('h2.devis_heading').click(function(){
//            if($('div#devis_form').hasClass('collapse')) {
//                $('div#devis_form').removeClass('collapse');
//                $('div#devis_form').addClass('expand');
//                
//            } else if ($('div#devis_form').hasClass('expand')) {
//                $('div#devis_form').removeClass('expand');
//                $('div#devis_form').addClass('collapse');
//            }
//        });
        
        var current_url = window.location.href;     // Returns full URL
        var product_name = $('#product .pb-center-column h1').text();
        $('input#field_link_product').val(current_url);
        $('input#field_product_name').val(product_name);
        
        
        /************* fin devis en mode catalogue ************/

        

        /************* smooth scroll ************/

        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            var speed = 750; // Durée de l'animation (en ms)
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
            return false;
        });
        /************* smooth scroll ************/
        
        if (($('body').attr('id') == 'product') ) {
            var min_height = $('#product .pb-center-column').outerHeight();
            $('#product .pb-right-column').css('min-height', min_height);
        }
        
        $('.cat-title').click(function(){
            if ($('#block_top_menu ul').css('display') === 'none') {
                console.log('displayblock');
                $('#block_top_menu ul').addClass('expanded');
                $('#block_top_menu ul').removeClass('colapsed');               
                $('#block_top_menu').addClass('expanded');
                $('#block_top_menu').removeClass('colapsed');

            } else if($('#block_top_menu ul').css('display') === 'block') {
                console.log('displaynone;');
                $('#block_top_menu ul').addClass('colapsed');
                $('#block_top_menu ul').removeClass('expanded');
                $('#block_top_menu').addClass('colapsed');
                $('#block_top_menu').removeClass('expanded');
            }
        });

}); 


