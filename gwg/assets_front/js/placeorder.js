var idwrapplceordrpanels01 = document.querySelector("#idwrapplceordrpanels01");
idwrapplceordrpanels01.addEventListener("click", panlopclos01);

var plceordrpanels01 = document.querySelector(".plceordrpanels01 h2");

function panlopclos01(e) {

  if(e.target.classList.contains("shadre01")) {
  //  console.log(e.target.parentElement.parentElement.children[1]);
    console.log(e.target.parentElement.children[0]);

    e.target.parentElement.parentElement.children[1].classList.toggle("plceodropns01");
    e.target.parentElement.children[0].classList.toggle("plaminus01");

  }



}