// $(document).on("ready", function () {
//   $(".regular").slick({
//     dots: true,
//     infinite: true,
//     slidesToShow: 4,
//     slidesToScroll: 2,
//   });
//   $(".center").slick({
//     dots: true,
//     infinite: true,
//     centerMode: true,
//     slidesToShow: 5,
//     slidesToScroll: 3,
//   });
// });

// NAVBAR BANGET
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.documentElement.scrollTop > 50) {
    var kelas = document.getElementById("navbar");
    kelas.classList.add("navbar-stick");
  } else {
    var kelas = document.getElementById("navbar");
    kelas.classList.remove("navbar-stick");
  }
}

// window.onload = function () {
//   onloadFunction();
// };
// function onloadFunction() {
//   var x = document.createElement("A");
//   var t = document.get
//   x.setAttribute("href", "https://www.w3schools.com");
//   x.appendChild(t);
//   var tai = document.getElementsByClassName("slick-active")[0];
//   tai.appendChild(x);
// }

$(".center").slick({
  centerMode: true,
  centerPadding: "60px",
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 1,
      },
    },
  ],
});

$(".responsive").slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});
