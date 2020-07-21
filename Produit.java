/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.maxi.myapp.entities;

import java.util.Date;

/**
 *
 * @author Lou44
 */
public class Produit {
    private int id=0;
    private Categorie id_categorie;
    private int id_fournisseur;
    private String libelle_p;
    private double prix_achat;
    private double prix_vente;
    private String image; 
    private String description;
    private Date date_creation;
    private int nbrVues;
    private int likes;
    private int dislikes;
    private int rating;

    public Produit() {
    }

    public Produit(Categorie id_categorie, String libelle_p, double prix_achat, String image, String description) {
        this.id_categorie = id_categorie;
        this.libelle_p = libelle_p;
        this.prix_achat = prix_achat;
        this.image = image;
        this.description = description;
    }
    
    public Produit(Categorie id_categorie, String libelle_p, double prix_achat, double prix_vente, String image, String description) {
        this.id_categorie = id_categorie;
        this.libelle_p = libelle_p;
        this.prix_achat = prix_achat;
        this.prix_vente = prix_vente;
        this.image = image;
        this.description = description;
    }

    public Produit(int id, Categorie id_categorie, String libelle_p, double prix_achat, double prix_vente, String image, String description) {
        this.id = id;
        this.id_categorie = id_categorie;
        this.libelle_p = libelle_p;
        this.prix_achat = prix_achat;
        this.prix_vente = prix_vente;
        this.image = image;
        this.description = description;
    }

    public Produit(Categorie id_categorie, int id_fournisseur, String libelle_p, double prix_achat, double prix_vente, String image, String description, Date date_creation, int nbrVues, int likes, int dislikes, int rating) {
        this.id_categorie = id_categorie;
        this.id_fournisseur = id_fournisseur;
        this.libelle_p = libelle_p;
        this.prix_achat = prix_achat;
        this.prix_vente = prix_vente;
        this.image = image;
        this.description = description;
        this.date_creation = date_creation;
        this.nbrVues = nbrVues;
        this.likes = likes;
        this.dislikes = dislikes;
        this.rating = rating;
    }

    public Produit(int id, Categorie id_categorie, int id_fournisseur, String libelle_p, double prix_achat, double prix_vente, String image, String description, Date date_creation, int nbrVues, int likes, int dislikes, int rating) {
        this.id = id;
        this.id_categorie = id_categorie;
        this.id_fournisseur = id_fournisseur;
        this.libelle_p = libelle_p;
        this.prix_achat = prix_achat;
        this.prix_vente = prix_vente;
        this.image = image;
        this.description = description;
        this.date_creation = date_creation;
        this.nbrVues = nbrVues;
        this.likes = likes;
        this.dislikes = dislikes;
        this.rating = rating;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Categorie getId_categorie() {
        return id_categorie;
    }

    public void setId_categorie(Categorie id_categorie) {
        this.id_categorie = id_categorie;
    }

    public int getId_fournisseur() {
        return id_fournisseur;
    }

    public void setId_fournisseur(int id_fournisseur) {
        this.id_fournisseur = id_fournisseur;
    }

    public String getLibelle_p() {
        return libelle_p;
    }

    public void setLibelle_p(String libelle_p) {
        this.libelle_p = libelle_p;
    }

    public double getPrix_achat() {
        return prix_achat;
    }

    public void setPrix_achat(double prix_achat) {
        this.prix_achat = prix_achat;
    }

    public double getPrix_vente() {
        return prix_vente;
    }

    public void setPrix_vente(double prix_vente) {
        this.prix_vente = prix_vente;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Date getDate_creation() {
        return date_creation;
    }

    public void setDate_creation(Date date_creation) {
        this.date_creation = date_creation;
    }

    public int getNbrVues() {
        return nbrVues;
    }

    public void setNbrVues(int nbrVues) {
        this.nbrVues = nbrVues;
    }

    public int getLikes() {
        return likes;
    }

    public void setLikes(int likes) {
        this.likes = likes;
    }

    public int getDislikes() {
        return dislikes;
    }

    public void setDislikes(int dislikes) {
        this.dislikes = dislikes;
    }

    public int getRating1() {
        return rating;
    }

    public void setRating(int rating) {
        this.rating = rating;
    }

    @Override
    public String toString() {
        return "Produit{" + "libelle_p=" + libelle_p + '}';
    }

    @Override
    public int hashCode() {
        int hash = 7;
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Produit other = (Produit) obj;
        
        if (this.libelle_p != other.libelle_p || this.id != other.id) {
            return false;
        }
        return true;
    }

    

    
    
    
  
    

    
    
   
    
    
    
    
}
