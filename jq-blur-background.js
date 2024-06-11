$(document).ready(function () {
  const mskCon = $(".mask-container");
  const body = $("body");

  mskCon.hover(
    function () {
      console.log("mask-container hover success");
      mskCon.addClass("mask-container-hover");
      body.addClass("body-hover");
    },
    function () {
      mskCon.removeClass("mask-container-hover");
      body.removeClass("body-hover");
    }
  );
});
