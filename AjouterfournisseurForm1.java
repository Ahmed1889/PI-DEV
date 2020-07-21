/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.pheonixui;


import com.codename1.components.FloatingActionButton;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.animations.CommonTransitions;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Rectangle;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.RoundBorder;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.maxi.myapp.entities.Categorief;
import com.maxi.myapp.entities.Fournisseur;
import com.maxi.myapp.services.ServiceFournisseur;
import java.io.IOException;


/**
 *
 * @author 21692
 */
public class AjouterfournisseurForm1 extends BaseForm {

     public AjouterfournisseurForm1(Resources res ) {

        
         initGuiBuilderComponents(res);

       

        installSidemenu(res);

        getToolbar().addCommandToRightBar("", res.getImage("toolbar-profile-pic.png"), e -> {
        });
        
    }

//-- DON'T EDIT BELOW THIS LINE!!!
// <editor-fold defaultstate="collapsed" desc="Generated Code">                          
    private void initGuiBuilderComponents(Resources resourceObjectInstance) {


    com.codename1.ui.Container gui_Container_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
     com.codename1.ui.ComponentGroup gui_Component_Group_1 = new com.codename1.ui.ComponentGroup();
      com.codename1.ui.ComponentGroup gui_Component_Group_2= new com.codename1.ui.ComponentGroup();
     com.codename1.ui.TextField gui_Text_Field_2 = new com.codename1.ui.TextField();
     com.codename1.ui.TextField gui_Text_Field_1 = new com.codename1.ui.TextField();
     com.codename1.ui.TextField gui_Text_Field_3 = new com.codename1.ui.TextField();
     com.codename1.ui.TextField gui_Text_Field_4 = new com.codename1.ui.TextField();
     com.codename1.ui.TextField gui_Text_Field_5 = new com.codename1.ui.TextField();
     
      com.codename1.ui.ComboBox cat= new ComboBox("Premium","Gold","Silver");
     
     com.codename1.ui.Button gui_Button_2 = new com.codename1.ui.Button();

        setLayout(new com.codename1.ui.layouts.BorderLayout());
        setTitle("FournisseurFrom");
        setName("FournisseurFrom");
        addComponent(com.codename1.ui.layouts.BorderLayout.CENTER, gui_Container_1);
        gui_Container_1.setScrollableY(true);
        gui_Container_1.setName("Container_1");
        
        
        gui_Container_1.addComponent(gui_Component_Group_1);
        gui_Container_1.addComponent(gui_Component_Group_2);
        gui_Component_Group_1.setName("Component_Group_1");
        gui_Component_Group_1.addComponent(gui_Text_Field_2);
        gui_Component_Group_1.addComponent(gui_Text_Field_1);
        gui_Component_Group_1.addComponent(gui_Text_Field_3);
        
        
        gui_Component_Group_1.addComponent(gui_Text_Field_4);
        gui_Component_Group_2.addComponent(cat);
        
        
        gui_Text_Field_2.setHint("Nom..");
        gui_Text_Field_2.setName("Text_Field_2");
     
        
        
        gui_Text_Field_1.setHint("Tel..");
        gui_Text_Field_1.setName("Text_Field_1");
   
        
        gui_Text_Field_3.setHint("Email..");
        gui_Text_Field_3.setName("Text_Field_3");
   
        
        gui_Text_Field_4.setHint("Sitewebf");
        gui_Text_Field_4.setName("Text_Field_4");
   
        
        
        gui_Text_Field_5.setHint("categorie");
       gui_Text_Field_5.setName("Text_Field_5");
     
        
        
        
        
        gui_Container_1.addComponent(gui_Button_2);
 
        gui_Component_Group_1.setName("Component_Group_1");
        gui_Button_2.setText("Ajouter");
        gui_Button_2.setName("Button_2");
  
          gui_Button_2.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {
                    Fournisseur r = new Fournisseur();
                    Categorief  f = new Categorief();
                    
                     
                   
              
                       r.setNameF(gui_Text_Field_2.getText());
                        r.setTelF(gui_Text_Field_1.getText());
                        r.setEmailF(gui_Text_Field_3.getText());
                        r.setSiteWebF(gui_Text_Field_4.getText());
                        System.out.println(cat.getSelectedItem());
                        
                        
                        r.setCatF(cat.getSelectedIndex()+1);
                        
                       /* if(cat.getSelectedItem().equals("Premium")) 
                        {f.setId(1);f.setDesc("...");f.setType("Premium");}
                        
                        else if(cat.getSelectedItem().equals("Silver")) 
                                {f.setId(3);f.setDesc("...");f.setType("Silver");}
                        else
                            if(cat.getSelectedItem().equals("Gold")){f.setId(2);f.setDesc("...");f.setType("Gold");};
                            r.setF(f);*/
                       
                       
                        
                        
             
                    //System.out.println("supprimeee");
                    
                    System.out.println(cat.getSelectedIndex());
                    
                    try {
                        if (ServiceFournisseur.getInstance().AjouterFournisseurJson(r)==1) {
                           new FournisseurForm(resourceObjectInstance).show();
                            // Dialog.show("Completed", "Voulez-vous vraiment supprimer la reclamation n:"+gui_Label_ID.getText(), "Modifier", "Supprimer");
                        } // Logger.getLogger(ReclamationForm.class.getName()).log(Level.SEVERE, null, ex);
                    } catch (IOException ex) {
                       
                    }
                    
                }
            });

      
        }

    }// </editor-fold>

//-- DON'T EDIT ABOVE THIS LINE!!!



