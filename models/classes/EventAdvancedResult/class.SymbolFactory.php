<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2002-2008 (original work) Public Research Centre Henri Tudor & University of Luxembourg (under the project TAO & TAO2);
 *               2008-2010 (update and modification) Deutsche Institut für Internationale Pädagogische Forschung (under the project TAO-TRANSFER);
 *               2009-2012 (update and modification) Public Research Centre Henri Tudor (under the project TAO-SUSTAIN & TAO-DEV);
 * 
 */

/**
 * Short description of class
 *
 * @access public
 * @author Younes Djaghloul, <younes.djaghloul@tudor.lu>
 * @package taoResults
 
 */
class taoResults_models_classes_EventAdvancedResult_SymbolFactory
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : n    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute symbolOfPatternCollection
     *
     * @access private
     * @var array
     */
    private $symbolOfPatternCollection = array();

    // --- OPERATIONS ---

    /**
     * Short description of method __construct
     *
     * @access public
     * @author Younes Djaghloul, <younes.djaghloul@tudor.lu>
     * @return mixed
     */
    public function __construct()
    {
        // section 10-13-1--65--6ef728ed:12db72853fd:-8000:0000000000002BB5 begin
        // section 10-13-1--65--6ef728ed:12db72853fd:-8000:0000000000002BB5 end
    }

    /**
     * create the symbol, without using SymbolDescription class
     *
     * @access public
     * @author Younes Djaghloul, <younes.djaghloul@tudor.lu>
     * @param  string symbolLetter
     * @param  string patternQuery
     * @param  string symbolComment
     * @return taoResults_models_classes_EventAdvancedResult_SymbolDescription
     */
    public static function create($symbolLetter, $patternQuery, $symbolComment = 'This symbol is ...')
    {
        $returnValue = null;

        // section 10-13-1--65--6ef728ed:12db72853fd:-8000:0000000000002BB7 begin
        // section 10-13-1--65--6ef728ed:12db72853fd:-8000:0000000000002BB7 end

        return $returnValue;
    }

    /**
     * add symbol the the list of symbols
     *
     * @access public
     * @author Younes Djaghloul, <younes.djaghloul@tudor.lu>
     * @param  SymbolDescription symbol
     * @return array
     */
    public function addSymbol( taoResults_models_classes_EventAdvancedResult_SymbolDescription $symbol)
    {
        $returnValue = array();

        // section 10-13-1--65--6ef728ed:12db72853fd:-8000:0000000000002BBD begin
        // section 10-13-1--65--6ef728ed:12db72853fd:-8000:0000000000002BBD end

        return (array) $returnValue;
    }

    /**
     * get the current collection
     *
     * @access public
     * @author Younes Djaghloul, <younes.djaghloul@tudor.lu>
     * @return array
     */
    public function getSymbolDescription()
    {
        $returnValue = array();

        // section 10-13-1--65--6ef728ed:12db72853fd:-8000:0000000000002BC0 begin
        // section 10-13-1--65--6ef728ed:12db72853fd:-8000:0000000000002BC0 end

        return (array) $returnValue;
    }

} /* end of class taoResults_models_classes_EventAdvancedResult_SymbolFactory */

?>