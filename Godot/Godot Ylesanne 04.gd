extends Node

var nimed = ["Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett",
"Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
"Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
"Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
"Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes"]

var player = {"posx": 0, "posy": 0, "health": 100, "items": ["bible", "cross"], "gold": 200}

func _ready():
    print("------ Neljas Ylesanne ------")
    print(nimed.size())
    print(nimed[0])
    nimed.sort()
    nimed.erase("Reyes")
    nimed.append("Marten")
    var suurim = nimed.max()
    print(suurim, " on suurim")
    print(nimed)

    var kullandus = 0
    kullandus += player.gold
    kullandus += kullandus*5
    print(kullandus)
    