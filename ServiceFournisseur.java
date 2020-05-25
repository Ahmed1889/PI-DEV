/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.maxi.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.media.Media;
import com.codename1.media.MediaManager;
import com.codename1.ui.Display;
import com.codename1.ui.events.ActionListener;
import com.maxi.myapp.entities.Categorie;
import com.maxi.myapp.entities.Categorief;
import com.maxi.myapp.entities.Fournisseur;
import com.maxi.myapp.entities.Produit;
import com.maxi.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Lou44
 */
public class ServiceFournisseur {
     public ArrayList<Fournisseur> tasks;
    int rep;
    public static ServiceFournisseur instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    private ServiceFournisseur() {
         req = new ConnectionRequest();
    }

    public static ServiceFournisseur getInstance() {
        if (instance == null) {
            instance = new ServiceFournisseur();
        }
        return instance;
    }
    public ArrayList<Fournisseur> parseFournisseur(String jsonText){
        try {
            tasks=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Fournisseur t = new Fournisseur();
             
                float id = Float.parseFloat(obj.get("id").toString());
                t.setId((int)id);
                
                String nomf = obj.get("nomf").toString();
                t.setNameF(nomf);
              
                t.setEmailF(obj.get("emailf").toString());
                t.setTelF(obj.get("telf").toString());
                t.setSiteWebF(obj.get("sitewebf").toString());
                 String catf = obj.get("catf").toString();
              
                 
                  if(catf.equals("Silver")) t.setCatF(3);
                  if(catf.equals("Gold")) t.setCatF(2);
                  if(catf.equals("Premium")) t.setCatF(1);
             
               tasks.add(t);
                }
        } catch (IOException ex) {}
        return tasks;
    }
    public ArrayList<Fournisseur> getAllfournisseur(){
        String url = Statics.BASE_URL+"/fournisseur/indexmob";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                tasks = parseFournisseur(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        
        return tasks;
    }
     public int parseAddfournisseur(String jsonText) throws IOException {
     // int rep = 0;
         try {
            
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
                 
                  
            for(Map<String,Object> obj : list){
                
  
                double reffs= Double.parseDouble(obj.get("etat").toString());
            
                int reffs2 = (int) reffs;        
                rep=reffs2;
            }

        } catch (IOException ex) {
             System.out.println("error");

       }
        return rep;
    }
    
     
     
     
   public int SupprimerfournisseurJson(Fournisseur r) throws IOException {
 
        String url = Statics.BASE_URL + "/fournisseur/supmob/"+r.getId();
             req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                try {
                    // System.out.println(new String(req.getResponseData()));
                     rep = parseAddfournisseur(new String(req.getResponseData()));
                   // System.out.println(reclamations.get(0).getIdR());
                   // ValiderPanierDetailsCommandeJson(commandes.get(0).getId());
                } catch (Exception ex) {
                    //  Logger.getLogger(ServiceCommande.class.getName()).log(Level.SEVERE, null, ex);
                }

                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
           Media m = MediaManager.createMedia((Display.getInstance().getResourceAsStream(getClass(), "/bell.mp3")), "audio/mpeg");
                            m.play();
        return rep;
     
     
        }
      /* NetworkManager.getInstance().addToQueueAndWait(req);
           Media m = MediaManager.createMedia((Display.getInstance().getResourceAsStream(getClass(), "/bell.mp3")), "audio/mpeg");
                            m.play();*/
        
         public int ModifierFournisseurJson(Fournisseur r) {

        String url = Statics.BASE_URL + "/fournisseur/modmob"+"/" +r.getNameF() +"/"+ r.getTelF()+"/" + r.getSiteWebF()+"/"+ r.getEmailF()+"/"+ r.getCatF()+"/" + r.getId();
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                try {
                    // System.out.println(new String(req.getResponseData()));
                     rep = parseAddfournisseur(new String(req.getResponseData()));
                   // System.out.println(reclamations.get(0).getIdR());
                   // ValiderPanierDetailsCommandeJson(commandes.get(0).getId());
                } catch (Exception ex) {
                    //  Logger.getLogger(ServiceCommande.class.getName()).log(Level.SEVERE, null, ex);
                }

                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return rep;
     
     
        }
      public int AjouterFournisseurJson(Fournisseur r) throws IOException {

       String url = Statics.BASE_URL + "/fournisseur/addmob"+"/" +r.getNameF() +"/"+ r.getTelF()+"/" + r.getSiteWebF()+"/"+ r.getEmailF()+"/"+ r.getCatF();
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                try {
                    // System.out.println(new String(req.getResponseData()));
                    rep = parseAddfournisseur(new String(req.getResponseData()));
                   // System.out.println(reclamations.get(0).getIdR());
                   // ValiderPanierDetailsCommandeJson(commandes.get(0).getId());
                } catch (Exception ex) {
                    //  Logger.getLogger(ServiceCommande.class.getName()).log(Level.SEVERE, null, ex);
                }

                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
         Media m = MediaManager.createMedia((Display.getInstance().getResourceAsStream(getClass(), "/bell.mp3")), "audio/mpeg");
                            m.play();
        return rep;
     
     
        }
     
        
    
}
    
  






















