<?php

namespace DevMStudy\TaskManageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TaskManageController extends Controller
{
    public function listAction()
    {
        return $this->render('DevMStudyTaskManageBundle:TaskManage:list.html.php');

    }

    public function createAction()
    {
    }

    public function updateAction($id)
    {
    }

    public function deleteAction($id)
    {
    }

}
