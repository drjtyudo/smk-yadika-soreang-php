// SHOW SCROLL
function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  if (this.scrollY >= 560) scrollUp.classList.add("show-scroll");
  else scrollUp.classList.remove("show-scroll");
}

window.addEventListener("scroll", scrollUp);
// END

// Indikator

const indikatorBtn1 = document.getElementById("indikator-btn1");
const indikatorBtn2 = document.getElementById("indikator-btn2");
const indikatorBtn3 = document.getElementById("indikator-btn3");
const indikatorBtn4 = document.getElementById("indikator-btn4");

const indikator2 = () => {
  if (this.scrollY >= 1355 && this.scrollY <= 1987) {
    indikatorBtn2.style.backgroundColor = "#20388C";
    indikatorBtn2.style.height = "24px";
    indikatorBtn2.style.borderRadius = "20px";
    indikatorBtn2.style.transition = "0.3s";
  } else {
    indikatorBtn2.style = null;
  }
};
const indikator3 = () => {
  if (this.scrollY >= 1987 && this.scrollY < 3005) {
    indikatorBtn3.style.backgroundColor = "#20388C";
    indikatorBtn3.style.height = "24px";
    indikatorBtn3.style.borderRadius = "20px";
    indikatorBtn3.style.transition = "0.3s";
  } else {
    indikatorBtn3.style = null;
  }
};
const indikator4 = () => {
  if (this.scrollY > 1987 && this.scrollY <= 1987) {
    indikatorBtn4.style.backgroundColor = "#20388C";
    indikatorBtn4.style.height = "24px";
    indikatorBtn4.style.borderRadius = "20px";
    indikatorBtn4.style.transition = "0.3s";
  } else {
    indikatorBtn4.style = null;
  }
};

window.addEventListener("scroll", indikator2);
window.addEventListener("scroll", indikator3);
window.addEventListener("scroll", indikator4);

// cta page

// const ctaPage = document.getElementById("CTA-page");

// if (this.screen.width >= 767) {
//   ctaPage.remove();
// }
