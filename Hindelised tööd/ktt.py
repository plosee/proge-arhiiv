import random

it22 = open("it22.txt.txt", encoding = "UTF-8")
failisisu = it22.readlines()

def replaceid(l):
    for i in l:
        i = i.lower()
        i = i.replace("ö", "")
        i = i.replace("ä", "")
        i = i.replace("õ", "")
        i = i.replace("ü", "")
        i= i.replace ("\n", "")
        em = i.split(" ")
    
def emailid(l):
    replaceid()
    for i in l:
        print(f"{i[0]}{em[1]}@gmail.com")
emailid(failisisu)

def emailid2(l):
    replaceid()
    for i in l:
        print(f"{em[0]}.{em[1]}@gmail.com")
emailid2(failisisu)

def paroolmunad(l):      
    for i in l:
        i = i.lower()
        i = i.replace ("\n", "")
        print(f"{i[0]}{random.randint(10,999)}")
paroolmunad(failisisu)
