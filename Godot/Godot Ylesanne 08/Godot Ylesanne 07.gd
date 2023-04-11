extends Node
var p1punktid = 0
var p2punktid = 0
var KPK = ["kivi", "paber", "kaarid"]
var p1 = 5
var p2 = 5
var rng = RandomNumberGenerator.new()

func _process(delta):
	rng.randomize()
	p2 = rng.randi_range(0, 2)
	$"background/P1punktid".set_text(str(p1punktid))
	$"background/P2punktid".set_text(str(p2punktid))
	if p1punktid == 10 or p2punktid == 10:
		$"background/Voitjaon".set_text("Mäng läbi")
		$background/P1valis.set_text("")
		$background/P2valis.set_text("")
		$background/kivi.set_disabled(true)
		$background/paber.set_disabled(true)
		$background/kaarid.set_disabled(true)
		$background/uus_mang.set_disabled(false)
		yield(get_tree().create_timer(4), "timeout")
		get_tree().reload_current_scene()

func _on_kaarid_pressed():
	p1 = 2
	$background/P1valis.set_text("Sina valisid kaarid") 
	$background/P2valis.set_text("Arvuti valis " + KPK[p2])
	if p1 == p2:
		$background/Voitjaon.set_text("Viik")
		$background/P1punktid.set_text(str(p1punktid))
	elif p1 == 2:
		if p2 == 1:
			print("Scissors cuts paper! You win!")
			$background/Voitjaon.set_text("Sina võitsid")
			p1punktid += 1
			$background/P1punktid.set_text(str(p1punktid))
		else:
			print("Rock smashes scissors! You lose.")
			$background/Voitjaon.set_text("Arvuti võitis")
			p2punktid += 1
			$background/P2punktid.set_text(str(p2punktid))

func _on_kivi_pressed():
	p1 = 0
	$background/P1valis.set_text("Sina valisid kivi")
	$background/P2valis.set_text("Arvuti valis " + KPK[p2])
	if p2 == p1:
		print("Both players selected ",KPK[p1], ". It's a tie!")
		$background/Voitjaon.set_text("Viik")
		$background/P1punktid.set_text(str(p1punktid))
	elif p1 == 0:
		if p2 == 1:
			print("kivi voidab")
			$background/Voitjaon.set_text("Sina võitsid")
			p1punktid += 1
			$background/P1punktid.set_text(str(p1punktid))
		else:
			print("paper voidab")
			$background/Voitjaon.set_text("Arvuti võitis")
			p2punktid += 1
			$background/P2punktid.set_text(str(p2punktid))

func _on_paber_pressed():
	p1 = 1
	$background/P1valis.set_text("Sina valisid paberi")
	$background/P2valis.set_text("Arvuti valis " + KPK[p2])
	if p2 == p1:
		print("Both players selected ",KPK[p1], ". It's a tie!")
		$background/Voitjaon.set_text("Viik")
		$background/P1punktid.set_text(str(p1punktid))
	elif p1 == 1:
		if p2 == 0:
			print("Paper covers rock! You win!")
			$background/Voitjaon.set_text("Sina võitsid")
			p1punktid += 1
			$background/P1punktid.set_text(str(p1punktid))
		else:	
			print("Scissors cuts paper! You lose.")
			$background/Voitjaon.set_text("Arvuti võitis")
			p2punktid += 1
			$background/P2punktid.set_text(str(p2punktid))

func _on_uus_mang_pressed():
	get_tree().reload_current_scene()	

