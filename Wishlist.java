/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.maxi.myapp.entities;

import java.util.ArrayList;

/**
 *
 * @author Lou44
 */
public class Wishlist {
    public ArrayList<Produit> wl= new ArrayList<>();
    public static Wishlist instance=null;
    
    
    
    public void ajouter (Produit p) {
       if(!wl.contains(p)){
        wl.add(p);
        }
    }
    
    public double total()
    {
        double x=0;
        for(int i=0;i<this.getInstance().wl.size();i++)
        {
            x += this.getInstance().wl.get(i).getPrix_vente();
        }
        return x;
    }
    

    public Wishlist() {
      
    }

    @Override
    public String toString() {
        return "Wishlist{"+ wl + '}';
    }

    public static Wishlist getInstance() {
        if (instance == null) {
            instance = new Wishlist();
        }
        return instance;
    }  

   
    
    
}
