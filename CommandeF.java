/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.maxi.myapp.entities;

import java.util.Date;

/**
 *
 * @author ASUS
 */
public class CommandeF {
    int id;
    int quantite;
    float prixtotal;
    String etat;
    Fournisseur idf;
    Produit idp;
    Date date;
    

    public CommandeF(int id, int quantite, float prixtotal, String etat, Fournisseur idf, Produit idp, Date date) {
        this.id = id;
        this.quantite = quantite;
        this.prixtotal = prixtotal;
        this.etat = etat;
        this.idf = idf;
        this.idp = idp;
        this.date = date;
    }

    public CommandeF(int quantite, float prixtotal, String etat, Fournisseur idf, Produit idp, Date date) {
        this.quantite = quantite;
        this.prixtotal = prixtotal;
        this.etat = etat;
        this.idf = idf;
        this.idp = idp;
        this.date = date;
    }

  

    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public float getPrixtotal() {
        return prixtotal;
    }

    public void setPrixtotal(float prixtotal) {
        this.prixtotal = prixtotal;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

    public Fournisseur getIdf() {
        return idf;
    }

    public void setIdf(Fournisseur idf) {
        this.idf = idf;
    }

    public Produit getIdp() {
        return idp;
    }

    public void setIdp(Produit idp) {
        this.idp = idp;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public CommandeF() {
    }

    @Override
    public String toString() {
        return "CommandeF{" + "id=" + id + ", quantite=" + quantite + ", prixtotal=" + prixtotal + ", etat=" + etat + ", idf=" + idf + ", idp=" + idp + ", date=" + date + '}';
    }
    
    
    
}

