'use strict';

var productApp = angular.module('productApp', ['ngAnimate','ngSanitize'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

productApp.directive('tooltip', function(){
    return {
        restrict: 'A',
        link: function(scope, element, attrs){
            $(element).hover(function(){
                // on mouseenter
                $(element).tooltip('show');
            }, function(){
                // on mouseleave
                $(element).tooltip('hide');
            });
        }
    };
});

$(document).ready(function() {
    console.log('ready');
    $("#cartBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#product-section").offset().top-150
        }, 750);
    });


    var didScroll=false;
    $(window).scroll(function () {
        didScroll=true;
    })
    setInterval(function () {
        if(didScroll){
            didScroll=false;
            var test = false;
            var productViewer = $('.product-row');
            var test = isScrolled('#product-section');
            //var body = $('body');
            console.log('test is '+test);
            if(test) {
                //body.addClass('no-overflow');
                productViewer.removeClass('no-overflow');
                var closeTest = isScrolled('.product-row');
            }
            else {
                //body.removeClass('no-overflow');
                productViewer.addClass('no-overflow');
            }
        }
    },100);
});

function isScrolled(elem)
{
    var $elem = $(elem);
    var $window = $(window);

    var docViewTop = $window.scrollTop();
    var docViewBottom = docViewTop + $window.height();

    var elemTop = $elem.offset().top;
    console.log('window top'+docViewTop);
    var elemTopTarget = elemTop - 200; //add some padding
    var elemBottomTarget = elemTop + 200;
    console.log(elemTop);
    var elemBottom = elemTop + $elem.height();
    if(elemTopTarget <= docViewTop) {
        return true;
    }
    else if (elemTopTarget >= docViewTop) {
        return false;
    }

}