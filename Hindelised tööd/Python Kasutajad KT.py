import random

it22 = open("it21.txt", encoding = "UTF-8")
failisisu = it22.readlines()

def pullikaka(p):
    for i in p:
        i = i.lower()
        i = i.replace("ö", "")
        i = i.replace("ä", "")
        i = i.replace("õ", "")
        i = i.replace("ü", "")
        i = i.replace ("\n", "")
        em = i.split(" ")
        print(f"{i[0]}{em[1]}@gmail.com | {em[0]}.{em[1]}@gmail.com | {i[0]}{random.randint(10:)}")

pullikaka(failisisu)      
