let navBar = document.getElementById('navBar');
let showNavBarBtn = document.getElementById('showNavBarBtn');
let hideNavBarBtn = document.getElementById('hideNavBarBtn');

function showNavBar() {
  navBar.style.display = "flex";
  showNavBarBtn.style.display = "none";
  hideNavBarBtn.style.display = "flex";
}

function hideNavBar(){
  navBar.style.display = "none";
  showNavBarBtn.style.display = "flex";
  hideNavBarBtn.style.display = "none";
}
