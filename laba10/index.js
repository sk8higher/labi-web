$(document).ready(function () {
  $("h1").click(function () {
    $("h1").animate({
      opacity: "0.5",
    });

    $("h1").css("color", "green");
  });

  $("h2").slideToggle("slow");

  $("hr").css("width", "0%");
  $("hr").animate({ width: "100%" }, 2000);

  $(".text-justify").animate({ opacity: 0 }, 1000);
  $(".text-justify").animate({ opacity: 1 }, 1000);

  $(".text-justify").animate({ fontSize: "20px" }, 500);
  $("li").animate({ fontSize: "20px" }, 500);
  $("h4").css("color", "blue");
});
