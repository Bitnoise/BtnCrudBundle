<?php

namespace Btn\CrudBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\SubmitButtonTypeInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;

/**
 *
 */
class BtnDeleteType extends AbstractType implements SubmitButtonTypeInterface
{
    /** @var \Symfony\Component\Translation\TranslatorInterface $translator */
    protected $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'label' => 'crud.delete',
            'attr'  => array(
                'data-confirmation' => 'true',
                'data-message'      => $this->translator->trans('crud.confirm.message'),
                'data-title'        => $this->translator->trans('crud.confirm.title'),
                'class'             => 'btn btn-danger delete',
            ),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'submit';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'btn_delete';
    }
}
