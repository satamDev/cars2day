// JavaScript Document
$(document).ready(function(){
  $(".chngtext").text("Back To Search");
});
(function () {

  
  const pageLink = document.querySelectorAll(".page-scroll");

pageLink.forEach((elem) => {
  elem.addEventListener("click", (e) => {
    e.preventDefault();
    document.querySelector(elem.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
      offsetTop: 1 - 60,
    });
  });
});

// section menu active
function onScroll(event) {
  const sections = document.querySelectorAll(".page-scroll");
  const scrollPos =
    window.pageYOffset ||
    document.documentElement.scrollTop ||
    document.body.scrollTop;

  for (let i = 0; i < sections.length; i++) {
    const currLink = sections[i];
    const val = currLink.getAttribute("href");
    const refElement = document.querySelector(val);
    const scrollTopMinus = scrollPos + 73;
    if (
      refElement.offsetTop <= scrollTopMinus &&
      refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
    ) {
      document.querySelector(".page-scroll").classList.remove("active");
      currLink.classList.add("active");
    } else {
      currLink.classList.remove("active");
    }
  }
}

window.document.addEventListener("scroll", onScroll);



    $("#comaresec1").click(function(){      
      $("#shocarset").toggle('#shocarset');
      $("#shocar").toggle();
      $("#comaresec1").toggle('.comphotohidebtnsec');
      $("#comptotalsec").toggle('.compdtlsechide');
      $(".chngtext").text("Back To Details");
    });
    
    $("#bactoserc").click(function(){
      if($(".chngtext").text() === "Back To Search"){
        history.back();
      }else{
          $("#shocar").addClass('.showallthings');
         $("#comptotalsec").toggle('.showallthings');
         $("#shocarset").toggle('.showallthings');
         $("#shocar").toggle();
         $(".chngtext").text("Back To Search");
         $("#comaresec1").toggle();
       }
    });

    // $(".chngtext").on("click", function(){
    //   if($(".chngtext").text() == "Back To Search"){
    //     history.back();
    //   }
    // });
    // text("Back To Search");


    var stickyOffset = $('.sticky').offset().top;

    $(window).scroll(function(){
      var sticky = $('.sticky'),
          scroll = $(window).scrollTop();
        
      if (scroll >= stickyOffset) sticky.addClass('fixed');
      else sticky.removeClass('fixed');
    });
    


})();

