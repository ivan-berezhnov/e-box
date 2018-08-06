<?php

namespace AppBundle\Form;

use AppBundle\Entity\Customers;
use AppBundle\Entity\Orders;
use AppBundle\Entity\ProductCategories;
use AppBundle\Repository\OrdersRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productName')
            ->add('productBuy')
            ->add('productSale')
            ->add('dateCreated')
            ->add('dateDelivery')
            ->add('productCategory',CollectionType::class, array(
                'entry_type' => ProductCategoryFormType::class,
                'entry_options' => array('label' => false),
            ))
            ->add('customers', CollectionType::class, array(
                'entry_type' => CustomerFormType::class,
                'entry_options' => array('label' => false),
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Customers::class
        ]);
    }
}