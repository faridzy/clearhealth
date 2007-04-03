<?php
/**
 * Object Relational Persistence Mapping Class for table: person_participation_program
 *
 * @package	com.uversainc.celini
 * @author	Uversa Inc.
 */
class PersonParticipationProgram extends ORDataObject {

	/**#@+
	 * Fields of table: person_participation_program mapped to class members
	 */
	var $person_program_id		= '';
	var $participation_program_id		= '';
	var $person_id		= '';
	var $start		= '';
	var $end		= '';
	var $expires		= 1;
	var $active		= 1;
	/**#@-*/


	/**
	 * DB Table
	 */
	var $_table = 'person_participation_program';

	/**
	 * Primary Key
	 */
	var $_key = 'person_program_id';
	
	/**
	 * Internal Name
	 */
	var $_internalName = 'PersonParticipationProgram';

	/**
	 * Handle instantiation
	 */
	function PersonParticipationProgram() {
		parent::ORDataObject();
	}

	
	/**#@+
	 * Field: start, time formatting
	 */
	function get_start() {
		return $this->_getDate('start');
	}
	function set_start($date) {
		$this->_setDate('start',$date);
	}
	/**#@-*/

	/**#@+
	 * Field: end, time formatting
	 */
	function get_end() {
		return $this->_getDate('end');
	}
	function set_end($date) {
		$this->_setDate('end',$date);
	}

	function connectedProgramList($patient) {

	}
	/**#@-*/

}
?>
