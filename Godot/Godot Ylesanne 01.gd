extends Node

var mangijanimi = "kasutaja"
var eludearv = 100
var lenght = String(mangijanimi).length()

func _ready():
	print("------ Esimene Ylesanne ------")
	print(mangijanimi)
	print(eludearv)
	print(lenght)
	print(eludearv+2)
	print("========== nyyd tulevad randnumbrid ===========")
	for i in range(19):
		print(randi()%19+1)
