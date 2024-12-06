print = console.log

const card = document.querySelectorAll(".card")

card.forEach(card => {
    const img = card.querySelector('.card-img-top')
    const datatitle = img.getAttribute('data-title')
    const datasec = img.getAttribute("data-description")
    const cardtitle = card.querySelector(".card-title")
    const carddesc = card.querySelector(".card-text")
    cardtitle.innerHTML = datatitle
    carddesc.innerHTML  = datasec
});

