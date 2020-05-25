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
public class Categorief {
    int id;
    String type;
    String desc;

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public Categorief() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getDesc() {
        return desc;
    }

    public void setDesc(String desc) {
        this.desc = desc;
    }

    @Override
    public String toString() {
        return "Categorief{" + "id=" + id + ", type=" + type + ", desc=" + desc + '}';
    }

   
    
}
