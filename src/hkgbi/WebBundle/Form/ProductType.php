<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-9
 * Time: 17:03
 */

namespace hkgbi\WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('name',null,array('label'=>'基金名称','attr'=>array('placeholder'=>'基金名称')))
            ->add('type',null,array('label'=>'基金类型','attr'=>array('placeholder'=>'基金类型')))
            ->add('created_date','date',array('label'=>'成立日期','widget'=>'choice','format'=>'yyyy-MM-dd','years'=>range(2015,2015,1)))
            ->add('imageFile','vich_image',array('label'=>'缩略图','required'=>false))
            ->add('intro',null)
            ->add('product_overview',null)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hkgbi\WebBundle\Entity\Product',
        ));
    }

    public function getName()
    {
        return 'product';
    }

}