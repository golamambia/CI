// var idwrapcartpages01 = document.querySelector("#idwrapcartpages01");
// idwrapcartpages01.addEventListener("click",plusminusclick01);


// function plusminusclick01(e) {

//     if(e.target.classList.contains("fa-minus")) {
//       let inptmins01 = e.target.parentElement.children[1];
//       inptmins01.value--;
//       if(inptmins01.value < 1) {
//         inptmins01.value = 1;
//         alert("You can not order less than Minimum Order Quantity");
//       }

//       let minusvalue01 = e.target.parentElement.parentElement.parentElement.children[1].children[0].children[3].children[0];
//       minusvalue01.innerHTML = inptmins01.value;

//       console.log(e.target.parentElement.parentElement.parentElement.children[1].children[0].children[3].children[0]);
//     }

//     if(e.target.classList.contains("fa-plus")) {
//         let inptmins01 = e.target.parentElement.children[1];
//         inptmins01.value++ - 1;

//         let plusvalue01 = e.target.parentElement.parentElement.parentElement.children[1].children[0].children[3].children[0];
//         plusvalue01.innerHTML = inptmins01.value;
//     }

//     if(e.target.classList.contains("fa-trash-o")) {
//         console.log(e.target.parentElement.parentElement.parentElement.parentElement.parentElement);
//         e.target.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
//     }

// }