<?php
/**
 * FileDoc: 
 * Widget for YaSimpleWidget.
 * !!! ATTENTION !!! this widget only supports XML format
 *  
 * Usage:
 * 
 * 1. Copy ya-simple-feed directory into the extensions directory
 * 
 * 2. Use the widget in a view specifying 
 *		a. the url of the feed to grab and
 *		b. the speed of slideshow (OPTIONAL, default is 5)
 *		c. the direction of feed (OPTIONAL, default is 'left')
 * 
 * eg.
 * <?php 
 * 	$this->widget(
 *		'ext.ya-simple-feed.YaSimpleFeed',
 *		array(
 *		'feedUrl'=>'http://yourfeedsite.com/page.xml,
 *		)
 *	); 
 * ?>
 * 
 * PHP version 5.3
 * 
 * @category Extensions
 * @package  YaSimpleFeed
 * @author   Biagio Tagliaferro <tarab@email.it>
 *
*/

//Yii::import('ext.ya-simple-feed.*');

class YaSimpleFeed extends CWidget
{
	/** 
     * @var string $feedUrl  - The url of the feed 
     */
	public $feedUrl;
	
	
	private function getFeeds()
	{
		$rawFeed = file_get_contents($this->feedUrl);
		
		// give an XML object to be iterate
		$xml = new SimpleXMLElement($rawFeed);
			
		$news = array();
		
		foreach($xml->channel->item as $item)
		{
            $news[]= $item;
		}

		return $news;
	}
	
	public function run()
	{
		if($this->checkConnection())
			return $this->getFeeds();
	}
	
	/** check if the pc is connected to internet
	 * @return TRUE if there is a connection
	 */
	private function checkConnection()
	{
		// Initiates a socket connection to www.google.com at port 80
		$conn = @fsockopen("www.google.com", 80);
		if($conn)
		{
			// there is a connection
			fclose($conn);
			return TRUE;
		}
		
		return FALSE;
	}
}

?>