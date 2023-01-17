from tkinter import *

# marten laane too nagu alati
# selfexplanitory akna start
aken = Tk()
aken.title('taani lipp')
aken.resizable(0, 0)

# Canvase eksisteerimise luba 
kujundaken = Canvas(aken, width=318, height=240)
kujundaken.pack()
# ma tean et see width ja height naeb imelik valja
# aga see on wikipedia ratio ja ma votsin pildi sealt kuna maj viitsi piksleid lugema hakata     

# kujundite moodustamine
    # alustame taanipunasega 
kujundaken.create_rectangle(0,0,350,250, fill='#C8102E')

    # nyyd me teeme siia yhed suured valged ristkylikud
kujundaken.create_rectangle(105,0,140,250, fill='#ffffff', width=0)
kujundaken.create_rectangle(0,105,350,140, fill='#ffffff', width=0)


aken.mainloop()