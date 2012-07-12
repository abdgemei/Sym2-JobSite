<?php

namespace Kareerak\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class JobType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('jobTitle')
            ->add('description')
            ->add('slug')
            ->add('jobPostCreationTimestamp')
            ->add('jobPostExpiryDate')
            ->add('jobStartDate')
            ->add('experienceNeeded')
            ->add('degreeNeeded')
            ->add('majorNeeded')
            ->add('universityPreferred')
            ->add('concentrationPreferred')
            ->add('workingHours')
            ->add('skill')
            ->add('jobType')
            ->add('industry')
            ->add('employer')
            ->add('country')
            ->add('city')
            ->add('area')
            ->add('careerLevel')
        ;
    }

    public function getName()
    {
        return 'kareerak_frontendbundle_jobtype';
    }
}
