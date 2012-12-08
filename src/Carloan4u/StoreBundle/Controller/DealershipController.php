<?php

namespace Carloan4u\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Carloan4u\StoreBundle\Entity\Dealership;
use Carloan4u\StoreBundle\Form\DealershipType;

/**
 * Dealership controller.
 *
 * @Route("/dealership")
 */
class DealershipController extends Controller
{
    /**
     * Lists all Dealership entities.
     *
     * @Route("/", name="dealership")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('Carloan4uStoreBundle:Dealership')->findAll();
        $entities_review = $em->getRepository('Carloan4uStoreBundle:Review')->findAll();




        return array(
            'entities' => $entities,
            'entities_review' =>  $entities_review
        );
    }

    /**
     * Finds and displays a Dealership entity.
     *
     * @Route("/{id}/show", name="dealership_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Carloan4uStoreBundle:Dealership')->find($id);

        $reviews = $em->getRepository('Carloan4uStoreBundle:Review')->findBy(array('dealership' =>$id));

        $average = 0;
        for($i=0; $i< count($reviews); $i++){
            $average = $average + $reviews[$i]-> getRate();
        }

        $average =  $average / count($reviews);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dealership entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'entity_reviews'      => $reviews,
            'average'  => $average,
            'delete_form' => $deleteForm->createView(),        );
    }


    /**
     * Displays a form to create a new Dealership entity.
     *
     * @Route("/new", name="dealership_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Dealership();
        $form   = $this->createForm(new DealershipType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Dealership entity.
     *
     * @Route("/create", name="dealership_create")
     * @Method("post")
     * @Template("Carloan4uStoreBundle:Dealership:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Dealership();
        $request = $this->getRequest();
        $form    = $this->createForm(new DealershipType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dealership_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Dealership entity.
     *
     * @Route("/{id}/edit", name="dealership_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Carloan4uStoreBundle:Dealership')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dealership entity.');
        }

        $editForm = $this->createForm(new DealershipType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Dealership entity.
     *
     * @Route("/{id}/update", name="dealership_update")
     * @Method("post")
     * @Template("Carloan4uStoreBundle:Dealership:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('Carloan4uStoreBundle:Dealership')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dealership entity.');
        }

        $editForm   = $this->createForm(new DealershipType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dealership_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Dealership entity.
     *
     * @Route("/{id}/delete", name="dealership_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('Carloan4uStoreBundle:Dealership')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dealership entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dealership'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
