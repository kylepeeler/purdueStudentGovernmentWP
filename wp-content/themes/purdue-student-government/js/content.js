/**
 * Created by Kyle on 8/12/16.
 */

$(document).ready(function(){
    $('.parallax-window').parallax({
        //positionY: "-440px"
        bleed: 3
    });

    //FAQ Code
    $(".faq-body").hide();
    $(".faq-question").click(function(){
        //show the question
        $(this).children(".faq-body").slideToggle(200);
        //add the expanded class
        $(this).addClass("faq-expanded");
        //find the icon class
        $(this).children(".faq-heading").addClass("faq-active");
        var $icon = $(this).find("i");
        //check if the question has been expanded by the icon class
        var expanded = $icon.hasClass("fa-chevron-circle-up");
        //swap out the icon class
        if (expanded){
            $icon.removeClass("fa-chevron-circle-up");
            $icon.addClass("fa-chevron-circle-down");
        }else{
            $icon.removeClass("fa-chevron-circle-down");
            $icon.addClass("fa-chevron-circle-up");
        }
        //slide up all other questions
        $(".faq-question").not(this).children(".faq-body").slideUp();
        //set all other question icons to up
        $(".faq-question").not(this).find("i").removeClass("fa-chevron-circle-up").addClass("fa-chevron-circle-down");
    });
	$(".n-more").hide();
	$(".o-more").hide();
	$(".w-more").hide();

});
