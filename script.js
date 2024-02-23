function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

let subMenu = document.getElementById("subMenu");
function toggleMenu(){
  subMenu.classList.toggle("open-menu");
}

document.addEventListener('click', (event) => {
  if (!event.target.matches('#subMenu') && !event.target.matches('.user-pic')) {
    subMenu.classList.remove('open-menu');
  }
});

function show() {
  var x = document.getElementById("ip2");
  if (x.type === "password") {
      x.type = "text";
  } else {
      x.type = "password";
  }
}

