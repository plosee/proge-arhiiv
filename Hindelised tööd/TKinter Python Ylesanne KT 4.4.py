from tkinter import *

root = Tk()
root.title('munandi vaega kontrolltoo')
root.geometry('300x200')

veelykslabel= Label(root, text = 'siia tuleb jutt' )
veelykslabel.grid(row=3, column=1)

def terv2():
    arv = int(sisestus.get())
    for i in range(arv):
        L = f"Võõrustaja: 'Tere!' \n Täna {i+1}. kord tervitada, mõtiskleb võõrustaja \n  Külaline: 'Tere, suur tänu kutse eest!'"
    veelykslabel.config(text = L)

sisestuslabel = Label(root,text='Mitu kylalist tuleb sinna varki?')
sisestuslabel.grid(row=0,column=1)
sisestus = Entry(root)
sisestus.grid(row=1,column=1,columnspan=4)

enter = Button(root, text='enter', command= terv2)
enter.grid(row=2,column=0)

root.mainloop()