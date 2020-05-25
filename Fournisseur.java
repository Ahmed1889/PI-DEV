/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.maxi.myapp.entities;

/**
 *
 * @author ASUS
 */
public class Fournisseur {
    int id;

   
    String nameF;
    String telF;
    String emailF;
    String SiteWebF;
    int catF;
    String cat;
    Categorief f;

    public Categorief getF() {
        return f;
    }

    public void setF(Categorief f) {
        this.f = f;
    }
    
    
    
    public String getCat() {
        return cat;
    }

    public void setCat(String cat) {
        this.cat = cat;
    }
    
     public Fournisseur(int id, String nameF, String telF, String emailF, String SiteWebF, int catF) {
        this.id = id;
        this.nameF = nameF;
        this.telF = telF;
        this.emailF = emailF;
        this.SiteWebF = SiteWebF;
        this.catF = catF;
    }

    public Fournisseur(String nameF, String telF, String emailF, String SiteWebF) {
        this.nameF = nameF;
        this.telF = telF;
        this.emailF = emailF;
        this.SiteWebF = SiteWebF;
        
    }

    public Fournisseur(String nameF, String telF, String emailF, String SiteWebF, int catF) {
        this.nameF = nameF;
        this.telF = telF;
        this.emailF = emailF;
        this.SiteWebF = SiteWebF;
        this.catF = catF;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Fournisseur() {
    }

    public String getNameF() {
        return nameF;
    }

    public void setNameF(String nameF) {
        this.nameF = nameF;
    }

    public String getTelF() {
        return telF;
    }

    public void setTelF(String telF) {
        this.telF = telF;
    }

    public String getEmailF() {
        return emailF;
    }

    public void setEmailF(String emailF) {
        this.emailF = emailF;
    }

    public String getSiteWebF() {
        return SiteWebF;
    }

    public void setSiteWebF(String SiteWebF) {
        this.SiteWebF = SiteWebF;
    }

    public int getCatF() {
        return catF;
    }

    public void setCatF(int catF) {
        this.catF = catF;
    }

    @Override
    public String toString() {
        return nameF;
    }
    
      public String tooString() {
        return nameF +"  " +telF +"  " +emailF +"  " +SiteWebF +"  " +f + "  "+ id;
    }

  
    
    
    
    
    
}
