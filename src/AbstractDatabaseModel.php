<?php
/**
 * Part of the Joomla Framework Model Package
 *
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Model;

use Joomla\Database\DatabaseInterface;
use Joomla\Registry\Registry;

/**
 * Joomla Framework Database Model Class
 *
 * @since  1.0
 */
abstract class AbstractDatabaseModel extends AbstractModel
{
	/**
	 * The database driver.
	 *
	 * @var    DatabaseInterface
	 * @since  1.0
	 */
	protected $db;

	/**
	 * Instantiate the model.
	 *
	 * @param   DatabaseInterface  $db     The database adapter.
	 * @param   Registry           $state  The model state.
	 *
	 * @since   1.0
	 */
	public function __construct(DatabaseInterface $db, Registry $state = null)
	{
		$this->db = $db;

		parent::__construct($state);
	}

	/**
	 * Get the database driver.
	 *
	 * @return  DatabaseInterface  The database driver.
	 *
	 * @since   1.0
	 */
	public function getDb()
	{
		return $this->db;
	}

	/**
	 * Set the database driver.
	 *
	 * @param   DatabaseInterface  $db  The database driver.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function setDb(DatabaseInterface $db)
	{
		$this->db = $db;
	}
}
