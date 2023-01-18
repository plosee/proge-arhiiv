from tkinter import *

##### hahaha naljakas akna seadmed #####
##### aaa ja marten laane ylesanne #####

root = Tk()                            
root.title('kalevipoja vaega kontrolltoo')
root.geometry('250x150')               
root.resizable(0, 0)                                                         

######################################## 

# siia tuleb jutt mis on 'terv2' funktsioonis.    
veelykslabel= Label(root, text = 'siia tuleb jutt' )
veelykslabel.grid(row=3, column=1)

# funktsioon, mis votab entryst/sisestusest kasutaja inputi, teeb selle integeriks
# siis kasutab seda integeri et muuta L muutujat mis naitab mitu korda tervitust 
# nii mitu korda kui kasutaja tahtis ja siis muudab 'veelykslabeli' configi
# mis viskab teksti programmi sisse
# 
# mul on pisike onnetus et see tegelikult ei hoia seda malus
# niiet naeb ainult seda viimast korda kui see vahetub
# ideeks voib olla teha nii mitu muutujat mis sisestuses ytleb aga see on liiga palju tood

def terv2():
    arv = int(sisestus.get())
    L = ""
    for i in range(arv):
        L += f"Võõrustaja: 'Tere!' \n Täna {i+1}. kord tervitada, mõtiskleb võõrustaja \n  Külaline: 'Tere, suur tänu kutse eest!'"
        veelykslabel.config(text = L)

# siin siis kysib mitu kylalist labeliga ja viskab prorammi entry, mille sisse saab kasutaja panna numbri
sisestuslabel = Label(root,text='Mitu kylalist tuleb sinna varki?')
sisestuslabel.grid(row=0,column=1)
sisestus = Entry(root,)
sisestus.grid(row=1,column=1,columnspan=2)

enter = Button(root, text= 'enter', command = terv2, width=20)
enter.grid(row=4, column=1)

# ja siis nagu alati on loop lopus et programm tootaks nii kaua kui kinni pannakse
root.mainloop()
