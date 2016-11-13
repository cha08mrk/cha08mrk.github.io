$(document).ready(function(){
    
    //highlight on hover
    $(".portfolio-large-cover").hover(function() {
        $(this).fadeTo(500,1)
    }, function() {
        $(this).fadeTo(500,0)
    });
    
    //On hover of portfolio image, add check me text
    $(".portfolio-small").hover (function () {
        //get the id and add hover
        $(this).children("*").fadeTo(10,1);
    }, function () {
        //get the id and add hover
        $(this).children("*").fadeTo(10,0);
    });
    
    //add on the outer height of the nav bar    
    var objectBottom = $('#home-screen-left').outerHeight();    
    //scrolls down the page to the correct section!
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top - objectBottom
              }, 1000);
              return false;
            }
        }
    });
    
    //on hover of smaller portfolio image, glow!
    $(".portfolio-small").hover(function(event){
        $(this).css("box-shadow", "0px 0px 40px white inset");
    }, function () {
        $(this).css("box-shadow", "0 0 0");
    });
    
    //validate the contact form and do some highlighting if stuff is wrong
    $("#contactForm").submit(function(e) {
        
        var valid = true;
        
        console.log("VALIDATING");
        
        //validate name
        var name = $("#name").val();        
        console.log("Name:" + name);
        //if it's wrong, make the border red and stop the message
        if (name == ""){
            $("#name").css("border","1px solid firebrick");
            //$("#name").fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
            //stops the form reloading the page
            valid = false; 
        } else if (!isAlphaNumeric(name)){
            $("#name").css("border","1px solid firebrick");
            valid = false;
        } else {
            $("#name").css("border","1px solid grey");
        }
        
        //validate email
        var email = $("#email").val();
        console.log("Email:" + email);
        if (email == ""){
            $("#email").css("border","1px solid firebrick");
            //stops the form reloading the page
            valid = false;
        }  else if (!isEmail(email)){
            $("#email").css("border","1px solid firebrick");
            valid = false;
        }else {
            $("#email").css("border","1px solid grey");
        }
        
        //validate telephone
        var telephone = $("#number").val();
        console.log("number:" + telephone);
        if (telephone == ""){
            $("#number").css("border","1px solid firebrick");
            //stops the form reloading the page
            valid = false;
        }  else {
            $("#number").css("border","1px solid grey");
        }

        //validate message
        var message = $("#message").val();
        console.log("message:" + message);
        if (message == ""){
            $("#message").css("border","1px solid firebrick");
            //stops the form reloading the page
            valid = false;
        }  else {
            $("#message").css("border","1px solid grey");
        }
        
        //stop the page refreshing if not valid, otherwise go ahead and send the message
        if (valid == false){
            e.preventDefault();
        }
    });
    
    function isAlphaNumeric(str) {
        var code, i, len;

        for (i = 0, len = str.length; i < len; i++) {
            code = str.charCodeAt(i);
            if (!(code > 47 && code < 58) && // numeric (0-9)
                !(code > 64 && code < 91) && // upper alpha (A-Z)
                !(code > 96 && code < 123)) { // lower alpha (a-z)
              return false;
            }
        }
        return true;
    };
    
    function isEmail(str){
        if (str.includes("@")){
            return true;
        }
        
        return false;
    }
    
    //start scrolling the fixed section
    var windw = this;
    $.fn.followTo = function ( pos ) {
        var $this = this,
            $window = $(windw);
        pos = pos - $(window.top).height();
        
        $window.scroll(function(e){
            if ($window.scrollTop() > pos) {
                $this.css({
                    position: 'absolute',
                    top: pos
                });
            } else {
                $this.css({
                    position: 'fixed',
                    top: 0
                });
            }
        });
    };
    
    //get the height of the body, - the nav bar and the footer and scroll the top bar from there
    console.log($('body').outerHeight());
    console.log($('#home-screen-left').outerHeight());
    console.log($('.footer').outerHeight());    
    console.log($('body').outerHeight() + $("#home-screen-left").outerHeight() - $(".footer").outerHeight());
    var followHeight = $('body').outerHeight() - $("#home-screen-left").outerHeight() - $(".footer").outerHeight();
    $('#home-screen-left').followTo(followHeight);
    
});

$(window).on("load",function() {
    $(window).scroll(function() {
        $(".hideme").each(function() {
        /* Check the location of each desired element */
        var objectBottom = $(this).offset().top + $(this).outerHeight();
        var objectBottom = objectBottom - (objectBottom * 0.2);

        var windowBottom = $(window).scrollTop() + $(window).innerHeight();

        /* If the element is completely within bounds of the window, fade it in */
        if (objectBottom < windowBottom) { //object comes into view (scrolling down)
            if ($(this).css("opacity")==0) {
                $(this).fadeTo(500,1);}
            } else { //object goes out of view (scrolling up)
                if ($(this).css("opacity")==1) {
                    $(this).fadeTo(500,0);
                }
            }
        });
    }); $(window).scroll(); //invoke scroll-handler on page-load
    
    var scroll_pos = 0;
    $(document).scroll(function() { 
        scroll_pos = $(this).scrollTop();
                
        if ($('#contact-title').offset().top - $('#contact-title').outerHeight()<scroll_pos+($(window).height()/2)) {
            $('#contact-link').css('color', 'firebrick');
            $('#about-link').css('color', 'black');
            $('#portfolio-link').css('color', 'black');
        }
        
        if ($('#about-title').offset().top - $('#about-title').outerHeight()<scroll_pos+($(window).height()/2)) {
            $('#about-link').css('color', 'firebrick');
            $('#contact-link').css('color', 'black');
            $('#portfolio-link').css('color', 'black');
        }
    });
});