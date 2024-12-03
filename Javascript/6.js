print = console.log

// positiivne voi negatiivne
let number = 0
switch (true) {
    case (number > 0):
        print('number on postiivne')
        break
    
    case (number < 0):
        print ('number on negatiivne')
        break
    
    case (number === 0):
        print ('number on null')
        break
}

// restoran
let laud
let broneering = 7
switch (true) {
    case (broneering <= 2):
        laud = 'kahele'
        break
    case (broneering <= 4 && broneering >= 3):
        laud = 'neljale'
        break
    case (broneering <= 6 && broneering >= 5):
        laud = 'kuuele'
        break
    case (broneering > 6):
        laud = 'suur'
}

print ('valige laud ' + laud)