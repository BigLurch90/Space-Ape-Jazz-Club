const siteHeader = () => {

    const header = document.querySelector('.scroll-header')

    const toggleHeaderClass = () => {

        if (window.scrollY > 50) {
            header.classList.add('scroll-header--scroll')
        } else {
            header.classList.remove('scroll-header--scroll')
            }

    }

    window.addEventListener('scroll', toggleHeaderClass)

}

siteHeader()