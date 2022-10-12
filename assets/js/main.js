//TRIGERS ANIMATION
const lines = document.querySelectorAll('.line1, .line2, .line3');
const linesContainer = document.getElementsByClassName("lines");
const menu = document.querySelector('.menu');
const ulItems = document.querySelector('.ul-items');

  console.log('main js');
function changeClass () {
  for(let i=0; i<3;i++){
      if (lines[i].classList.contains("noAnimation")){
        lines[i].classList.add("close"); 
        lines[i].classList.remove("noAnimation");  
      }
      else if (lines[i].classList.contains("close")){
          lines[i].classList.add("rev");
          lines[i].classList.remove("close");  
      }
      else if (lines[i].classList.contains("rev")){
          lines[i].classList.add("close");  
          lines[i].classList.remove("rev");
      }; 
}}

linesContainer[0].addEventListener("click", changeClass);  


linesContainer[0].addEventListener("click", () => {
  menu.classList.toggle("open-nav");
  ulItems.style.display = "flex";
});

