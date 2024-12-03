let print = console.log
// nimed esitahed suureks
const nimed = ["mari maasikas", "jaan jõesaar", "kristiina kukk", "margus mustikas", "jaak järve", "kadi kask", "Toomas Tamm", "Kadi Meri", "Leena Laas", "Madis Mets", "Hannes Hõbe", "Anu Allikas", "Kristjan Käär", "Eva Esimene", "Jüri Jõgi", "Liis Lepik", "Kalle Kask", "Tiina Teder", "Kaidi Koppel", "tiina Toom"];

nimed.forEach((nimi) => {
    const osa = nimi.split(' ');
    const esinimi = osa[0].charAt(0).toUpperCase() + osa[0].slice(1).toLowerCase();
    const perenimi = osa[1].charAt(0).toUpperCase() + osa[1].slice(1).toLowerCase();
    const nimi1 = esinimi + ' ' + perenimi;
    print(nimi1);
});

nimed.forEach((nimi) => {
    const osa = nimi.split(' ');
    const perenimi = osa[1].toLowerCase();
    const email = perenimi + '@metshein.ee';
    print(email);
})

function otsinime(nimi) {
    if (nimed.includes(nimi)) {
        print(nimi);
    }
}

otsinime('mari maasika');

// sunniaeg ja vanus
// Kasuta objektide massiivi ja lisa meetod, mis leiab inimeste sünniaja ja vanuse

const inimesteAndmed = [
    { nimi: "Mari Maasikas", isikukood: "38705123568" },
    { nimi: "Jaan Jõesaar", isikukood: "49811234567" },
    { nimi: "Kristiina Kukk", isikukood: "39203029876" },
    { nimi: "Margus Mustikas", isikukood: "49807010346" },
    { nimi: "Jaak Järve", isikukood: "39504234985" },
    { nimi: "Kadi Kask", isikukood: "39811136789" },
    // Lisa kontrollimiseks oma nimi ja isikukood
    ];

function leiaSunniaeg(isikukood) {
    const aasta = isikukood.slice(1, 3);
    const kuu = isikukood.slice(3, 5);
    const sünnikuupäev = isikukood.slice(5, 7);
    const sünniaeg = aasta + '.' + kuu + '.' + sünnikuupäev;
    print(sünniaeg);
}

function leiaVanus(isikukood) {
    let aasta = isikukood.slice(1, 3);
    aasta = parseInt(aasta, 10)
    let praeguneaasta = 2024
    print(aasta + 1900)
    if (aasta + 1900 > 2000) {
        aasta = aasta + 2000
    }
    else {
        aasta = aasta + 1900
    }

    let vanus = praeguneaasta - aasta
    print(vanus);
}

inimesteAndmed.forEach((inimesteAndme) => {
    leiaSunniaeg(inimesteAndme.isikukood);
    leiaVanus(inimesteAndme.isikukood);
});

// Kaugushüpe
// Kuva õpilase nimi, parim tulemus ja keskmine tulemus. Keskmine tulemus ümarda 2 komakohta.

const opilased = [
{ nimi: "Anna", tulemused: [4.5, 4.8, 4.6] },
{ nimi: "Mart", tulemused: [5.2, 5.1, 5.4] },
{ nimi: "Kati", tulemused: [4.9, 5.0, 4.7] },
{ nimi: "Jaan", tulemused: [4.3, 4.6, 4.4] },
{ nimi: "Liis", tulemused: [5.0, 5.2, 5.1] },
{ nimi: "Peeter", tulemused: [5.5, 5.3, 5.4] },
{ nimi: "Eva", tulemused: [4.8, 4.9, 4.7] },
{ nimi: "Marten", tulemused: [4.7, 4.6, 4.8] },
{ nimi: "Kairi", tulemused: [5.1, 5.3, 5.0] },
{ nimi: "Rasmus", tulemused: [4.4, 4.5, 4.3] },
];

print('//////////////////')
opilased.forEach((opilane) => {
    print(opilane.nimi)
    print(Math.max(...opilane.tulemused))
    let kokku = 0
    opilane.tulemused.forEach((tulemus) => {
        kokku = tulemus + kokku
    })
    let keskmine = kokku / opilane.tulemused.length
    print(Math.round(keskmine * 100) / 100)
    print('///////////////')
})