var article = document.createElement("ARTICLE");
article.setAttribute("id","12345")
var nazev = document.createElement("H2");
nazev.innerHTML = "Test1";
var cena = document.createElement("H4");
cena.innerHTML = "200 Kč";
var popis = document.createElement("P");
popis.innerHTML = "test test test test test test test test test test test test test test test";

article.appendChild(nazev);
article.appendChild(cena);
article.appendChild(popis);

document.getElementById("nabidka").appendChild(article);


var article2 = document.createElement("ARTICLE");
article2.setAttribute("id","12345")
var nazev2 = document.createElement("H2");
nazev2.innerHTML = "Test1";
var cena2 = document.createElement("H4");
cena2.innerHTML = "200 Kč";
var popis2 = document.createElement("P");
popis2.innerHTML = "test test test test test test test test test test test test test test test";

article2.appendChild(nazev2);
article2.appendChild(cena2);
article2.appendChild(popis2);

document.getElementById("nabidka").appendChild(article2);
