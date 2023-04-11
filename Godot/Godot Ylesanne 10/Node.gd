extends Node
var elud = 3

func _process(delta):
	var pos2 = $Node2D/KinematicBody2D.position.y
	print(pos2)
	if pos2 > 272.0:
		elud -= 1
		$Node2D/KinematicBody2D.position = Vector2(45.0,20.0)

	if elud == 3:
		$Node2D/RichTextLabel.set_text("Elud: 3")
	elif elud == 2:
		$Node2D/RichTextLabel.set_text("Elud: 2")
	elif elud == 1:
		$Node2D/RichTextLabel.set_text("Elud: 1")
	elif elud == 0:
		$Node2D/RichTextLabel.set_text("Elud: 0")
		$Node2D/RichTextLabel2.set_text("Mäng läbi")
		yield(get_tree().create_timer(4), "timeout")
		get_tree().reload_current_scene()

