const data = document.querySelectorAll(`.data`);
document.getElementById("logo").addEventListener("click", function () {
  window.location.href = "./file.php";
});

document.querySelector(".signout-btn").addEventListener("click", () => {
  alert("Signed out successfully!");
  window.location.href = "./index.php";
});
const id = Number(data[3].textContent);
document.querySelector(".delete-btn").addEventListener("click", () => {
  if (confirm("Are you sure you want to delete your account?")) {
    alert("Account deleted.");
    $.ajax({
      type: "POST",
      url: "include/u_d.php",
      data: {
        u_id: id,
      },
      success: function (response) {
        // do something on success response
        window.location.href = "./index.php";
      },

      error: function (response) {
        console.log(5);
        // do something on error response
      },
    });
    // actual deletion logic here
  }
});

document.querySelector(".history-btn").addEventListener("click", () => {
  const container = document.querySelector(".history-table-container");
  container.style.display =
    container.style.display === "none" ? "block" : "none";
});

document.getElementById("menu-toggle").addEventListener("click", function () {
  const sidebar = document.getElementById("sidebar");
  sidebar.style.left = sidebar.style.left === "0px" ? "-220px" : "0px";
});
document.getElementById("menu-toggle1").addEventListener("click", function () {
  const sidebar = document.getElementById("sidebar");
  sidebar.style.left = sidebar.style.left === "0px" ? "-220px" : "0px";
});
document.querySelector(`.home`).addEventListener("click", function () {
  window.location.href = "./file.php";
});
document.querySelector(`.home1`).addEventListener("click", function () {
  window.location.href = "./file.php";
});

document.querySelector(`.cart`).addEventListener("click", function () {
  window.location.href = "./payment.php";
});

document.querySelector(`.books`).addEventListener("click", function () {
  window.location.href = "./booksPage.php";
});

document.querySelector(`.books1`).addEventListener("click", function () {
  window.location.href = "./booksPage.php";
});

document.querySelector(`.user`).placeholder = data[0].textContent;
document.querySelector(`.email`).placeholder = data[2].textContent;
document.querySelector(`.phone`).placeholder = data[1].textContent;
document.querySelector(`.user-name`).textContent = data[0].textContent;
