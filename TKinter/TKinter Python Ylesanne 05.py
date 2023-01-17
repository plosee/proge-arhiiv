from tkinter import *

#aken
aken = Tk()
aken.title('Kaibemaksukalkulaator')
aken.geometry('400x200')
font = ('Comic Sans MS', 12, 'bold italic') #haha comic sans
aken.option_add('*font', (font))

#sisestuse label ja entry
sisestulabel = Label(aken, text='Hind kaibemaksuta: ', padx=2,pady=2)
sisestulabel.grid(row=0,column=0)

sisestus = Entry(aken)
sisestus.grid(row=0,column=1, columnspan=4,padx=2,pady=2)

#random variabled
var = IntVar()
math = 0

#radiolabel
radiolabel = Label(aken, text='Kaibemaksumaar: ',pady=4)
radiolabel.grid(row=1,column=0)

#radiobutton
radio1 = Radiobutton(aken, text='9%',variable=var,value=1)
radio2 = Radiobutton(aken, text='20%',variable=var,value=2)
radio1.grid(row=1,column=2)
radio2.grid(row=2,column=2)

#vahe 
vahe = Label(aken, text='---------------------------------------')
vahe.grid(row=3,column=0, columnspan=4)

    
#kaibemaksuta/-ga hind ja label 
kaibemakslabel = Label(aken, text='kaibemaksuga hind = ')
kaibemakslabel.grid(row=4,column=0)

kmga = Label(aken, text='')
kmga.grid(row=4,column=1)

#############################################################

kaibemaksutalabel = Label(aken,text='kaibemaksuta hind = ')
kaibemaksutalabel.grid(row=5,column=0)

kmta = Label(aken, text='')
kmta.grid(row=5,column=1)

#funktsioonid
def arvutus():
    arv = float(sisestus.get())
    radio = var.get()
    if radio == 0:
        math = 0
    elif radio == 1:
        math = 0.09*arv+arv
        math = round(math,2)
    elif radio == 2:
        math = 0.2*arv+arv
        math = round(math,2)
    kmta.config(text=f'{arv}€')
    kmga.config(text=f'{math}€')
    math = 0

#button annab valja commandi mis pane math funktsiooni toole
#see programm pole live update kahjuks, kui oskaksin siis teeksin aga kell on 10 ohtul ja maj viitsi
enter = Button(aken, text='ok, arvuta',command=arvutus, width=10)
enter.grid(row=5,column=3)

aken.mainloop()