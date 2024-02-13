/*just used for testing making sure js is runned*/
console.log("i work");



//**********RESPONSIVE NAV*************** */
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




//**********RESPONSIVE COMMUNITY************** */
document.querySelectorAll(".community__feedback").forEach((community__feedback) => {
  const items = community__feedback.querySelectorAll(".community__feedback__box");
  const buttonsHtml = Array.from(items, () => {
    return `<span class="carousel__button"></span>`;
  });

  community__feedback.insertAdjacentHTML(
    "beforeend",
    `
		<div class="carousel__nav">
			${buttonsHtml.join("")}
		</div>
	`
  );

  const buttons = community__feedback.querySelectorAll(".carousel__button");

  buttons.forEach((button, i) => {
    button.addEventListener("click", () => {
      
      // unselect
      items.forEach((item) =>
        item.classList.remove("community__feedback__box--selected")
      );
      buttons.forEach((button) =>
        button.classList.remove("carousel__button--selected")
      );

      items[i].classList.add("community__feedback__box--selected");
      button.classList.add("carousel__button--selected");
    });
  });

  //by default select first one
  items[0].classList.add("community__feedback__box--selected");
  buttons[0].classList.add("carousel__button--selected");
});