print = console.log

var ul = document.querySelector('ul')

// toote objekt
let toode = {
    nimetus: 'piim', hind: 20, kogus: 6000,

    koguhind(){
        return this.hind * this.kogus
    },

    kogusmuuda(kogus){
        this.kogus = kogus
    },
    sisu(){
        return `toode: ${this.nimetus}, hind: ${this.hind}, kogus:${this.kogus}`
    }
}

print(toode.nimetus + ', ' + toode.hind + ', ' + toode.kogus)
toode.kogusmuuda(200); print(toode.kogus)
print(toode.sisu())
print()

// ostukorv

const ostukorv = {
    tooted: [
        { nimi:'Piim', hind:3.60, kogus:2 },
        { nimi:'Leib', hind:2.00, kogus:1 },
        { nimi:'Munad', hind:1.50, kogus:6 },
        { nimi:'Juust', hind:4.20, kogus:1 },
        { nimi:'Tomatid', hind:2.30, kogus:3 },
    ],

    sisu(){
        this.tooted.forEach((toode) => {
            print(

`    Toode: ${toode.nimi}, 
    Hind: ${toode.hind}, 
    Kogus: ${toode.kogus}, 
    --------------------`
            );
            return `toode: ${this.nimetus}, hind: ${this.hind}, kogus:${this.kogus}`
        });
    },

    lisaToode(toode, hind, kogus){
        this.tooted.splice(0, 0, {nimi: toode, hind: hind, kogus: kogus} )
    },

    koguSumma(){
        let summa = 0
        this.tooted.forEach(toode => {
            summa = summa + toode.hind
        })
        print(summa)
    }
};

ostukorv.sisu()
ostukorv.lisaToode("villanoppija", 200, 1); ostukorv.sisu();
ostukorv.koguSumma()

ostukorv.tooted.forEach(element => {
    ul.innerHTML += `<li>${element}</li>`
});