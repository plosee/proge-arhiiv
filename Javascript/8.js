let print = console.log

let mundid = [200, 0.2, 10, 0.01, 2, 1, 0.1, 0.02, 0.05, 100, 5, 0.5, 50, 20]
let count = 0
let oiged = [1, 2, 5, 10, 20, 50]
let mundid2 = []

while (count != mundid.length) {
    if (oiged.includes(mundid[count])){
        mundid2.push(mundid[count])
    }
    count++
}

let mundidkokku = 0
for (let i = 0; i < mundid2.length; i++) {
    mundidkokku = mundidkokku + mundid2[i]
}

print(mundid2)
print(mundid2.length)
print(mundidkokku)