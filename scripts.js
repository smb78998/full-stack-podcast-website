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
//would be best to name the section "carousel" becuase this would turn all carousel items into responsiveslider


document.querySelectorAll(".community__feedback").forEach((community__feedback) => {

  //makes an "array" for each of the community feedback boxes
  const items = community__feedback.querySelectorAll(".community__feedback__box");
  //creates buttons for each element in our array 
  const buttonsHtml = Array.from(items, () => {
    return `<span class="carousel__button"></span>`;
  });

  //before the end of our .community__feedback section we are adding in the buttons 
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

      // remove the class "selected" from all of the community__feedback__box (and the button too)
      items.forEach((item) =>
        item.classList.remove("community__feedback__box--selected")
      );
      buttons.forEach((button) =>
        button.classList.remove("carousel__button--selected")
      );

      //add the "selected" class 
      items[i].classList.add("community__feedback__box--selected");
      button.classList.add("carousel__button--selected");
    });
  });

  //by default select first one, for when the page first loads 
  items[0].classList.add("community__feedback__box--selected");
  buttons[0].classList.add("carousel__button--selected");
});