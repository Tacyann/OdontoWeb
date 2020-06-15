//NavBar
// Navbar
const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
const instancesDropdown = M.Dropdown.init(elemsDropdown, {
    coverTrigger: false
});
const elemsSidenav = document.querySelectorAll(".sidenav");
const instancesSidenav = M.Sidenav.init(elemsSidenav, {
    edge: "left"
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems,);
  });


  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems);
  });
  
  var inputs = document.querySelectorAll('input');

function verificar() {
    return [].filter.call(inputs, function (input) {
        return input.checked;
    }).length;
}
document.querySelector('button').addEventListener('click', function () {
    var valido = verificar();
    if (!valido) alert('Preencher todos os checkbox!');
    //else alert('Tudo ok!');
});
