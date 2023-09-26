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

// document.getElementById("engage").addEventListener("click", function (event) {
//   event.preventDefault();
//   this.outerHTML = `
//      <li>
//         <a class="mouseover-ltr actions-list-item" href="#">
//            <div class="actions-list-item-title">
//               <i class="fas fa-envelope"></i>
//               <h3>SEND EMAIL, TEXT, OR APP NOTIFICATION</h3>
//            </div>
//            <p>Stay in touch with your contacts by sending or scheduling a message.</p>
//         </a>
//      </li>`;
// });
