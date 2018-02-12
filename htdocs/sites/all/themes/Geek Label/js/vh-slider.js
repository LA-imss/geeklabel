  var $ = jQuery;
  var pages = document.querySelectorAll('.section');
  let dest=[];
  for ( let i = 0; i < pages.length; i++){
    const button = document.createElement('div');
    button.className = 'pager red';
    if (i==0) { button.className = 'pager white'}
    if (i==4 || i==5) { button.className = 'pager black'; }
    button.innerHTML = '';
    dest.push(pages[i].offsetTop);
    if (i<pages.length-1) {
      pages[i].appendChild(button);
      button.addEventListener('click', function() { scrollTo(dest[i+1]) } );
    }
  }
function scrollTo(dest) {
  $('html, body').animate({scrollTop: dest}, 700);
}