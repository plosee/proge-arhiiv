extends Node
var tunnitasu = 4
var tunnid = 47
var punktid = [7,28,64,51,81,40,21,73,34,98,39,17,33,85,35,44]


func _ready():
	print("------ Viies Ylesanne ------")
	too(tunnid, tunnitasu)
	eksamistat(punktid)

func too(x,y):
	var tasurounded = 0
	if tunnid >= 40:
		var tasu = x * y
		tasurounded += int(round(tasu))

	else:
		var tasu = 40 * y + (x - 40) * 1.5 * x
		tasurounded += int(round(tasu))
	
	print("tootasu on: ", tasurounded)

func eksamistat(x):
	var amount = 0
	for i in x:
		amount += i
	var keskmine = amount / x.size()
	
	print(keskmine, " on keskmine punktid")

	print(x)

	for i in x:
		if i >= 90:
			print(i, "p - 5")
		elif i >= 75:
			print(i, "p - 4")
		elif i >= 50:
			print(i, "p - 3")
		else:
			print(i, "p - 2")
		