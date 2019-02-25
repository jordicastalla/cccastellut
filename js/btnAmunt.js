
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("btnAmunt").style.display = "block";
  } else {
    document.getElementById("btnAmunt").style.display = "none";
  }
}

// Quan l'usuari clica, es fa scroll cap amunt del document. 
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
