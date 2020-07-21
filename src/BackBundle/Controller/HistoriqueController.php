<?php

namespace BackBundle\Controller;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use BackBundle\Entity\Commandef;
use BackBundle\Entity\Fournisseur;
use BackBundle\Entity\Historique;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ComboChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxis;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Historique controller.
 *
 */
class HistoriqueController extends Controller
{
    /**
     * Lists all historique entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $historiques = $em->getRepository('BackBundle:Commandef')->findBy(array('etat'=>'Livre'));

        return $this->render('historique/index.html.twig', array(
            'historiques' => $historiques,
        ));
    }
    public function showstatAction()
    {$em = $this->getDoctrine()->getManager();
        $l = $em->createQuery("select count(u)  from BackBundle:Commandef u where u.etat='Livré'")
            ->getresult();
        $e = $em->createQuery("select count(u)  from BackBundle:Commandef u where u.etat='En cours'")
            ->getresult();
        $tot = $em->createQuery("select sum(u.prixtotal)  from BackBundle:Commandef u ")
            ->getresult();

        $ac = $em->createQuery("select u from BackBundle:Commandef u ORDER BY u.date DESC")
            ->getresult();



        $ac2= array();
for ( $i=0;$i<7;$i++){
$ac2[$i]=$ac[$i];
}

$dat=new \DateTime();

        return $this->render('historique/stat.html.twig', array(
            'l' => $l[0][1],
            'e'=>$e[0][1],
            'total'=>$tot[0][1],
        'ac'=>$ac2,
          'dat'=>$dat  ));
    }




    public function statrechercheAction(Request $request)
    {
       $critere= $request->get('critere');
      if($critere=="Categorie") {
          $em = $this->getDoctrine()->getManager();
          $Premium = $em->createQuery("select count(u)  from BackBundle:Fournisseur u where u.categorief=1")
              ->getresult();
          $Gold = $em->createQuery("select count(u)  from BackBundle:Fournisseur u where u.categorief=2")
              ->getresult();
          $Silver = $em->createQuery("select count(u)  from BackBundle:Fournisseur u where u.categorief=3")
              ->getresult();
          $All = $em->createQuery("select count(u)  from BackBundle:Fournisseur u")
              ->getresult();
          $pieChart = new PieChart();
          $pieChart->getData()->setArrayToDataTable(
              [['Categorie', 'Nombre'],
                  ['Premium', ($Premium[0][1] * 100) / $All[0][1]],
                  ['Silver', ($Silver[0][1] * 100) / $All[0][1]],
                  ['Gold', ($Gold[0][1] * 100) / $All[0][1]]]
          );

          $jsondata = array();
          $idx = 0;

          $temp = array('Premium' => ($Premium[0][1] * 100) / $All[0][1],
              'Silver' => ($Silver[0][1] * 100) / $All[0][1],
              'Gold' => ($Gold[0][1] * 100) / $All[0][1]
          );

          $jsondata[$idx++] = $temp;

          return new JsonResponse($jsondata);
      } elseif($critere=="Nombre de Commande"){
        $em = $this->getDoctrine()->getManager();
        $nbc = $em->createQuery("select count(u)  from BackBundle:Commandef u ")
            ->getresult();
        $commande = $em->getRepository(Commandef::class)->findAll();
          $f = $em->getRepository(Fournisseur::class)->findAll();

        $data= array();
        $stat=['fournisseur', 'Pourcentage commandes'];

        $nb=0;
        array_push($data,$stat);

        foreach($f  as $c) {
            $nbcf = $em->createQuery("select count(u)  from BackBundle:Commandef u where u.idcf =".$c->getId()."")
                ->getresult();
            $stat=array();

            array_push($stat,$c->getNomf(),(($nbcf[0][1]) *100)/$nbc[0][1]);

            array_push($data,$stat);

        }return new JsonResponse($data);}

    }





    public function indexfAction(Fournisseur $historique)
    {
        $em = $this->getDoctrine()->getManager();



$i=$historique->getId();
        $historiques=$em->createQuery("select u  from BackBundle:Commandef u where u.etat ='Livré' and  u.idcf=".$i)
            ->getresult();
        $somme = $em->createQuery("select sum(u.prixtotal)  from BackBundle:Commandef u where u.etat='Livré' and u.idcf=".$i)
            ->getresult();
        return $this->render('historique/indexf.html.twig', array(
            'historiques' => $historiques,'fournisseur'=>$historique,'somme'=>$somme[0][1] ,
        ));
    }


    /**
     * Creates a new historique entity.
     *
     */
    public function newAction(Request $request)
    {
        $historique = new Historique();
        $form = $this->createForm('BackBundle\Form\HistoriqueType', $historique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();




        $produit = $em->getRepository('BackBundle:Produit')->find($historique->getIdp()) ;
         dump($produit);
         die("a");

            $historique->setPrixtotal($historique->getQuantite()*$produit->getPrixAchat());
            $em->persist($historique);
            $em->flush();

            return $this->redirectToRoute('historique_show', array('id' => $historique->getId()));
        }

        return $this->render('historique/new.html.twig', array(
            'historique' => $historique,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a historique entity.
     *
     */
    public function showAction(Historique $historique)
    {
        $deleteForm = $this->createDeleteForm($historique);

        return $this->render('historique/show.html.twig', array(
            'historique' => $historique,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing historique entity.
     *
     */
    public function editAction(Request $request, Historique $historique)
    {
        $deleteForm = $this->createDeleteForm($historique);
        $editForm = $this->createForm('BackBundle\Form\HistoriqueType', $historique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $produit = $em->getRepository('BackBundle:Produit')->find( $historique->getIdp()) ;
            $historique->setPrixtotal($historique->getQuantite()*$produit->getPrixAchat());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('historique_edit', array('id' => $historique->getId()));
        }

        return $this->render('historique/edit.html.twig', array(
            'historique' => $historique,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a historique entity.
     *
     */
    public function deleteAction(Request $request, Historique $historique)
    {
        $form = $this->createDeleteForm($historique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($historique);
            $em->flush();
        }

        return $this->redirectToRoute('historique_index');
    }

    /**
     * Creates a form to delete a historique entity.
     *
     * @param Historique $historique The historique entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Historique $historique)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historique_delete', array('id' => $historique->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
   }
