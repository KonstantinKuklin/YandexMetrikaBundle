<?php

namespace KonstantinKuklin\Bundle\YandexMetrikaBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @author Konstantin Kuklin <konstantin.kuklin@gmail.com>
 * Date: 06.12.12
 */
class YandexMetrikaExtension extends \Twig_Extension
{

    /**
     * Container
     *
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return array(
            'yandex_metrika_init' => new \Twig_Function_Method($this, 'yandexMetrikaInit', array('is_safe' => array('html')))
        );
    }

    /**
     * Yandex Metrika initializations
     */
    public function yandexMetrikaInit()
    {
        $config = $this->getContainer()->getParameter('yandex_metrika.config');
        return ($this->getContainer()->get('templating')->render('YandexMetrikaBundle:Metrika:counter.html.twig', array('config' => $config)));
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'yandex_metrika';
    }
}
