<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015-10-9
 * Time: 17:03
 */

namespace hkgbi\WebBundle\Form;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use hkgbi\WebBundle\Entity\Module;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    private $module_obj;
    public function __construct(Module $module){   //传入想要显示分类列表所属的模块对象
        $this->module_obj = $module;
    }

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('title',null)
            ->add('categories','entity',array(
                'class'=>'hkgbi\WebBundle\Entity\Category',
                'mapped'=>false,
                'placeholder'=>'请选择分类',
                'query_builder'=>function(EntityRepository $er){
                    return $er->createQueryBuilder('m')
                        ->where('m.module = :module')
                        ->setParameters(array('module'=>$this->module_obj))
                        ->orderBy('m.id','ASC');
                },
                'choice_label'=>'name'
                ))
            ->add('imageFile','vich_image',array('label'=>'缩略图','required'=>false))
            ->add('recommended','checkbox')
            ->add('intro',null)
            ->add('content',null);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hkgbi\WebBundle\Entity\Article',
            'csrf_protection' => false
        ));
    }

    public function getName()
    {
        return 'article';
    }

}