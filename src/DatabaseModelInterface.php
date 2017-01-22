<?php
/**
 * Part of the Joomla Framework Model Package
 *
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Model;

use Joomla\Database\DatabaseDriver;

/**
 * Joomla Framework Database Model Interface
 *
 * @since  __DEPLOY_VERSION__
 * @note   As of 2.0 the `Joomla\Database\DatabaseInterface` will be typehinted.
 */
interface DatabaseModelInterface
{
	/**
	 * Get the database driver.
	 *
	 * @return  DatabaseDriver  The database driver.
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public function getDb();
}