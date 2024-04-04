//Dropdown dalam dropdown
//---------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
    var dropdownKmzToggle = document.querySelectorAll(".dropdownKmz-toggle");

    dropdownKmzToggle.forEach(function (element) {
        element.addEventListener("mouseover", function (event) {
            event.preventDefault();
            var dropdownKmzMenu = this.querySelector(".dropdownKmz-menu");
            dropdownKmzMenu.style.display = "block";
        });

        element.addEventListener("mouseleave", function (event) {
            event.preventDefault();
            var dropdownKmzMenu = this.querySelector(".dropdownKmz-menu");
            dropdownKmzMenu.style.display = "none";
        });
    });
});
//---------------------------------------------------------------------------

(function ($) {
    "use strict";

    // Portfolio isotope and filter
    var portfolioIsotope = $(".portfolio-container").isotope({
        itemSelector: ".portfolio-item",
        layoutMode: "fitRows",
    });
    $("#portfolio-flters li").on("click", function () {
        $("#portfolio-flters li").removeClass("active");
        $(this).addClass("active");

        portfolioIsotope.isotope({ filter: $(this).data("filter") });
    });
})(jQuery);
