<?php

defined('_JEXEC') or die('Access denied');

jimport('joomla.application.component.model');

class ChatterModelChatter extends JModelLegacy
{
	# Function to insert and store the last msg input by user.
	function insert($msg, $user)
	{
		$db = JFactory::getDBO();
		$query = "INSERT INTO `#__chatter_msgs`(`msgs`,`userId`) VALUES('$msg', '$user');";
		$db->setQuery($query);
		if($db->query())
		{
			return $db->insertid();
		}
		else
		{
			return false;
		}
	}

	# Function to select last inserted chat msg w.r.t last inserted ID.
	function selectLastInserted($id)
	{
		$id = (INT)$id;

		$db = JFactory::getDBO();
		$query = "SELECT M.msgs, U.name FROM `#__chatter_msgs` AS M LEFT JOIN `#__users` as U ON M.userId=U.id WHERE M.id=$id LIMIT 1;";
		$lastInsData=$db->setQuery($query)->loadObject();
        
		return $lastInsData;
	}
}