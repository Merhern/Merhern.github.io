let article = document.createElement("article");
article.setAttribute("id","12345")
let nazev = document.createElement("h2");
nazev.innerHTML = "Test1";
//document.getElementById("12345").appendChild(nazev);

let article2 = document.createElement("article");
article2.setAttribute("id","12346")
let nazev2 = document.createElement("h2");
nazev2.innerHTML = "Test1";
//document.getElementById("12346").appendChild(nazev2);

document.body.appendChild(article);
document.body.appendChild(nazev);
document.body.appendChild(article2);
document.body.appendChild(nazev2);
