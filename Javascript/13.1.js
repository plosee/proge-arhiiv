print = console.log

// esimene
const tekst = document.querySelector("p")

tekst.removeAttribute("id")
tekst.setAttribute("attr", "mulle meeldivad lapsed")
print(tekst.getAttribute("attr"))
