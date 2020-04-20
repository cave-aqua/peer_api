<?php

namespace App\EventSubscriber;

use ApiPlatform\Core\EventListener\EventPriorities;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class QuestionCheck extends AbstractController implements EventSubscriberInterface
{
	/**
	 * @var $requestStack
	 */
	private $requestStack;

	public function __construct(RequestStack $requestStack)
	{
		$this->requestStack = $requestStack;
	}

	public static function getSubscribedEvents()
	{
		return [
		    KernelEvents::VIEW => ['checkStudent', EventPriorities::PRE_WRITE]
		];
	}

	public function checkStudent(ViewEvent $event)
	{
		$request = $event->getRequest();
		$request_gegevens = json_decode($request->getContent());

		if(isset($request_gegevens->studentNR)){


			$entityManager = $this->getDoctrine()->getManager();
			$repository = $entityManager->getRepository("App\Entity\Test");

			$user = $repository->findOneBy(
			    [
				  'studentNR' => $request_gegevens->studentNR
			    ]
			);

			if ($user == NULL){
				echo 'Yeeh';
			}else{
				echo 'User is al gebruikt';
				die();
			}
		}

	}

}