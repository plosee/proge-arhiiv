// marten laane
// yl 2
// 29.10.24

// kellaaeg
let tunnid = "2"
let minutit = "38"
let sekundit = "59"
let kellaaeg = `${tunnid}:${minutit}:${sekundit}PM`
console.log(kellaaeg)

// tsittaat
let tsitaat = "kui ma ara suren, pista mu kirstu vibraator et mul igav ei oleks - 'mario metshein'"

// mallid
let eesnimi = "Jürimun"
let perenimi = "Onnüri"
let mall = `${eesnimi} ${perenimi} nimetaht on ` + eesnimi.charAt(0) + "." + perenimi.charAt(0) + "."
console.log(mall)

// pikkus
let nimi = "Muna, Juha"
let koma = nimi.indexOf(",")
let pere = nimi.slice(0, koma)
console.log(pere.toUpperCase)
console.log(pere.length)

// epost
let epost = "auto@hkhk.com"
let splitasi = epost.split("@")
console.log(splitasi[0] + "@gmail.com")

// analuus
let rida = "1,Marshal,Martinovic,mmartinovic0@dedecms.com,Male,40.19.226.175"
let ridaasi = rida.split(",")
console.log(ridaasi[5] + " " + ridaasi[3].split("@")[0])


