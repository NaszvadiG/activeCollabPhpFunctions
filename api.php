<?php

require_once '/../ActiveCollab/autoload.php';

use ActiveCollab\Client as API;
use ActiveCollab\Connectors\Curl as CurlConnector;

API::setUrl('http://ac2.widerfunnel.com/public/api.php');
API::setKey('128-YaRFEB2UIKrBNQCxKgozRoftu2G1z0O9cMhzOIVB');
API::setConnector(new CurlConnector);


class ApiCalls
{

    public $projectID;

    function ApiCalls()
    {

    }

    function getAllProjects()
    {
        $projects = API::call('projects/');
        return $projects;
    }

    function getAllItems($projectID)
    {
        $experiments = API::call('projects/' . $projectID . '/tasks/categories');
        return $experiments;
    }

    function getAllItemsByCategory($projectID, $categoryID)
    {
        $name = API::call('projects/' . $projectID . '/tasks/categories/' . $categoryID);
        return $name;
    }


    function getSingleItem($projectID, $taskID)
    {
        $files = API::call('projects/' . $projectID . '/tasks/' . $taskID);
        return $files;
    }


//Change 587 to match logged in user
    function getAllTasks($projectID)
    {
        $tasks = API::call('projects/' . $projectID . '/tasks/');
        return $tasks;
    }

    function getAllFiles($projectID)
    {
        $files = API::call('projects/' . $projectID . '/files');
        return $files;
    }


}





