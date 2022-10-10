import turtle
 
#akna seaded
aken = turtle.Screen()
aken.setup(300,300)
 
#kujundi loomine
t = turtle.Turtle()
for x in range(5):
    t.forward(100)
    t.left(144)
    
for x in range(3):
    t.left(120)
    t.color("red")
    t.forward(100)
    
    
 
turtle.exitonclick()