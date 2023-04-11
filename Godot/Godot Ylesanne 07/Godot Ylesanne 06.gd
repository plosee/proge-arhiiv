extends Node

var punktid = int(randi() % 1 + 20)
var vaenlaseElud = 100
var Salvsuurus = 5
var skoor = 0
var tabamispros = 0
var lasuarv = 0
var dmg = int(randi() % 12 + 8)

func _ready():
	print("Tulista 'Spacebar'iga et alustada.")

func _process(delta):
	randomize()
	
	if Input.is_action_just_pressed("Reload"):
		Salvsuurus = 5
		print("vahetan salve!")

	if Input.is_action_just_pressed("Tulista"):
		print("tulistame!")
		$"TextureRect/RichTextLabel".set_text("TULISTAMEE")
		Salvsuurus -= 1
		print("Salv: ", Salvsuurus)
		var text = "Salv: %d"
		$"TextureRect/RichTextLabel5".set_text(text % Salvsuurus)
		var pihtas = bool(randi() % 2)		

		if Salvsuurus <= 0:
			pihtas = false
		if pihtas == true:
			vaenlaseElud -= dmg
			lasuarv += 1
			print("pihtas! -", dmg, " | vaenlase elud: ", vaenlaseElud)
			var text1 = "Vaenlase Elud: %d"
			$"TextureRect/RichTextLabel4".set_text(text1 % vaenlaseElud)
			tabamispros += 1
		else:
			lasuarv += 1
			print("Moodas! -0 | vaenlase elud: ", vaenlaseElud)
			

	if vaenlaseElud < 0:
		var keskmine = lasuarv / tabamispros
		print("------ Mang labi! ------")
		print("Punktid: ", punktid, "\nLaskude arv: ", lasuarv, "\nTabamis protsent: ", keskmine, "%")
		var text2 = "Punktid: %d"
		$"TextureRect/RichTextLabel2".set_text(text2 % punktid)
		get_tree().paused = true
		if get_tree().paused == true:
			$"TextureRect/RichTextLabel3".set_text("MANG LABIIIIIII!!")
