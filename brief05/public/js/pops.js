const pop = document.querySelector('#pop')

pop && setTimeout(() => {
    fade(pop)
}, 2000);

const fade = (element) => {
    let fadeEff = setInterval(() => {

        if (!element.style.opacity) {
            element.style.opacity = 1
        }

        if (element.style.opacity > 0) {
            element.style.opacity -= .1
        } else {
            clearInterval(fadeEff)
        }
    }, 10);
}