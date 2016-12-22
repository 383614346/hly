// JavaScript Document
$(document).ready(function () {
    $('#top .nav_select .wrapper ul li').mouseover(function () {
        var index = $(this).parent().children().index(this);
        $(this).parent().children().each(function () {
        	

        	
            if ($(this).hasClass('Select')) {
                $(this).removeClass('Select');
            }
        });
        $(this).addClass('Select');

        $('#top .Toolbar2 .CentreBox .Menu').each(function () {
            if (!$(this).hasClass('Hide')) {
                $(this).addClass('Hide');
            }
        });
   
        
        $('#top .Toolbar2 .CentreBox .Menu').eq(index).removeClass('Hide');
    });

    $('#top .Toolbar2 .CentreBox .Menu ul li a').mouseenter(function () {
        var index = $('#top .Toolbar2 .CentreBox .Menu ul li a').index(this);
        $('#top .Toolbar2 .CentreBox .Menu ul li').each(function () {
            if ($(this).hasClass('Select')) {
                $(this).removeClass('Select');
            }
        });
        $(this).parent().addClass('Select');
    });
});