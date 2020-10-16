var article = document.createElement("ARTICLE");
article.setAttribute("id","12345")
var nazev = document.createElement("H2");
nazev.innerHTML = "Test1";
var cena = document.createElement("P");
cena.innerHTML = "200 Kč";

article.appendChild(nazev);
article.appendChild(cena);

document.getElementById("nabidka").appendChild(article);
