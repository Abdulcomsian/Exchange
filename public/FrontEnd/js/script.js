$(".compare-btn").click(function () {
    console.log($(this).parent().parent().children(".comparing-div").toggle());
});

// Account drop-down toggler
document.querySelector(".account").addEventListener("click", function () {
    console.log("Function fired");
    document.querySelector(".auth-drop-down").classList.toggle("d-none");
});

console.log("hello");
const btnsBack = document.querySelectorAll(".btn-back");
const btnsForward = document.querySelectorAll(".btn-forward");
const SellBusi = document.querySelector(".sellBusiness_procdure");
let currentTab = 1;
ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
    console.error(error);
});
ClassicEditor.create(document.querySelector("#editor1")).catch((error) => {
    console.error(error);
});

// const handleSellBusinessFooter = function(){
//   SellBusi.classList.toggle('hidden')
// }
