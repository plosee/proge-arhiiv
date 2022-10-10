import turtle
 
#akna seaded
aken = turtle.Screen()
aken.setup(500,500)
 
#kujundi loomine
t = turtle.Turtle()
fd = 40

for i in range(4):
    t.lt(90)
    for x in range(4):
        t.left(90)
        t.fd(40)
        
        t.right(90)
        t.fd(fd)
        
        t.left(90)
        t.fd(40)
        
        
 
turtle.exitonclick()

        
