let print = console.log

// temp
let temp = 20
if (temp >= 25) {
    print("VAGA KUUM ILM")
}
else if (temp <= 15) {
    print("KULM/../.")
}
else {
    print("MONUS!")
}

// KASUTAJTA
let kasutaja = "muna"
print((kasutaja == "admin") ? "tere admin" : "tere kylaline")

// pilet
let pilet = "tais"
let vanus = 17


if (vanus <= 18) {
    if (pilet == "tais") {
        print("hind on 10 1")
    }
    if (pilet == "soodus") {
        print("hinfd 8 2")
    }
}

else if (vanus >= 18) {
    if (vanus < 64) {
        if (pilet == "tais"){
            print("hind 20 3")
        }
        if (pilet == "soodus") {
            print("hoind on 15 4")
        }
    }
    if (vanus >= 64) {
        if (pilet == "tais") {
            print("hind 15 5")
        }
        if (pilet == "soodus") {
            print("hind 8 6")
        }
    }
}
