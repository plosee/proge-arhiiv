extends Node
var taisarv1 = 8
var taisarv2 = 19


func _ready():
	randomize()
	var raha = randi()%5000+1
	var kaup = randi()%5000+1
	print("------ Teine Ylesanne -------")
	if raha <= kaup:
		var puudus = kaup % raha
		print("sul pole piisavalt raha, puudu jaab ", puudus, " raha.")
	elif raha == kaup:
		print("sul on piisavalt raha, alles jaab 0 raha")
	else:
		var jaak = raha % kaup
		print("sul on piisavalt raha, alles jaab ", jaak, " raha")
	
	var arvutus = taisarv1 * taisarv2
	print("taisarvude korrutis on ", arvutus)
	if taisarv1 == taisarv2:
		print("tegemist on ruuduga")
	elif taisarv1 != taisarv2:
		print("tegemist on ristkylikuga")
