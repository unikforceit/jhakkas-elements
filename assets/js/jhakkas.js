(function ($) {
"use strict";
 
    var JhakkasTeam2 = function ($scope, $) {

        $scope.find('.team2-wrapper').each(function () {

            var settings = $(this).data('jhakkas');
            $(".team2-wrapper .member2-link").mouseover(function(){
                $(this).parent().find('.team2-social').addClass("show");
            });
            $(".team2-wrapper .member2-link").mouseout(function(){
                $(this).parent().find('.team2-social').removeClass("show");
            });

        });

    };


    $(window).on('elementor/frontend/init', function () {

        if (elementorFrontend.isEditMode()) {

            elementorFrontend.hooks.addAction('frontend/element_ready/jhakkas-team2.default', JhakkasTeam2);

        }
        else {

            elementorFrontend.hooks.addAction('frontend/element_ready/jhakkas-team2.default', JhakkasTeam2);

        }
    });


})(jQuery);
