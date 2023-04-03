const proyecto = document.querySelector('.proyectos');
const proyectos = document.querySelectorAll('.proyecto');

function filterOptions(filter) {
    for (let i = 0; i < proyectos.length; i++) {
       
      if (filter === 'All') {
        proyectos[i].style.display = 'flex';
      } else if (proyectos[i].className.includes(filter)) {
        proyectos[i].style.display = 'flex';
      } else {
        proyectos[i].style.display = 'none';
      }
    }
  }  