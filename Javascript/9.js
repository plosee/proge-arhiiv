const print = console.log

// klassikaline funktsioon
function nimi() {
    print('marten')
}

nimi()

// noolefunktsioon
const nimi2 = () => print('marten');

nimi2()

// argumendiga funktsioon
function kuupaevEesti(kuupaev, kuu) {
    print(kuupaev + '.' + kuu + '.' + '24')
}

kuupaevEesti(1, 7)

// teadmata hulk
function keskmine(...arvud) {
    let summa = 0
    for (let i = 0; i < arvud.length; i++) {
        summa = summa + arvud[i]
    }
    print(summa / arvud.length)
}

keskmine(1,7,5,6)

// salajane sonum
const salajaneSonum = (sonum) => print(sonum.replace(/[a,e,i,o,u,õ,ä,ü,ö]/g, '*'));

salajaneSonum('munandid')

// unikaalsed nimed

let nimed = ["Kati", "Mati", "Kati", "Mari", "Mati", "Jüri"]

const leiaUnikaalsedNimed = (nimed) => {
    let unikaalsed = []
    nimed.forEach((nimi) => {
        if (!unikaalsed.includes(nimi)) {
            unikaalsed.push(nimi)
        }
    })
    print(unikaalsed)
}

leiaUnikaalsedNimed(nimed)