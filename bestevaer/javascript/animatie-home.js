// Main head text animation
var textWrapper = document.querySelector(".btext");
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
    .add({
        targets: '.btext .letter',
        scale: [4,1],
        opacity: [0,1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 1500,
        delay: (el, i) => 70*i
    }).add({
        targets: '.btext',
        opacity: 0,
        duration: 1500,
        easing: "easeOutExpo",
        delay: 10000
    });

    // end header text animations

    //Wave anmimation
    const wave1 = "M0,224L120,192C240,160,480,96,720,96C960,96,1200,160,1320,192L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z",
    wave2 = "M0,0L120,42.7C240,85,480,171,720,181.3C960,192,1200,128,1320,96L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z",
    wave3 = "M0,160L120,165.3C240,171,480,181,720,165.3C960,149,1200,107,1320,85.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z";

    anime({
        targets: '.wave > path',
        easing: 'linear',
        duration: '10000',
        loop: true,
        d: [
            {value: [wave1, wave2]},
            {value: [wave3]},
            {value: [wave1]}
        ]
    });