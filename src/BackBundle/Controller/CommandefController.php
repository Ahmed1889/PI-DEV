<?php

namespace BackBundle\Controller;
use BackBundle\Entity\Commandef;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Swift_SmtpTransport,\Swift_Mailer,\Swift_Message;
use Knp\Snappy\Pdf;
use Swift_Attachment;



/**
 * Commandef controller.
 *
 */
class CommandefController extends Controller
{
    /**
     * Lists all commandef entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commandefs = $em->getRepository('BackBundle:Commandef')->findBy(array('etat'=>'En cours'));


        return $this->render('commandef/index.html.twig', array(
            'commandefs' => $commandefs,
        ));
    }

    public function acceptAction(Commandef $commandef)
    {$em=$this->getDoctrine()->getManager();
    $commandef->setEtat("Livré");
    $commandef->setDate(new \DateTime());

    $em->persist($commandef);
    $em->flush();

    return $this->redirectToRoute('commandef_index');
    }

    /**
     * Creates a new commandef entity.
     *
     */
    public function newAction(Request $request)
    {
        $commandef = new Commandef();
        $form = $this->createForm('BackBundle\Form\CommandefType', $commandef);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
           $produit = $em->getRepository('BackBundle:Produit')->find($commandef->getIdcp()) ;
          $commandef->setPrixtotal($commandef->getQuantite()*$produit->getPrixAchat());
            $commandef->setEtat("En cours");
            $commandef->setDate(new \DateTime());
            $em->persist($commandef);
            $em->flush();
            $d=new \DateTime();
            $date=$d->format('Y-m-d H:i:s');
            $commandef->setDate(new \DateTime());

            $snappy = new Pdf('C://"Program Files/"/wkhtmltopdf/bin/wkhtmltopdf.exe');
            $snappy->generateFromHtml('

<style>.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}




h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
 
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="C:\xampp\htdocs\pi\web\back\photos\instagram_profile_image.png" height="250" width="250" align="center" >
      </div>
      <h1>Commande</h1>
      <div id="company" class="clearfix">
        <div>Maxi-Entrepot</div>
        <div>24 555 555</div>
        <div>Maxi-Entrepot@gmail.com</div>
      </div>
      <div id="project">
        <div><span> CLIENT</span>'.$commandef->getIdcf()->getNomf().'</div>
 
        <div><span>EMAIL</span>'.$commandef->getIdcf()->getEmailf().'</div>
        <div><span>'   .$date.'</span> </div>
       
      </div>
    </header>
    <main>
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="service">Produit</th>
            <th>Quantite</th>
            <th>Prix Unitaire</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          
            <td class="desc">'.$commandef->getIdcp()->getLibelleP().'</td>
            <td class="unit">'.$commandef->getQuantite().'</td>
            <td class="qty">'.$commandef->getIdcp()->getPrixAchat().'</td>
            <td class="total">'.$commandef->getPrixtotal().'</td>
          </tr>
        
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
 <div id="logo">
        <img align="right"src="C:\xampp\htdocs\pi\web\back\photos\1280px-Joachim_Gaucks_signature.svg.png"width="80" height="60" >
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>
', '/tmp/'.$commandef->getId().'.pdf');





            require_once 'C:\xampp\htdocs\pi\vendor\autoload.php';
            require_once 'C:\xampp\htdocs\pi\vendor\swiftmailer\swiftmailer\lib\swift_required.php';
// Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
                ->setUsername('maxientrepot@gmail.com')
                ->setPassword('maxientrepot.1')
            ;

// Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);


// Create a message
            $message = (new Swift_Message('Commande pour    '.$commandef->getIdcf()->getNomf()))
                ->setFrom(['maxientrepot@gmail.com' => 'Seif Maaref'])
                ->setTo([$commandef->getIdcf()->getEmailf(), 'other@domain.org' => 'A name'])
                ->setBody('Monsieur (Madame),
A la suite de notre conversation téléphonique , nous vous passons la commande ci desous :
Nous vous prio

ns de nous livrer en port dû les marchandises.
Le paiement sera effectué aux conditions habituelles, c’est-à-dire par chèque
dès réception de la facture.
Nous vous remercions de bien vouloir nous confirmer notre commande.
Veuillez agréer, Monsieur (Madame), nos salutations distinguées.
<table border="2">
  <tr>
    <th ></th>
    <th>Commande N°'.$commandef->getId().'</th>
    <th ></th>
    <th ></th>
  </tr>
  <tr>
    <td >Produit</td>
    <td >Quantite</td>
    <td >Prix Unitaire</td>
    <td >Prix Total</td>
  </tr>
  <tr>
    <td>'.$commandef->getIdcp()->getLibelleP().'</td>
    <td>'.$commandef->getQuantite().'</td>
    <td>'.$commandef->getIdcp()->getPrixAchat().'</td>
    <td >'.$commandef->getPrixtotal().'</td>
  </tr>
</table>', 'text/html')
            ->attach(Swift_Attachment::fromPath('/tmp/'.$commandef->getId().'.pdf'));



// Send the message
            $mailer->send($message);


            return $this->redirectToRoute('commandef_index', array('id' => $commandef->getId()));
        }

        return $this->render('commandef/new.html.twig', array(
            'commandef' => $commandef,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commandef entity.
     *
     */
    public function showAction(Commandef $commandef)
    {
        $deleteForm = $this->createDeleteForm($commandef);

        return $this->render('commandef/show.html.twig', array(
            'commandef' => $commandef,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commandef entity.
     *
     */
    public function editAction(Request $request, Commandef $commandef)
    {
        $deleteForm = $this->createDeleteForm($commandef);
        $editForm = $this->createForm('BackBundle\Form\CommandefType', $commandef);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commandef_edit', array('id' => $commandef->getId()));
        }

        return $this->render('commandef/edit.html.twig', array(
            'commandef' => $commandef,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commandef entity.
     *
     */
    public function deleteAction(Request $request, Commandef $commandef)
    {
        $form = $this->createDeleteForm($commandef);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commandef);
            $em->flush();
        }

        return $this->redirectToRoute('commandef_index');
    }

    /**
     * Creates a form to delete a commandef entity.
     *
     * @param Commandef $commandef The commandef entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commandef $commandef)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commandef_delete', array('id' => $commandef->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
