/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.maxi.myapp.entities;

/**
 *
 * @author Lou44
 */
public class Categorie {
    private int id;
    private String libelle_c;

    public Categorie() {
    }

    public Categorie(String libelle_c) {
        this.libelle_c = libelle_c;
    }

    public Categorie(int id, String libelle_c) {
        this.id = id;
        this.libelle_c = libelle_c;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getLibelle_c() {
        return libelle_c;
    }

    public void setLibelle_c(String libelle_c) {
        this.libelle_c = libelle_c;
    }

    @Override
    public String toString() {
        return libelle_c ;
    }
    
    
    
}
