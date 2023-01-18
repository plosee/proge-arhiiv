from tkinter import *

# marten laane too nagu ikka
# teeb akna ss 
root = Tk()
root.title('Yl 01')
root.resizable(0, 0)
root.geometry('400x150')
root.minsize(200,100)
root.maxsize(800,400)
root.configure(background='#000000')

# default font hack      vvvvvvv
font = ('Tamoha', 12, 'bold italic')
root.option_add('*font',(font))
# default font hack      ^^^^^^^

# ja siis teeb labelid KOIKIDE \N-IDEGA KUNA UUED LABELID ON ******
label0 = Label(root, text='Nimi: Marten Laane\nRyhm: IT-22\n2022', bg='#9F2B68', padx=2, pady=2)
label0.pack()

#cheeky loop
root.mainloop()
