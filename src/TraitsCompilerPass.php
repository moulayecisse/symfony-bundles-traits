<?php
namespace Cisse\Bundle\TraitsBundle;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class TraitsCompilerPass implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
//        if ($container->hasParameter('twig.form.resources')) {
//            $resources = $container->getParameter('twig.form.resources') ?: [];
//            array_unshift($resources, '@Recaptcha/fields.html.twig');
//            $container->setParameter('twig.form.resources', $resources);
//        }
    }
}
