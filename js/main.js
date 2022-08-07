// Mobile menu toggle
function toggleMobileMenu() {
    const toggleButton = document.querySelector('.js-header-toggle')
    const bodyTag = document.querySelector('body')

    toggleButton.addEventListener('click', () => {
        bodyTag.classList.toggle('--headermenu-visible')
    })
}
toggleMobileMenu()

function suppressGSAPWrnings() {
    gsap.config({nullTargetWarn:false});
}
suppressGSAPWrnings()

function animateHeroContent() {
    const heroContent = document.querySelector('.js-animate-hero-content');

    gsap.fromTo(heroContent, {
        autoAlpha: 0,
        clipPath: 'inset(0% 100% 0% 0%)'
    }, {
        autoAlpha: 1,
        clipPath: 'inset(0% 0% 0% 0%)',
        duration: 1,
        ease: "power2.inOut",
    })
}
animateHeroContent()

function animateArchiveCards() {
    const archiveCards = gsap.utils.toArray('.js-animate-archive-card')

    gsap.fromTo(archiveCards, {
        autoAlpha: 0,
    }, {
        autoAlpha: 1,
        duration: 0.8,
        stagger: 0.2,
        ease: "power2.inOut",
    })
}
animateArchiveCards()