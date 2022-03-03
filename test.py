import requests
from bs4 import BeautifulSoup
import sqlite3
from os import path

fichier = "bd.sq3"
ofi = open('recherche.txt','r')
recherche = ofi.read()
chaine = ""
for car in recherche:
    if car == " ":
        car = "+"
    if car == "-":
        car = "+-+"
    if car == ",":
        car = "%2C"
    chaine = chaine + car

r = requests.get("https://www.goafricaonline.com/ci/annuaire-resultat?whatWho="+chaine+"&search=")
c = r.content
soup = BeautifulSoup(c,"html.parser")
all = soup.find_all("div",{"class","infos"})
l = []
for item in all:
    d={}
    d["Nom"] = item.find("div",{"class":"name"}).text.replace("\n","").replace(" ","")
    d["Categorie"] = item.find("div",{"class":"category"}).text.replace("\n","").replace(" ","")
    d["Adresse"] = item.find("address").text.replace("\n","").replace(" ","")
    d["Numero"] = item.find("div",{"class":"tel"}).text.replace("\n","").replace(" ","")
    l.append(d)
print(l)
if(path.exists(fichier) == False):
    conn = sqlite3.connect(fichier)
    bdd = conn.cursor()
    bdd.execute("CREATE TABLE Entreprises(Nom TEXT, Categorie TEXT, Adresse TEXT, Numero TEXT)")

conn = sqlite3.connect(fichier)
bdd = conn.cursor()
bdd.execute("DELETE FROM Entreprises")
conn.commit()
for val in l:
    bdd.execute("INSERT INTO Entreprises(Nom,Categorie,Adresse,Numero) VALUES(?,?,?,?)",(val['Nom'], val['Categorie'],val['Adresse'],val['Numero']))
    conn.commit()
