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
        return $this->render('DevMStudyTaskManageBundle:TaskManage:create.html.php');
    }

    public function updateAction($id)
    {
        return $this->render('DevMStudyTaskManageBundle:TaskManage:update.html.php');
    }

    public function deleteAction($id)
    {
        return $this->render('DevMStudyTaskManageBundle:TaskManage:delete.html.php');
    }

}
