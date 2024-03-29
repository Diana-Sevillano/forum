<?php
/**
*
* Stop forum Spam extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace rmcgirr83\stopforumspam\core;

class sfsgroups
{
	/** @var \phpbb\auth\auth */
	protected $auth;

	public function __construct(
			\phpbb\auth\auth $auth)
	{
		$this->auth = $auth;
	}

	/*
	 * just generate a cache of users who are admins and mods
	 * this is used in the listener as well as reporttosfs files
	 */
	public function getadminsmods($forumid)
	{
		// Grab an array of user_id's with admin permissions
		$admin_ary = $this->auth->acl_get_list(false, 'a_', false);
		$admin_ary = (!empty($admin_ary[0]['a_'])) ? $admin_ary[0]['a_'] : array();

		// Grab an array of user id's with global mod permissions
		$mod_ary = $this->auth->acl_get_list(false,'m_', false);
		$mod_ary = (!empty($mod_ary[0]['m_'])) ? $mod_ary[0]['m_'] : array();

		$admins_mods = array_unique(array_merge($admin_ary, $mod_ary));

		// now get just the moderators of the forum
		$forum_mods = $this->auth->acl_get_list(false, 'm_', $forumid);
		$forum_mods = (!empty($forum_mods[$forumid]['m_'])) ? $forum_mods[$forumid]['m_'] : array();

		// merge the arrays
		$admins_mods = array_unique(array_merge($admins_mods, $forum_mods));

		return $admins_mods;
	}
}
