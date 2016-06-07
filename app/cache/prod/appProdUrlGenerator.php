<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'intranet_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_formHours' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::formHoursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formHours',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_formVacations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::formVacationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formVacations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_formExpenses' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::formExpensesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formExpenses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_formRequest' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::formRequestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formRequest',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_bookRoom' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::bookRoomAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bookRoom',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_book' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::bookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/book/{ date }',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_incomingForms' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::incomingFormsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/incomingForms',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_oldForms' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::oldFormsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/oldForms',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_tasks' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::tasksAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tasks',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_userManagement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::userManagementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/userManagement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_settings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::settingsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/settings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'intranet_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'intranetBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/intranet_logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
