const image = document.querySelector('#image')
const up = document.querySelector('.up')

const changeNav = () => {
    const navbarClass = document.querySelector('.navbar').classList
    const navbarNavClass = document.querySelector('.navbar-nav').classList
    const upClass = up.classList

    if (document.documentElement.scrollTop > 600) {
        navbarClass.remove('bg-transparent', 'navbar-dark', 'py-4')
        navbarClass.add('bg-white', 'navbar-light', 'no-shadow', 'border-bottom')
        navbarNavClass.remove('mt-2')
        upClass.remove('d-none')
    } else {
        navbarClass.add('bg-transparent', 'navbar-dark', 'py-4')
        navbarClass.remove('bg-white', 'navbar-light', 'no-shadow', 'border-bottom')
        navbarNavClass.add('mt-2')
        upClass.add('d-none')
    }
}

const scrollTop = () => {
    document.documentElement.scrollTop = 0
}

const timer = () => {
    const countDownEl = document.querySelector('.countdown')
    const dayEl = countDownEl.querySelector('.day')
    const hourEl = countDownEl.querySelector('.hour')
    const minuteEl = countDownEl.querySelector('.minute')
    const secondEl = countDownEl.querySelector('.second')

    const time = new Date(weddingDate)
    const today = new Date()
    
    time.setHours(0)

    const left = time - today

    const day = Math.floor(left / (1000 * 60 * 60 * 24))
    const hour = Math.floor((left % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
    const minute = Math.floor((left % (1000 * 60 * 60)) / (1000 * 60))
    const second = Math.floor((left % (1000 * 60)) / 1000)

    if (left < 0) {
        clearInterval(countdown)
    } else {
        dayEl.textContent = day
        hourEl.textContent = hour
        minuteEl.textContent = minute
        secondEl.textContent = second
    }
}

image.addEventListener('show.bs.modal', function (e) {
    const src = e.explicitOriginalTarget.src
    const img = this.querySelector('img')

    img.src = src
})

up.onclick = scrollTop

window.onscroll = changeNav

changeNav()
const countdown = setInterval(timer, 1000)