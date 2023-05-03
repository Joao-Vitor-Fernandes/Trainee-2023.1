// var modal_create = document.getElementById("myModal");
// var btn_create = document.getElementById("myBtn-create");

// btn_create.onclick = function() {
//   modal_create.style.display = "block";
// }

// span.onclick = function() {
//   modal_create.style.display = "none";
// }

// window.onclick = function(event) {
//   if (event.target == modal_create) {
//     modal_create.style.display = "none";
//   }
// }

const btnCreate = document.getElementById("myBtn-create");
const modalCreate = document.getElementById("myModal-create");

const closeModalCreate = () => {
    modalCreate.style.display = "none";
};

const openModalCreate = () => {
    modalCreate.style.display = "block";
};

btnCreate.addEventListener("click", () => {
    openModalCreate();
});

const closeModalButtons = document.querySelectorAll(".close");
closeModalButtons.forEach((button) => {
    button.addEventListener("click", () => {
        closeModalCreate();
    });
});
