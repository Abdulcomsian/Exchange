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

const btnLink1 = document.querySelector(".list-1");
const btnLink2 = document.querySelector(".list-2");

btnLink1.addEventListener("click", function () {
    this.classList.add("active");
    btnLink2.classList.remove("active");
});
btnLink2.addEventListener("click", function () {
    this.classList.add("active");
    btnLink1.classList.remove("active");
});

for (let btn of btnsForward) {
    btn.addEventListener("click", function () {
        if (currentTab >= 1 && currentTab < 6) {
            document
                .querySelector(`.tab-${currentTab}`)
                .classList.remove("active");
            currentTab++;
            document
                .querySelector(`.tab-${currentTab}`)
                .classList.add("active");
            console.log(currentTab);
            if (currentTab === 1) {
                SellBusi.classList.remove("hidden");
            } else {
                SellBusi.classList.add("hidden");
            }
        }
    });
}

for (let btn of btnsBack) {
    btn.addEventListener("click", function () {
        console.log("Btn back fired", currentTab);
        if (currentTab >= 1 && currentTab <= 6) {
            document
                .querySelector(`.tab-${currentTab}`)
                .classList.remove("active");
            currentTab--;
            document
                .querySelector(`.tab-${currentTab}`)
                .classList.add("active");
            console.log(currentTab);
            if (currentTab === 1) {
                SellBusi.classList.remove("hidden");
            } else {
                SellBusi.classList.add("hidden");
            }
        }
    });
}
