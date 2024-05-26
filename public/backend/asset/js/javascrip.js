const menuli = document.querySelectorAll(
  ".admin-sidebar-content > ul > li > a"
);
for (let index = 0; index < menuli.length; index++) {
  menuli[index].addEventListener("click", (e) => {
    e.preventDefault;
    menuli[index].parentNode.querySelector("ul").classList.toggle("active");
  });
}
///////
function toggleSubMenu(id) {
    var submenu = document.getElementById(id);
    submenu.classList.toggle('open');
}



function showSubMenu(content) {
    var contentDiv = document.getElementById('content');
    if (content === 'dashboard') {
        contentDiv.innerHTML = '<h2>Dashboard</h2><p>Welcome to the dashboard.</p>';
    }
}

