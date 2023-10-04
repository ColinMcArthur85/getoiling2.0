// Initialize when the window loads
window.onload = function () {
  // TOGGLE SIDEBAR
  const sidebar = document.querySelector(".sidebar");
  const closeBtn = document.querySelector("#btn");
  const searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", toggleSidebar);
  searchBtn.addEventListener("click", toggleSidebar);

  function toggleSidebar() {
    sidebar.classList.toggle("open");
    menuBtnChange(); // change the button icon
  }

  function menuBtnChange() {
    // Change the menu button icon based on sidebar state
    if (sidebar.classList.contains("open")) {
      closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    } else {
      closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  }

  // SWAP CONTENT UNDER 'WHAT WOULD YOU DO' CARD
  const options = ["engage", "create", "automate", "design", "learn"];
  options.forEach((option) => {
    document.getElementById(option).addEventListener("click", function (event) {
      event.preventDefault();
      swapContent(option);
    });
  });

  function swapContent(option) {
    // Hide all content options
    options.forEach((opt) => {
      document.querySelectorAll(".content-" + opt).forEach((div) => {
        div.style.display = "none";
      });
    });
    // Display selected content option
    document.querySelectorAll(".content-" + option).forEach((div) => {
      div.style.display = "block";
    });
  }

  // PIE CHART INITIALIZATION
  initPieChart();

  // TOGGLE ACTIVE CLASS ON CARD HEADER ICONS
  document.querySelectorAll(".card .card-header a i").forEach((icon) => {
    icon.addEventListener("click", function (event) {
      event.preventDefault();
      toggleCardIconActivation(this);
    });
  });
};

function initPieChart() {
  // Initialize the pie chart
  var xValues = ["Emma Rodriguez", "Liam Bennett", "Ava Montgomery", "James Sullivan", "Mia Watkins"];
  var yValues = [55, 49, 44, 24, 15];
  var barColors = ["#1abc9c", "#e9e9e9", "#bc1a4b", "#0067ac", "#f9d6c1"];

  var total = yValues.reduce((a, b) => a + b, 0); // calculate total for percentage calculation

  // TOP 20 CHART
  new Chart("top20Chart", {
    type: "pie",
    data: {
      labels: xValues,
      datasets: [
        {
          backgroundColor: barColors,
          data: yValues,
          borderColor: "2e2e2e",
          borderWidth: 1,
        },
      ],
    },
    options: {
      title: {
        display: true,
      },
      legend: {
        position: "right",
      },
      tooltips: {
        callbacks: {
          label: function (tooltipItem, data) {
            var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
            var percentage = ((value / total) * 100).toFixed(2); // calculate the percentage
            return `${data.labels[tooltipItem.index]}: ${percentage}%`;
          },
        },
      },
      plugins: {
        datalabels: {
          formatter: (value, ctx) => {
            let sum = ctx.dataset._meta[0].total;
            let percentage = ((value * 100) / sum).toFixed(2) + "%"; // format it to your liking
            return percentage;
          },
          color: "#fff", // color of the percentage text
        },
      },
    },
  });

  var ctx = document.getElementById("systemActivityChart").getContext("2d");
  var chart = new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      datasets: [
        {
          label: "Overall Activity",
          data: [17, 21, 5, 35, 50],
          borderColor: "rgba(75, 192, 192, 1)",
          fill: false,
        },
      ],
    },
    options: {
      scales: {
        x: {
          beginAtZero: true,
        },
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}

function toggleCardIconActivation(clickedIcon) {
  // Deactivate other icons within the card and activate the clicked icon
  const parentCard = clickedIcon.closest(".card");
  parentCard.querySelectorAll(".card-header a i.active").forEach((activeIcon) => {
    activeIcon.classList.remove("active");
  });
  clickedIcon.classList.add("active");
}
