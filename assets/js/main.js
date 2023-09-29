window.onload = function () {
  const sidebar = document.querySelector(".sidebar");
  const closeBtn = document.querySelector("#btn");
  const searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", function () {
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  searchBtn.addEventListener("click", function () {
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
      closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    } else {
      closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  }
};

// SWAP CONTENT UNDER WHAT WOULD YOU DO CARD
document.addEventListener("DOMContentLoaded", function () {
  // Gather all the clickable options into an array
  const options = ["engage", "create", "automate", "design", "learn"];

  options.forEach((option) => {
    // For each option, get its corresponding divs that should be shown/hidden
    let divsToShow = document.querySelectorAll(".content-" + option);

    // Add an event listener to each option
    document.getElementById(option).addEventListener("click", function (event) {
      event.preventDefault(); // Prevents the default action of the anchor tag

      // Hide all divs initially
      options.forEach((opt) => {
        document.querySelectorAll(".content-" + opt).forEach((div) => {
          div.style.display = "none";
        });
      });

      // Then, show the divs corresponding to the clicked option
      divsToShow.forEach((div) => {
        div.style.display = "block";
      });
    });
  });
});
