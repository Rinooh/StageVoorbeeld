import './bootstrap';

var modal = function () {
    $(".modal-cod").addClass("active");
  };
  setTimeout(modal, 2000);
  
  $(".modal-cod").on("click", function (e) {
    e.stopPropagation();
    $(".modal-cod").removeClass("active");
  });
  
  $(".modal-cod .close").on("click", function (e) {
    $(".modal-cod").removeClass("active");
  });
  
  $(".modal-cod .content").on("click", function (e) {
    e.stopPropagation();
  });