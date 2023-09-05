extends Node2D
var elud = 3

func _on_Area2D_area_entered(area:Area2D):
	elud -= 1
	$KinematicBody2D.position = Vector2(100.0,20.0)

	if elud == 3:
		$player/KinematicBody2D/Camera2D/RichTextLabel.set_text("Elud: 3")
	elif elud == 2:
		$player/KinematicBody2D/Camera2D/RichTextLabel.set_text("Elud: 2")
	elif elud == 1:
		$player/KinematicBody2D/Camera2D/RichTextLabel.set_text("Elud: 1")
	elif elud == 0:
		$player/KinematicBody2D/Camera2D/RichTextLabel.set_text("Elud: 0")
		$player/KinematicBody2D/Camera2D/RichTextLabel2.set_text("Mäng läbi")
		yield(get_tree().create_timer(4), "timeout")
		get_tree().reload_current_scene()

