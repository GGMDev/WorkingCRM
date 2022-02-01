<?php
class UserControl extends EditControl
{
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildControlEnd($validate, $mode);
	}
	
	public function buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
	}
	
	public function initUserControl()
	{		
	}
	
	function getUserSearchOptions()
	{
		return array();		
	}
	
	/**
	 * Form the control specified search options array and built the control's search options markup
	 * @param String selOpt		The search option value	
	 * @param Boolean not		It indicates if the search option negation is set 	
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String			A string containing options markup
	 */		
	function getSearchOptions($selOpt, $not, $both)
	{
		return $this->buildSearchOptions($this->getUserSearchOptions(), $selOpt, $not, $both);		
	}
	
	function init()
	{
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="dbo.Calls" && $field=="contactId")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Select an option";                         // Text to appear in dialog box
$this->settings["select"] = "SELECT id, Code+' - '+firstName+ ' '+lastName from contacts";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "el";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "340px";                                      // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false;                                         // Possible selection of multiple values? Possible values "false" or "true"

// Only if it has been indicated that they are Multiple values
$this->settings["maximumSelectionLength"] = 10;                               // Maximum number of values that can be selected

// Only if you want to show an image next to the selection 
// The third field of the "select" is the key of the 
$this->settings["renderImage"] = false;                                      // true or false. true = we want to present image
$this->settings["urlImage"] = './images/{1}.png';                            // URL to download the image. The parameter "{1}" will be replaced by the third field of the "select"
$this->settings["widthImage"] = 30;                                          // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="dbo.Calls" && $field=="callEnd" && $this->pageObject->pageType=="edit")
	{
		$this->settings["required"] = false; // Wether is mandatory
$this->settings["tooltip"] = "Click here to enter date / time"; // Information tooltip

$this->settings["format"] = "DD/MM/YYYY HH:mm"; // MomentJS Format. Check http://momentjs.com
$this->settings["shortTime"] = false; // Display 12 hours AM|PM
$this->settings["minDate"] = null; // Minimum selectable date
$this->settings["maxDate"] = null; // Maximum selectable date
$this->settings["currentDate"] = null; // Initial date
$this->settings["date"] = true; // Has datepicker
$this->settings["time"] = true; // Has timepicker
$this->settings["clearButton"] = true; // Show clear button
$this->settings["nowButton"] = true; // Show now button
$this->settings["switchOnClick"] = true; // Switch view on click
$this->settings["cancelText"] = "Cancel"; // Text for the cancel button
$this->settings["okText"] = "OK"; // Text for the OK button
$this->settings["clearText"] = "Clear"; // Text for the clear button
$this->settings["nowText"] = "Now"; // Text for the now button
$this->settings["lang"] = "en"; // Language for displaying names
$this->settings["weekStart"] = 0; // Beggining day of week;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="dbo.CallsBackofficeView" && $field=="contactId")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Select an option";                         // Text to appear in dialog box
$this->settings["select"] = "SELECT id, Code+' - '+firstName+ ' '+lastName from contacts";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "el";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "340px";                                      // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false;                                         // Possible selection of multiple values? Possible values "false" or "true"

// Only if it has been indicated that they are Multiple values
$this->settings["maximumSelectionLength"] = 10;                               // Maximum number of values that can be selected

// Only if you want to show an image next to the selection 
// The third field of the "select" is the key of the 
$this->settings["renderImage"] = false;                                      // true or false. true = we want to present image
$this->settings["urlImage"] = './images/{1}.png';                            // URL to download the image. The parameter "{1}" will be replaced by the third field of the "select"
$this->settings["widthImage"] = 30;                                          // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="dbo.CallsBackofficeView" && $field=="callEnd" && $this->pageObject->pageType=="edit")
	{
		$this->settings["required"] = false; // Wether is mandatory
$this->settings["tooltip"] = "Click here to enter date / time"; // Information tooltip

$this->settings["format"] = "DD/MM/YYYY HH:mm"; // MomentJS Format. Check http://momentjs.com
$this->settings["shortTime"] = false; // Display 12 hours AM|PM
$this->settings["minDate"] = null; // Minimum selectable date
$this->settings["maxDate"] = null; // Maximum selectable date
$this->settings["currentDate"] = null; // Initial date
$this->settings["date"] = true; // Has datepicker
$this->settings["time"] = true; // Has timepicker
$this->settings["clearButton"] = true; // Show clear button
$this->settings["nowButton"] = true; // Show now button
$this->settings["switchOnClick"] = true; // Switch view on click
$this->settings["cancelText"] = "Cancel"; // Text for the cancel button
$this->settings["okText"] = "OK"; // Text for the OK button
$this->settings["clearText"] = "Clear"; // Text for the clear button
$this->settings["nowText"] = "Now"; // Text for the now button
$this->settings["lang"] = "en"; // Language for displaying names
$this->settings["weekStart"] = 0; // Beggining day of week;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="callsAgentView" && $field=="contactId")
	{
		$this->settings["required"] = false;                                         // Wether is mandatory
$this->settings["placeholder"] = "Select an option";                         // Text to appear in dialog box
$this->settings["select"] = "SELECT id, Code+' - '+firstName+ ' '+lastName from contacts";           // query to database, first field is the key and second, text to display. Optional, third field for the image 
$this->settings["language"] = "el";                                          // interface language, example: es, it, fr, .....
$this->settings["allowClear"] = true;                                        // if it shows an icon to leave the field empty. Values "true" and "false"
$this->settings["FieldWidth"] = "340px";                                      // Field width, can be defined in "px" or "%"
$this->settings["multiple"] = false;                                         // Possible selection of multiple values? Possible values "false" or "true"

// Only if it has been indicated that they are Multiple values
$this->settings["maximumSelectionLength"] = 10;                               // Maximum number of values that can be selected

// Only if you want to show an image next to the selection 
// The third field of the "select" is the key of the 
$this->settings["renderImage"] = false;                                      // true or false. true = we want to present image
$this->settings["urlImage"] = './images/{1}.png';                            // URL to download the image. The parameter "{1}" will be replaced by the third field of the "select"
$this->settings["widthImage"] = 30;                                          // image rendering size;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="callsAgentView" && $field=="callEnd" && $this->pageObject->pageType=="edit")
	{
		$this->settings["required"] = false; // Wether is mandatory
$this->settings["tooltip"] = "Click here to enter date / time"; // Information tooltip

$this->settings["format"] = "DD/MM/YYYY HH:mm"; // MomentJS Format. Check http://momentjs.com
$this->settings["shortTime"] = false; // Display 12 hours AM|PM
$this->settings["minDate"] = null; // Minimum selectable date
$this->settings["maxDate"] = null; // Maximum selectable date
$this->settings["currentDate"] = null; // Initial date
$this->settings["date"] = true; // Has datepicker
$this->settings["time"] = true; // Has timepicker
$this->settings["clearButton"] = true; // Show clear button
$this->settings["nowButton"] = true; // Show now button
$this->settings["switchOnClick"] = true; // Switch view on click
$this->settings["cancelText"] = "Cancel"; // Text for the cancel button
$this->settings["okText"] = "OK"; // Text for the OK button
$this->settings["clearText"] = "Clear"; // Text for the clear button
$this->settings["nowText"] = "Now"; // Text for the now button
$this->settings["lang"] = "en"; // Language for displaying names
$this->settings["weekStart"] = 0; // Beggining day of week;
		return;
	}	
	}
}
?>