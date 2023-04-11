extends Node
var p2elud = 100
var p1elud = 100
var rng = RandomNumberGenerator.new()

func _ready():
    print("------ Kolmas Ylesanne ------")
    while p1elud && p2elud >= 0:
        rng.randomize()
        var p2dmg = rng.randi_range(8, 15)
        var p1dmg = rng.randi_range(8, 15)
        p1elud -= p2dmg
        p2elud -= p1dmg
        print("P2 dmg: ", p2dmg, " | P1 dmg: ", p1dmg)
        print("----------------------------")
        print("P1 elud: ", p1elud, " | P2 elud: ", p2elud)
        print("----------------------------")

    if p1elud && p2elud <= 0:
        print("Mang lopetatud, koik kaotasid")
    if p1elud <= 0:
        print("Mang lopetatud, P2 voidab.")
    if p2elud <= 0:
        print("Mang lopetatud, P1 voidab.")
