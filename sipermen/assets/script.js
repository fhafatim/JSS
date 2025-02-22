$("body").on("keyup", "form", function(e){
  if (e.which == 13){
    if ($("#next").is(":visible") && $("fieldset.current").find("input, textarea").valid() ){
      e.preventDefault();
      nextSection();
      return false;
    }
  }
});
 
 
$("#next").on("click", function(e){
  console.log(e.target);
  nextSection();
});
 
$("form").on("submit", function(e){
  if ($("#next").is(":visible") || $("fieldset.current").index() < 3){
    e.preventDefault();
  }
});
 
function goToSection(i,u){
  $("fieldset:gt("+i+")").removeClass("col-12 current").addClass("next").hide();
  $("fieldset:lt("+i+")").removeClass("col-12 current").hide();
  var tabs = '#tabs' +u;
  console.log(tabs);
  $(tabs).addClass("current").siblings().removeClass("current");
  setTimeout(function(){
    $("fieldset").eq(i).removeClass("next").addClass("col-12 current active").show();
      if ($("fieldset.current").index() == 3){
        $("#next").hide();
        $("input[type=submit]").show();
      } else {
        $("#next").show();
        $("input[type=submit]").hide();
      }
  }, 80);
 
}
 
function nextSection(){
  var i = $("fieldset.current").index();
  var u = i+1;
  var tabs = '#tabs' +u;
  if (i < 3){
     $(tabs).addClass("active");
    goToSection(i+1,u+1);
  }
}
 
$(".tabs").on("click", function(e){
  var i = $(this).index();
  var u = i+1;
  if ($(this).hasClass("active")){
    goToSection(i,u);
  } else {
    alert("Please complete previous sections first.");
  }
});