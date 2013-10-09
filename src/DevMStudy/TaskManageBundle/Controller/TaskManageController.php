<?php

namespace DevMStudy\TaskManageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskManageController extends Controller
{
    public function listAction(Request $request)
    {
        return $this->render('DevMStudyTaskManageBundle:TaskManage:list.html.php');
    }

    public function createAction(Request $request)
    {
        return $this->render('DevMStudyTaskManageBundle:TaskManage:create.html.php');
    }

    public function updateAction(Request $request)
    {
        return $this->render('DevMStudyTaskManageBundle:TaskManage:update.html.php');
    }

    public function deleteAction(Request $request)
    {
        return $this->render('DevMStudyTaskManageBundle:TaskManage:delete.html.php');
    }

}
