const siteMenu = () => {
    const menuButton = document.querySelector('.menu__button')
    const scrollMenuButton = document.querySelector('.menu__scroll-button')
    const menu = document.querySelector('.site-nav')
    const exitMenu = document.querySelector('.site-nav__exit-button')

    const openMenu = () => {
        menu.classList.add('site-nav--select')
    }

    const closeMenu = () => {
        menu.classList.remove('site-nav--select')
    }

    scrollMenuButton.addEventListener('click', openMenu)
    menuButton.addEventListener('click', openMenu)
    exitMenu.addEventListener('click', closeMenu)
    
}

siteMenu()