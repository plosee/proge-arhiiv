print = console.log

// valime .card asja
const card = document.querySelectorAll(".card")

// iga asja mis card all on
card.forEach(card => {
    const img = card.querySelector('.card-img-top')
    const datatitle = img.getAttribute('data-title')
    const datasec = img.getAttribute("data-description")
    const cardtitle = card.querySelector(".card-title")
    const carddesc = card.querySelector(".card-text")
    cardtitle.innerHTML = datatitle
    carddesc.innerHTML  = datasec
});

