<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Message;

/**
 * @Route("/app/services")
 */
class PollingController extends Controller
{
    /**
     * @Route("/sendMessage")
     */
    public function saveMessageAction(Request $request) {
        $message = new Message();
        $message->setDate(new \DateTime());
        $message->setUserId('1');
        $message->setText($request->request->get('message'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($message);
        $em->flush();
        return new Response('Sent message:' .$message->getText());
    }
    
    /**
     * @Route("/pollMessages")
     */
    public function pollMessagesAction(Request $request) {  
        session_write_close();
        $starttime = time();
        $currenttime = time();
        $newMessage = false;        
        $resp = array('No new messages.');
        $lastMessageTime = $request->request->get('lastMessageTime');
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT m
            FROM AppBundle:Message m
            WHERE m.date > :lastMessageTime
            ORDER BY m.id DESC'
        )->setParameter('lastMessageTime', $lastMessageTime);
        
        while (!$newMessage && $currenttime <= $starttime + 10) {
            $messages = $query->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
            if(!empty($messages)) {
                $newMessage = true;
                $resp = $messages;
            }
            usleep(250000);
            $currenttime = time();
        }
        return new Response(json_encode($resp));
    }
}
