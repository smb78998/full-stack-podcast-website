
const hamburger = document.querySelector(".hamburger");
const nav__list = document.querySelector(".nav__list");

//when click on X or hambuger menu appears/or goes away 
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  nav__list.classList.toggle("active");
})

//When click on links menu goes away 
document.querySelectorAll(".nav__list").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  nav__list.classList.remove("active");
}))

/*just used for testing making sure js is runned*/
console.log("i work");