window.addEventListener('load',()=>{
  const button_menu = document.querySelector('#menu-button');
  const button_croix = document.querySelector('#menu-croix');
  const menu = document.querySelector('#menu');

  button_menu.addEventListener('click',e=>{
    e.preventDefault()
    if(!menu.classList.contains('active')){
      menu.classList.add('active')
    }
  })
  button_croix.addEventListener('click',e=>{
    e.preventDefault()
    if(menu.classList.contains('active')){
      menu.classList.remove('active')
    }
  })
})

