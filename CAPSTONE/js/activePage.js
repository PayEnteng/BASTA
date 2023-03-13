

const activePage = window.location.pathname;
const aside = document.querySelectorAll('aside a').forEach(link => {
    if(link.href.includes(`${activePage}`)){
      link.classList.add('active');
      console.log(link);
    }
  })