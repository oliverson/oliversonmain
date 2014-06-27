<?php
/**
 * Created by PhpStorm.
 * User: pt.son
 * Date: 6/27/14
 * Time: 9:06 AM
 */
class GetFeed{
    /**
     * @var string $feedUrl  - The url of the feed
     */
    public $feedUrl;


    public function getFeeds()
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
    public function getAsXMLContent($xmlElement)
    {
        $content=$xmlElement->asXML();

        $end=strpos($content,'>');
        if ($end!==false)
        {
            $tag=substr($content, 1, $end-1);

            return str_replace(array('<'.$tag.'>', '</'.$tag.'>'), '', $content);
        }
        else
            return '';
    }
}