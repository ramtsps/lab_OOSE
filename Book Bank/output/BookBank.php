<?php

error_reporting(E_ALL);

/**
 * untitledModel - BookBank.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 03.02.2024, 14:51:38 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '4')) {
    die('This file was generated for PHP 4');
}

/**
 * include Validity
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('Validity.php');

/* user defined includes */
// section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009CD-includes begin
// section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009CD-includes end

/* user defined constants */
// section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009CD-constants begin
// section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009CD-constants end

/**
 * Short description of class BookBank
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class BookBank
    extends Validity
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute pinNo
     *
     * @access public
     * @var int
     */
    var $pinNo = 0;

    /**
     * Short description of attribute noBooks
     *
     * @access public
     * @var char
     */
    var $noBooks = '';

    /**
     * Short description of attribute bookName
     *
     * @access public
     * @var char
     */
    var $bookName = '';

    /**
     * Short description of attribute data
     *
     * @access public
     * @var int
     */
    var $data = 0;

    /**
     * Short description of attribute fine
     *
     * @access public
     * @var int
     */
    var $fine = 0;

    /**
     * Short description of attribute author
     *
     * @access public
     * @var char
     */
    var $author = '';

    /**
     * Short description of attribute codeNo
     *
     * @access public
     * @var int
     */
    var $codeNo = 0;

    // --- OPERATIONS ---

    /**
     * Short description of method validity
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    function validity()
    {
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009FA begin
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009FA end
    }

    /**
     * Short description of method issueBook
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    function issueBook()
    {
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009FC begin
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009FC end
    }

    /**
     * Short description of method student
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    function student()
    {
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009FE begin
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:00000000000009FE end
    }

    /**
     * Short description of method return
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    function return()
    {
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:0000000000000A00 begin
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:0000000000000A00 end
    }

    /**
     * Short description of method detaits
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    function detaits()
    {
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:0000000000000A02 begin
        // section -64--88--119-1-55a1abd4:18d6dcf59ac:-8000:0000000000000A02 end
    }

} /* end of class BookBank */

?>